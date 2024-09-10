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

        if( $notices ) {
            $firstNoticeId = json_encode($notices->first()->id);
            $firstNoticeTitle = json_encode($notices->first()->title);
            $firstNoticePdf = $notices->first()->pdf;
        }

        return view('notices', [
            'notices' => $notices,
            'firstNoticeTitle' => $firstNoticeTitle ?? '',
            'firstNoticeId' => $firstNoticeId ?? '',
            'firstNoticePdf' => $firstNoticePdf ?? '',
        ]);
    }
}
