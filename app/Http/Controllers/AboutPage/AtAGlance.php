<?php

namespace App\Http\Controllers\AboutPage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;

class AtAGlance extends Controller
{
    public function view_edited_changes()
    {
        return view('admin.edit-pages.about.at-a-glance');
    }

    public function edit_section( $section, $request, $page_id)
    {
        $request->validate([
           'content' => 'required',
           'video_url' => 'required|string',
           'image' => 'required|image|mimes:png|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = 'at_a_glance.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        $meta = [
            'content' => $request->all()['content'],
            'video_url' => $request->video_url,
            'image' => $imageName,
        ];

        PageMetas::updateOrCreate([
            'page_id' => $page_id,
            'meta_key' => 'at_a_glance',
            ]
            ,[
            'page_id' => $page_id,
            'meta_key' => 'at_a_glance',
            'meta_value' => json_encode($meta),
        ]);

        session()->flash('message', 'Changes saved successfully');
        return redirect()->back();
    }
}
