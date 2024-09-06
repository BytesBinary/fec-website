<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Traits\HomeTraits;

class EditPage extends Controller
{
    use HomeTraits;

    protected $views = [
        'hero_section' => 'admin.edit-pages.home.hero-section',
        'administration_section' => 'admin.edit-pages.home.administration-section',
        'short_details_section' => 'admin.edit-pages.home.short-details',
        'online_services_section' => 'admin.edit-pages.home.online-services',
        'faq_section' => 'admin.edit-pages.home.faq',
    ];

    protected $updateMethods = [
        'hero_section' => 'update_hero_section',
        'administration_section' => 'update_administration_section',
        'short_details_section' => 'short_details_section',
        'online_services_section' => 'update_online_services_section',
        'faq_section' => 'update_faq_section',
    ];

    public function edit_page($id, $slug, $section)
    {
        $page_metas = PageMetas::where('page_id', $id)->get()->each(function ($meta) {
            $meta->meta_value = json_decode($meta->meta_value, true);
        });

        if (isset($this->views[$section])) {
            if (in_array($section, ['administration_section', 'online_services_section', 'faq_section'])) {
                $section_data = PageMetas::where('page_id', $id)
                    ->where('meta_type', str_replace('_section', '', $section))
                    ->get()
                    ->each(function ($item) {
                        $item->meta_value = json_decode($item->meta_value, true);
                    });
                return view($this->views[$section], [
                    str_replace('_section', '', $section) => $section_data->toArray()
                ]);
            } else {
                $meta = $page_metas->where('meta_key', $section)->first()->meta_value ?? [];
                return view($this->views[$section], [$section => $meta]);
            }
        }

        return redirect()->back();
    }

    public function edit_section($section, $request, $id)
    {
        return isset($this->updateMethods[$section])
            ? $this->{$this->updateMethods[$section]}($request, $id)
            : redirect()->back();
    }
}
