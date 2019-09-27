<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Service;

class ApiServiceController extends Controller
{
    
	public function addApiService(Request $request)
	{
		// dd($request->toArray());
		$new_image = '';
        if($request->hasfile('image')){
            $image_array = $request->file('image');
            $image_ext = $image_array->getClientOriginalExtension();
            $new_image = "img_".rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/project-assets/uploaded/images/');
            $image_array->move($destination_path,$new_image);
        }

        Service::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'time' => $request->time,
            'image' => $new_image,
            'price' => $request->price,
            'extra_field' => $request->extra_field,
        ]);

        return response()->json(['data' => 'Service Added'], 200);
	}

}
