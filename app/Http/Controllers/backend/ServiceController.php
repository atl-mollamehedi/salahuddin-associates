<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\ServiceRequest;
use Image;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = Service::latest()->get();
        return view('backend.service.index')->with($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {

        $service = new  Service();


            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '.' . $image->extension();

                $image_path = public_path('uploads/service/');
                $img = Image::make($image->path());
                $img->save($image_path . '/' . $imageName);
                $service->photo = 'uploads/service/' . $imageName;
            }



        $service->icon = $request->icon;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->created_at = Carbon::now();
        $service->save();
        Toastr::success('Success', 'Case Study Added Successfully!!');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        if ($request->hasFile('photo')) {
            // img check
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpeg,png,jpg,web',
            ]);
            $image_path = public_path($service->photo);

            // if have a img delete
            if ($service->photo != 'default.png' && file_exists($image_path)) {
                unlink($image_path);
            }

            // photo upload
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();

            $image_path = public_path('uploads/service/');
            $img = Image::make($image->path());
            $img->resize(385, 260)->save($image_path . '/' . $imageName);
            $service->photo = 'uploads/service/' . $imageName;
        } 


        $service->icon = $request->icon;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();
        Toastr::success('Success', 'Service Updated Successfully!!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service =  Service::findOrFail($id);


        $image_path = public_path($service->photo);
        if ($service->photo != 'default.png' && file_exists($image_path)) {
            unlink($image_path);
        }

        $service->delete();

        Toastr::error('Success', 'Service Deleted Successfully!!');
        return back();
    }
}
