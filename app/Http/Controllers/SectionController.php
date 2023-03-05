<?php

namespace App\Http\Controllers;

use App\Models\SectionSetting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        $data['sections'] = SectionSetting::latest()->get();
        return view('backend.setting.section')->with($data);
    }
    public function sectionOnOff($id){
       $sectionSetting =  SectionSetting::find($id);
       if ($sectionSetting->status == 1) {
        $sectionSetting->status = 2;
       } else {
        $sectionSetting->status = 1;
       }
       $sectionSetting->save();
       
       Toastr::success('Success', 'Status Updated Successfully!!');
       return back();
    }
}
