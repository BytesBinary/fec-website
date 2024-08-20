<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    public function admin()
    {
        return view('pages.admin');
    }

    public function charts()
    {
        return view('pages.adminpanel.charts.chartsjs');
    }

    public function forms()
    {
        return view('pages.adminpanel.forms.basic-elements');
    }

    public function icons()
    {
        return view('pages.adminpanel.icons.font-awesome');
    }

    public function blankpage()
    {
        return view('pages.adminpanel.samples.blank-page');
    }

    public function error404()
    {
        return view('pages.adminpanel.samples.error-404');
    }

    public function error500()
    {
        return view('pages.adminpanel.samples.error-500');
    }

    public function login()
    {
        return view('pages.adminpanel.samples.login');
    }

    public function register()
    {
        return view('pages.adminpanel.samples.register');
    }

    public function tables()
    {
        return view('pages.adminpanel.tables.basic-table');
    }

    public function buttons()
    {
        return view('pages.adminpanel.ui-features.buttons');
    }

    public function dropdowns()
    {
        return view('pages.adminpanel.ui-features.dropdowns');
    }

    public function typography()
    {
        return view('pages.adminpanel.ui-features.typography');
    }
}
