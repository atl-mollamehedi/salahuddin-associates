<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\Service;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Image;
use Carbon\Carbon;


class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['case_studies'] = CaseStudy::latest()->paginate(16);
        $data['services'] = Service::latest()->get();
        return view('backend.case.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $case_study = new  CaseStudy();
        
            $this->validate($request, [
                'service_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,web',
            ]);
            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $imageName = time() . '.' . $image->extension();

                $image_path = public_path('uploads/case/');
                $img = Image::make($image->path());
                $img->save($image_path . '/' . $imageName);
                $case_study->photo = 'uploads/case/' . $imageName;
            }



        $case_study->service_id = $request->service_id;
        $case_study->name = $request->name;
        $case_study->description = $request->description;
        $case_study->created_at = Carbon::now();
        $case_study->save();
        Toastr::success('Success', 'Case Study Added Successfully!!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,CaseStudy $case_study)
    {
            if ($request->hasFile('photo')) {
                $this->validate($request, [
                    'photo' => 'required|image|mimes:jpeg,png,jpg,web',
                ]);
                $image_path = public_path($case_study->photo);

                if ($case_study->photo == 'default.png' && file_exists($image_path)) {
                    unlink($image_path);
                }
                $image = $request->file('photo');
                $imageName = time() . '.' . $image->extension();

                $image_path = public_path('uploads/case/');
                $img = Image::make($image->path());
                $img->resize(385, 260)->save($image_path . '/' . $imageName);
                $case_study->photo = 'uploads/case/' . $imageName;
            } 
           


        $case_study->service_id = $request->service_id;
        $case_study->name = $request->name;
        $case_study->description = $request->description;
        $case_study->save();
        Toastr::success('Success', 'Case Study Updated Successfully!!');
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
        $case_study =  CaseStudy::findOrFail($id);
        $image_path = public_path($case_study->photo);
        if ($case_study->photo == 'default.png' && file_exists($image_path)) {
            unlink($image_path);
        }
        $case_study->delete();
        Toastr::error('Success', 'Case Study Deleted Successfully!!');
        return back();
    }
}
