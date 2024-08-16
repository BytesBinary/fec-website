<?php

namespace App\Http\Controllers\ClubsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubsPageController extends Controller
{
    public function RIC(){
        return view("pages.clubs.ric-research-&-innovation-center");
    }
    public function FECCDC(){
        return view('pages.clubs.feccdc-cyber-defense-club');
    }
    public function FECDC(){
        return view('pages.clubs.fecdc-debating-club');
    }
    public function FECSA(){
        return view('pages.clubs.fecsa-sports-association');
    }
    public function FECPhoto(){
        return view('pages.clubs.fecpc-photographic-club');
    }
    public function FECCP(){
        return view('pages.clubs.feccp-club-of-profession');
    }
    public function FECPC(){
        return view('pages.clubs.fecpc-programming-club');
    }
    public function FECIRDC(){
        return view('pages.clubs.fecirdc-islamic-research-&-dawah-center');
    }

    public function FECRSG()
    {
        return view('pages.clubs.fecrsg-rover-scout-group');
    }
}
