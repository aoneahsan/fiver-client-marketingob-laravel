<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();        
        $items = Service::all();
        $items_total = Service::count();
        return view('project.service.index', compact(
            'items',
            'items_total',
            'users'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('project.service.create', compact(
            'users'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());

        $image = '';
        if($request->hasfile('image')){
            $image_array = $request->file('image');
            $image_ext = $image_array->getClientOriginalExtension();
            $image = "img_".rand(123456,999999).".".$image_ext;
            $destination_path = public_path('\project-assets\uploaded\images/');
            $image_array->move($destination_path,$image);
        }

        Service::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'time' => $request->time,
            'price' => $request->price,
            'image' => $image,
            'extra_field' => $request->extra_field,
        ]);
        return redirect('admin/service')->with('added','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Service::where('id', $id)->first();
        $user = User::where('id', $item->user_id)->first();
        $user_name = $user['name'];
        // dd($product);
        return view('project.service.single', compact(
            'item',
            'user_name'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $item = Service::where('id', $id)->first();
        return view('project.service.edit', compact(
            'users',
            'item'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Service::where('id', $id)->first();
        $image = '';
        if($request->hasfile('image')){
            $image_array = $request->file('image');
            $image_ext = $image_array->getClientOriginalExtension();
            $image = "img_".rand(123456,999999).".".$image_ext;
            $destination_path = public_path('/project-assets/uploaded/images/');
            $image_array->move($destination_path,$image);
            // @unlink(public_path('project-assets\uploaded\images/') . $item->category_image);
        }

        Service::where('id',$id)->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image == "" ? $item->image : $image,
            'time' => $request->time,
            'price' => $request->price,
            'extra_field' => $request->extra_field,
        ]);
        return redirect('admin/service')->with('updated','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Service::where('id',$id)->first();
        // @unlink(public_path('project-assets\uploaded\images/') . $item->product_image);
        Service::where('id',$id)->delete();
        return redirect('/admin/service')->with('deleted','Deleted Successfully!');
    }
}
