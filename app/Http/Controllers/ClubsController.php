<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function ric()
    {
        return view('clubs.ric');
    }
    public function cyber_protector()
    {
        return view('clubs.cyber-protector');
    }
    public function photography()
    {
        return view('clubs.photography');
    }
    public function debating()
    {
        return view('clubs.debating');
    }
    public function club_of_professional()
    {
        return view('clubs.club-of-professional');
    }
    public function rover_scout()
    {
        return view('clubs.rover-scout');
    }
    public function fecsa()
    {
        return view('clubs.fecsa');
    }
    public function programming()
    {
        return view('clubs.programming');
    }
    public function islamic_research()
    {
        return view('clubs.islamic-research');
    }
    public function bani_archana()
    {
        return view('clubs.bani-archana');
    }
}
