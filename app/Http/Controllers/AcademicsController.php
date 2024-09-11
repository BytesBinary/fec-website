<?php

namespace App\Http\Controllers;

use App\Models\AcademicsResources;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function notices()
    {
        $notices = AcademicsResources::where('type', 'notice')
                    ->orderBy('created_at', 'asc')
                    ->paginate(30);

        return view('notices', [
            'notices' => $notices,
        ]);
    }
}
