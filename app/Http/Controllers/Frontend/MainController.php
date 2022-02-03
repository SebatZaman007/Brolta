<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Bannerimage;
use App\Models\Mainlogo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $logo=Mainlogo::latest()->get();
        $bannerimage=Bannerimage::latest()->get();
        $banner=Banner::latest()->get();
        return view('frontend.master',compact('logo','bannerimage','banner'));
    }
}
