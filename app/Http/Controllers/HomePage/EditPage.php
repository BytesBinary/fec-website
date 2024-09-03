<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Traits\HomeTraits;

class EditPage extends Controller
{
    use HomeTraits;
    public function edit_page($id, $slug, $section)
    {
        // Pages Meta Already Decoded
        $page_metas = PageMetas::where('page_id', $id)->get();
        foreach ($page_metas as $meta) {
            $meta->meta_value = json_decode($meta->meta_value, true);
        }

        if ('hero_section' === $section) {
            $hero_section = $page_metas->where('meta_key', 'hero_section')->first();
            return view('admin.edit-pages.home.hero-section', array('hero_section' => $hero_section));
        }

        else if ('administration_section' === $section) {
            $administration_section = PageMetas::where('page_id', $id)
                ->where('meta_type', 'administration')
                ->get();
            foreach ($administration_section as $section) {
                $section->meta_value = json_decode($section->meta_value, true);
            }
            $administration_section = $administration_section->toArray();
            return view('admin.edit-pages.home.administration-section', array('administration_section' => $administration_section));
        }

        else if ('short_details_section' === $section) {
            $short_details = $page_metas->where('meta_key', 'short_details_section')->first();
            $meta = $short_details->meta_value ?? array();
            return view('admin.edit-pages.home.short-details', array('short_details' => $meta));
        }

         else if ('online_services_section' === $section) {
            // Fetch online services section from the database
            $online_services_section = PageMetas::where('page_id', $id)
                ->where('meta_type', 'online_services')
                ->get();

            // Decode the meta_value for each section
            $online_services_section->transform(function ($item) {
                $item->meta_value = json_decode($item->meta_value, true);
                return $item;
            });

            // Convert the collection to an array for passing to the view
            return view('admin.edit-pages.home.online-services', [
                'online_services' => $online_services_section->toArray()
            ]);
        }


        return redirect()->back();
    }

    public function edit_section($section, $request, $id)
    {
        if ('hero_section' === $section) {
            return $this->update_hero_section($request, $id);
        } else if ('administration_section' === $section) {
            return $this->update_administration_section($request, $id);
        } else if ('short_details_section' === $section) {
            return $this->short_details_section($request, $id);
        } else if ('online_services_section' === $section) {
            return $this->update_online_services_section($request, $id);
        }
        return  redirect()->back();
    }
}
