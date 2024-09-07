<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.post.create-post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'date' => 'required|date',
            'main_content' => 'required',
            'cover_image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);


        // Move images from temp-uploads to the permanent location
        $main_content = $request->main_content;
        $modified_content = $main_content;
        preg_match_all('/<img src="(.*?)"/', $main_content, $matches);

        foreach ($matches[1] as $imageUrl) {
            $imageName = basename(parse_url($imageUrl, PHP_URL_PATH)); // Extract image name

            $oldImagePath = public_path('/post/temp-store/' . $imageName); // Temp store path
            $newImagePath = public_path('/post/' . $imageName); // New destination path

            if (file_exists($oldImagePath)) {
                if (rename($oldImagePath, $newImagePath)) {
                    $newImageUrl = asset('/post/' . $imageName);
                    $modified_content = str_replace($imageUrl, $newImageUrl, $main_content);
                    if( file_exists(public_path('/post/temp-store/' . $imageName)) ) {
                        unlink(public_path('/post/temp-store/' . $imageName));
                    }
                }
            }
        }

        if ($request->hasFile('cover_image')) {
            $cover = $request->file('cover_image');
            if ($cover->isValid()) {
                $name = 'cover_'. time() . '.' . $cover->getClientOriginalExtension();
                $cover->move(public_path('/post/covers/'), $name);
            } else {
                // Handle invalid file upload
                return response()->json(['error' => 'Invalid file upload'], 400);
            }
        } else {
            // Handle case where no file is uploaded
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $post = new Post();
        $post->title = $request->title;
        $post->type = $request->type;
        $post->date = $request->date;
        $post->content = $modified_content;
        $post->slug = time() . '_' .$request->title;
        $post->cover = '/post/covers/' . $name;
        $post->save();

        session()->flash('success', 'Post created successfully!');
        return redirect()->route('admin.posts.create');
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit-post', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'type' => 'required|string',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.posts.edit', $post)->with('success', 'Post updated successfully!');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $targetPath = public_path('/post/temp-store/');
        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $image->move($targetPath, $name);

        // Return the image URL
        return response()->json(['imageUrl' => asset('/post/temp-store/' . $name)]);
    }
}
