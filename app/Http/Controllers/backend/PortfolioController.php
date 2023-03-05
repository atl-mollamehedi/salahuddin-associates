<?php

namespace App\Http\Controllers\backend;

use App\Models\MyPortfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Image;

class PortfolioController extends Controller
{
    public function index(){
        return view('backend.portfolio.index');
    }
    public function store(Request $request){
        $this->validate($request, [
            'category' => 'required',
            'title' => 'required|string',
            'link' => 'required',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

             if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();

                $image_path = public_path('uploads/portfolio/');
                $img = Image::make($image->path());
                $img->save($image_path . '/' . $imageName);
            }
            else{
                $imageName = 'default.png';
            }
            $portfolio = new MyPortfolio();
            $portfolio->category_id = $request->category;
            $portfolio->title = $request->title;
            $portfolio->description = $request->description;
            $portfolio->link = $request->link;
            $portfolio->image = $imageName;
            $portfolio->save();
            Toastr::success('Success', 'Portfolio Added Successfully!!');
            return back();
    }
    public function update(Request $request, $id){
        $portfolio = MyPortfolio::find($id);
        if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();

                $image_path = public_path('uploads/portfolio/');
                $img = Image::make($image->path());
                $img->save($image_path . '/' . $imageName);
            }
            else{
                $imageName = 'default.png';
            }
            $portfolio->category_id = $request->category;
            $portfolio->title = $request->title;
            $portfolio->description = $request->description;
            $portfolio->link = $request->link;
            $portfolio->image = $imageName;
            $portfolio->save();
            Toastr::success('Success', 'Portfolio Updated Successfully!!');
            return back();
    }
    public function destroy($id){
        $portfolio = MyPortfolio::findOrFail($id);
        $image_path = public_path($portfolio->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $portfolio->delete();
        Toastr::success('Portfolio Deleted Successfully','Success');
        return redirect()->back();
    }
    public function status($id){
        $portfolio = MyPortfolio::findOrFail($id);
        if($portfolio->status == 1){
            $portfolio->status = 0;
            $portfolio->save();
            Toastr::success('Portfolio Disable Successfully','Success');
        }else{
            $portfolio->status = 1;
            $portfolio->save();
            Toastr::success('Portfolio Active Successfully','Success');
        }
        return redirect()->back();
    }

}
