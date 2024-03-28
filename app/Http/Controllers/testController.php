<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function check(Request $request)
    {

        $request->validate(
            ['image' => "mimes:png,jpg"]
        );

        if ($request->file('image')) {
            $image = $request->file('image');
            // $original_name = $image->getClientOriginalName();
            // $original_name = $image->getClientOriginalExtension();
            // $original_name = $image->getClientMimeType();
            // $image_name = $image->getClientOriginalName();

            $image_name = 'codingsports' . time() . '.' . $image->getClientOriginalExtension();

            if ($image->move(public_path('uploads'), $image_name)) {
                return 'ok';
            } else {
                return 'cannot upload';
            }
        } else {
            return 'No image file provided.';
        }
    }
}
