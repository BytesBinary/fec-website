<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommonResource;
use Illuminate\Http\Request;

class CommonResourceController extends Controller
{

    public function storeResource(Request $request) {
        $request->validate([
            "title" => "required|string",
            "date" => "required|date",
            "type" => "required|string",
            "pdf" => "required|mimes:pdf|max:10024",
        ]);

        $resource = new CommonResource();
        $pdf = $request->file('pdf');
        $newName = $request->type . '_' . time() .'.'. $pdf->getClientOriginalExtension();
        $pdf->move(public_path('/documents/'), $newName);
        $resource->type = $request->type;
        $resource->date = $request->date;
        $resource->pdf = '/documents' . $newName;
        $resource->title = $request->title;
        $resource->save();
    }
}
