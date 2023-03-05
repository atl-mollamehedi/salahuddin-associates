<?php



if (!function_exists('SubMenu')) {
    function SubMenu(array $routes, $output = "class=current")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
 }

 if (!function_exists('menuActive')) {
    function menuActive($routes, $output = "class=current")
    {
           if (Route::currentRouteName() == $routes) return $output;
        
    }
 }

 function setting(){
    return App\Models\Setting::latest()->first();
 }
 function skill(){
   return App\Models\Skill::latest()->get();
}
function categories(){
   return App\Models\Category::latest()->get();
}
function portfolios(){
   return App\Models\MyPortfolio::latest()->get();
}
function total_blog(){
   return App\Models\Blog::latest()->get()->count();
}
function total_portfolio(){
   return App\Models\MyPortfolio::latest()->get()->count();
}
function total_users(){
   return App\Models\User::latest()->get()->count();
}
function total_service(){
   return App\Models\Service::latest()->get()->count();
}
function achievements(){
   return App\Models\Achievement::latest()->get();
}
 function parters(){
    return App\Models\Partner::where('status','On')->latest()->get();
 }
 function unred_message_count(){
    return App\Models\Partner::where('view_status','On')->latest()->get()->count();
 }
 function socials(){
    return App\Models\SocialMedia::where('link','!=' ,null)->where('status','On' )->get();
 }

 function section__status($name){
   return App\Models\SectionSetting::where('name',$name)->first()->status;
 }