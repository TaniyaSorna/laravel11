<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function info(Request $request)
    {
        $request->validate(
            ['imgage' => "mimes:png,jpg"]
        );
        if ($request->file('imgage')); {
            $image = $request->file('imgage');
            $image_name = 'mcet' . time() . '.' . $image->getClientOriginalExtension();
            // $original_name = $image->getClientOriginalName();
            // $original_extension = $image->getClientOriginalExtension();
            // $mime_type = $image->getClientMimeType();
            // return $image_name;
            if ($image->move(public_path('uploads'), $image_name)) {
                return 'ok';
            } else {
                return 'No image file provided.';
            }
        }
    }
}
