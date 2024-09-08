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
            "session" =>"nullable|string",
        ]);

        $resource = new CommonResource();
        $pdf = $request->file('pdf');
        $newName = $request->type . '_' . time() .'.'. $pdf->getClientOriginalExtension();
        $pdf->move(public_path('/documents/'), $newName);
        $resource->type = $request->type;
        $resource->date = $request->date;
        $resource->pdf = '/documents/' . $newName;
        $resource->title = $request->title;
        $resource->session = $request->session;
        $resource->save();

        session()->flash('message', 'File uploaded Successfully');
        return redirect()->back();
    }

    public function deleteResource($id)
    {
        $resource = CommonResource::find($id);
        if (file_exists(public_path($resource->pdf))) {
            unlink(public_path($resource->pdf));
        }
        $resource->delete();
        session()->flash('message', 'File deleted successfully');
        return redirect()->back();
    }

}
