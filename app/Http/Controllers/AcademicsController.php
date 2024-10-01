<?php

namespace App\Http\Controllers;

use App\Models\AcademicsResources;
use App\Models\Notice;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function notices()
    {
        $notices = Notice::where('type', 'common')
                    ->orderBy('created_at', 'asc')
                    ->paginate(15);

        return view('notices', [
            'notices' => $notices,
        ]);
    }
}
