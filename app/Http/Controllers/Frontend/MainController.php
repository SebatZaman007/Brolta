<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Allproduct;
use App\Models\Apdescription;
use App\Models\Banner;
use App\Models\Bannerimage;
use App\Models\Featured;
use App\Models\Mainlogo;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $logo=Mainlogo::latest()->get();
        $bannerimage=Bannerimage::latest()->get();
        $banner=Banner::latest()->get();
        $featured=Featured::latest()->get();
        $product=Product::latest()->get();
        $about=About::latest()->get();
        $apdescription=Apdescription::latest()->get();
        $allproduct=Allproduct::latest()->get();
        return view('frontend.master',compact('logo','bannerimage','banner','featured','product','about','apdescription','allproduct'));
    }
}
