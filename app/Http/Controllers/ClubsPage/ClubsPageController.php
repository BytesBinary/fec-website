<?php

namespace App\Http\Controllers\ClubsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubsPageController extends Controller
{
    public function RIC(){
        return view("clubs.ric-research-&-innovation-center");
    }
    public function FECCDC(){
        return view('clubs.feccdc-cyber-defense-club');
    }
    public function FECDC(){
        return view('clubs.fecdc-debating-club');
    }
    public function FECSA(){
        return view('clubs.fecsa-sports-association');
    }
    public function FECPhoto(){
        return view('clubs.fecpc-photographic-club');
    }
    public function FECCP(){
        return view('clubs.feccp-club-of-profession');
    }
    public function FECPC(){
        return view('clubs.fecpc-programming-club');
    }
    public function FECIRDC(){
        return view('clubs.fecirdc-islamic-research-&-dawah-center');
    }

    public function FECRSG()
    {
        return view('clubs.fecrsg-rover-scout-group');
    }
}
