<?php

namespace App\Traits;

use App\Models\PageMetas;

trait HomeTraits
{
    public function update_hero_section($request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'name' => 'required|string',
            'slogan' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destinationPath = public_path('/images/home');
        $logo = 'hero_img_logo.' . $request->image->extension();

        $request->image->move($destinationPath, $logo);
        foreach ($request->bg_image as $key => $image) {
            $imageName = 'hero_bg_img_' . $key . '.' . $image->extension();
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
            'meta_type' => 'hero'
        ]);

        session()->flash('message', 'Hero section updated successfully');
        return redirect()->back();
    }

    public function update_administration_section($request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destinationPath = public_path('/images/home');
        $image = 'admin_img_.' . $request->designation . '.' . $request->image->extension();
        $request->image->move($destinationPath, $image);

        PageMetas::updateOrCreate([
            'page_id' => $id,
            'meta_key' => 'administration_section_' . $request->designation
        ], [
            'page_id' => $id,
            'meta_value' => json_encode(sanitize_request($request, ['image' => 'images/home/' . $image])),
            'meta_type' => 'administration'
        ]);

        session()->flash('message', 'Administration section updated successfully');
        return redirect()->back();
    }

    public function short_details_section($request, $id)
    {
        $request->validate([
            "established_text" => "required|string",
            "established_year" => "required|digits:4",
            "departments_text" => "required|string",
            "departments_value" => "required|integer",
            "students_text" => "required|string",
            "students_value" => "required|integer",
            "faculty_member_text" => "required|string",
            "faculty_member_value" => "required|integer",
        ]);

        PageMetas::updateOrCreate(
            [
                'page_id' => $id,
                'meta_key' => 'short_details_section'
            ],
            [
                'page_id' => $id,
                'meta_value' => json_encode(sanitize_request($request)),
                'meta_type' => 'short_details',
            ]
        );

        session()->flash('message', 'Short Details Section Updated Sucessfully');
        return redirect()->back();
    }

    public function update_online_services_section($request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'btn-url' => 'required|string',
            'btn-txt' => 'required|string',
            'image' => 'required|image|mimes:svg|max:2048',
        ]);

        $metaKey = create_unique_meta_key('online_services_section');
        $destinationPath = public_path('/images/home');
        $imageName = 'admin_img_' . time() . '.' . $request->image->extension();
        $request->image->move($destinationPath, $imageName);

        PageMetas::updateOrCreate(
            [
                'page_id' => $id,
                'meta_key' => $metaKey,
            ],
            [
                'page_id' => $id,
                'meta_value' => json_encode(sanitize_request($request, ['image' => '/images/home/' . $imageName])),
                'meta_type' => 'online_services'
            ]
        );

        session()->flash('message', 'Online Services Section Updated Successfully');
        return redirect()->back();
    }
    public function update_faq_section($request, $id)
    {
        $request->validate([
            'question' => 'required|string',
            'ans' => 'required|string',
        ]);

        // Prepare the data to be stored in the database
        $metaValue = [
            'question' => $request->question,
            'ans' => $request->ans,
        ];
        $metaKey = create_unique_meta_key('faq_section');
        // Update or create the record in the PageMetas table
        PageMetas::updateOrCreate(
            [
                'page_id' => $id,
                'meta_key' => $metaKey,
            ],
            [
                'page_id' => $id,
                'meta_value' => json_encode($metaValue), // Encode the meta value to JSON
                'meta_type' => 'faq'
            ]
        );

        // Set a success message and redirect back
        session()->flash('message', 'FAQ Section Updated Successfully');
        return redirect()->back();
    }
}
