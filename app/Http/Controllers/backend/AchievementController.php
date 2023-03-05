<?php

namespace App\Http\Controllers\backend;

use App\Models\Achievement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AchievementController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|string|max:20',
            'count' => 'required|max:8"',
            'icon' => 'required',
        ]);
        $achieve = new Achievement();
        $achieve->name = $request->name;
        $achieve->count = $request->count;
        $achieve->icon = $request->icon;
        $achieve->save();
        Toastr::success('Achievement added Successfully','Success');
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:20',
            'count' => 'required|max:8"',
        ]);
        $achieve = Achievement::find($id);
        $achieve->name = $request->name;
        $achieve->count = $request->count;
        $achieve->icon = $request->icon;
        $achieve->save();
        Toastr::success('Achievement Updated Successfully','Success');
        return redirect()->back();
    }
    public function destroy($id){
        $achieve = Achievement::findOrFail($id);
        $achieve->delete();
        Toastr::success('Achievement Deleted Successfully','Success');
        return redirect()->back();
    }
}
