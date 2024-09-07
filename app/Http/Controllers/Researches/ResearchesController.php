<?php

namespace App\Http\Controllers\Researches;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ResearchesController extends Controller
{
    public function load_page()
    {
        $researches = Post::where('type', 'research')->get();
        return view('pages.activities.researches', compact('researches'));
    }
    public function view_research($slug){
        $research = Post::where('slug',$slug)->first();
        if( empty($research) ){
            return view('404');
        }
        return view('pages.research.view',compact('research'));
    }
}
