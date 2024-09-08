<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Traits\HomeTraits;

class EditPage extends Controller
{
    use HomeTraits;
    protected $updateMethods = [
        'hero_section' => 'update_hero_section',
        'administration_section' => 'update_administration_section',
        'short_details_section' => 'short_details_section',
        'online_services_section' => 'update_online_services_section',
        'faq_section' => 'update_faq_section',
    ];

    public function edit_page($id, $slug, $section)
    {
        switch ($section) {
            case 'hero_section':
                $section = get_page_meta($id, 'meta_key', 'hero_section');
                $section = (count($section) > 0) ? current($section)['meta_value'] : '';
                isset($section['bg_images']) ? $section['bg_images'] = json_decode($section['bg_images']) : '';
                $view = 'admin.edit-pages.home.hero-section';
                break;
            case 'administration_section':
                $section = get_page_meta($id, 'meta_type', 'administration');
                $view = 'admin.edit-pages.home.administration-section';
                break;
            case 'short_details_section':
                $section = get_page_meta( $id, 'meta_key', 'short_details_section' );
                $section = (count($section) > 0) ? current($section)['meta_value'] : '';
                $view = 'admin.edit-pages.home.short-details';
                break;
            case 'online_services_section':
                $section = get_page_meta($id, 'meta_type', 'online_services');
                $view = 'admin.edit-pages.home.online-services';
                break;
            case 'faq_section':
                $section = get_page_meta($id, 'meta_type', 'faq');
                $view = 'admin.edit-pages.home.faq';
                break;
            default:
                return redirect()->back();
        }

        return view($view, compact('section'));
    }

    public function edit_section($section, $request, $id)
    {
        return isset($this->updateMethods[$section])
            ? $this->{$this->updateMethods[$section]}($request, $id)
            : redirect()->back();
    }

    public function view_edited_changes()
    {
        return view('admin.edit-pages.home.view-changes');
    }
}
