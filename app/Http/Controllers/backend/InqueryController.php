<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Inquery;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class InqueryController extends Controller
{
    public function index(){

        $data['messages'] = Inquery::latest()->paginate(15);
        return view('backend.inquery.index')->with($data);
    }
    public function details($id){
        $data['message'] = Inquery::find($id);

        $data['message']->view_status = 'read';
        $data['message']->save();
        return view('backend.inquery.show')->with($data);
    }
    public function startstatus($id){
        $contact =  Inquery::find($id);
       if ( $contact->status == 'star') {
        $contact->status = 'normal';
    }
    else{
           $contact->status = 'star';
       }
       $contact->save();
      Toastr::success('Success', 'Updated Successfully');
        return back();
    }
    public function star(){

        $data['messages'] = Inquery::where('status','star')->paginate(15);
        return view('backend.inquery.star')->with($data);
    }
    public function unread(){

        $data['messages'] = Inquery::where('view_status','unread')->paginate(15);
        return view('backend.inquery.unread')->with($data);
    }
    public function total_mail(){

        $data['messages'] = Inquery::latest()->paginate(15);
        return view('backend.inquery.total_mail')->with($data);
    }
    public function destroy($id){
        Inquery::find($id)->delete();
        Toastr::success('Success', 'Message Deleted Successfully!!');
        return back();
    }
}
