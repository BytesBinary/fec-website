<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;

class EditPage extends Controller
{
    public function edit_page($id, $slug, $section )
    {
        $page_metas = PageMetas::where('page_id', $id)->get();
        foreach ($page_metas as $meta) {
            $meta->meta_value = json_decode($meta->meta_value, true);
        }
        if( 'hero_section' === $section ) {
            $hero_section = $page_metas->where('meta_key', 'hero_section')->first();
            return view('admin.edit-pages.home.hero-section', array('hero_section'=>$hero_section) );
        }

        return redirect()->back();
    }

    public function edit_section( $section, $request, $id )
    {
        if( 'hero_section' === $section ) {
            return $this->update_hero_section($request, $id);
        }

        return  redirect()->back();
    }

    public function update_hero_section($request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'name' => 'required|string',
            'slogan' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_image*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destinationPath = public_path('/images/home');
        $logo = 'hero_img_' . time() . '.' . $request->image->extension();

        $request->image->move($destinationPath, $logo);
        foreach ($request->bg_image as $key => $image) {
            $imageName = 'hero_bg_img_' . $key . '_' . time() . '.' . $image->extension();
            $image->move($destinationPath, $imageName);
            $bg_images[$key] = '/images/home/' . $imageName;
        }

        PageMetas::updateOrCreate([
            'page_id' => $id,
            'meta_key' => 'hero_section'
        ], [
            'page_id' => $id,
            'meta_value' => json_encode([
                'title' => $request->title,
                'name' => $request->name,
                'slogan' => $request->slogan,
                'image' => '/images/home/' . $logo,
                'bg_images' => json_encode(
                    $bg_images
                )
            ]),
            'meta_type' => 'json'
        ]);

        session()->flash('message', 'Hero section updated successfully');
        return redirect()->back();
    }
}
