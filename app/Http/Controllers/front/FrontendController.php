<?php

namespace App\Http\Controllers\front;

use Artisan;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Category;
use App\Models\Contact_Message;
use App\Models\MyPortfolio;
use App\Models\Resume;
use App\Models\Review;
use App\Models\Service;
use App\Models\Achievement;
use App\Models\banner_title;
use App\Models\BannerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Inquery;
use App\Models\Skill;
use Brian2694\Toastr\Facades\Toastr;
use SebastianBergmann\LinesOfCode\Exception;

class FrontendController extends Controller
{

    public function index()
    {
        $data['categories'] = Category::latest()->get();
        $data['testimonials'] = Review::latest()->get();
        $data['portfolios'] = MyPortfolio::latest()->get();
        $data['blogs'] = Blog::latest()->get()->take(3);
        $data['skills'] = Skill::latest()->get();
        $data['services'] = Service::latest()->get()->take(3);
        $data['achievements'] = Achievement::latest()->get();
        $data['resumes_educations'] = Resume::where('type', 1)->latest()->get();
        $data['resumes_experiences'] = Resume::where('type', 2)->latest()->get();
        $data['sliders'] = BannerSlider::latest()->first();
        $data['titles'] = banner_title::latest()->get();
        return view('front.index')->with($data);
    }
    public function about()
    {
        $data['skills'] = Skill::latest()->get();
        $data['achievements'] = Achievement::latest()->get();
        return view('front.pages.about')->with($data);
    }
    public function experience()
    {
        $data['sliders'] = BannerSlider::latest()->first();
        return view('front.pages.experience')->with($data);
    }
    public function service()
    {
        $data['services'] = Service::latest()->get();
        return view('front.pages.service')->with($data);
    }
    public function blog()
    {
        $data['blogs'] = Blog::latest()->get();
        return view('front.pages.blog')->with($data);
    }

    public function blog_details($blog_id)
    {
        $blogs = Blog::all();
        $blog = Blog::find($blog_id);
        return view('front.pages.blog_details', [
            'blog' => $blog,
            'blogs' => $blogs,
        ]);
    }

    public function case_study()
    {
        // $data['caseStudies'] = CaseStudy::latest()->get();
        $casestudies = CaseStudy::all();
        // return view('front.pages.case_study')->with($data);
        return view('front.pages.case_study', [
            'casestudies' => $casestudies,
        ]);
    }

    public function cs_details($id)
    {
        $casestudies = CaseStudy::all();
        $casestudy = CaseStudy::findOrFail($id);

        return view('front.pages.cs_details', [
            'casestudy' => $casestudy,
            'casestudies' => $casestudies,
        ]);
    }




    public function contact_us()
    {

        return view('front.pages.contact_us');
    }
    public function inquery_index()
    {
        $data['services'] = Service::latest()->get();
        return view('front.pages.inquery')->with($data);
    }

    public function store(Request $request)
    {

        if ($this->contactValidate($request)) {
            Contact_Message::insert([
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_at' => Carbon::now()
            ]);
            Toastr::success('Success', 'Message Sent Successfully');
            return back();
        }
    }
    public function inquery_store(Request $request)
    {
        if ($this->contactValidate($request)) {
            Inquery::insert([
                'service_id' => $request->service_id,
                'date' => $request->date,
                'start' => $request->start,
                'end' => $request->end,
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_at' => Carbon::now()
            ]);
            Toastr::success('Success', 'Message Sent Successfully');
            return back();
        }
    }
    public function clear()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('event:clear');
        Artisan::call('optimize:clear');
        return back();
        Toastr::success('Success', ' Cache clear Successfully');
    }
    public function contactValidate($request)
    {
        return  $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'number' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
    }
}
