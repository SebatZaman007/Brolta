<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Allproduct;
use App\Models\Apdescription;
use App\Models\Banner;
use App\Models\Bannerimage;
use App\Models\Clientreview;
use App\Models\Contactus;
use App\Models\Featured;
use App\Models\Footerleft;
use App\Models\Mainlogo;
use App\Models\Product;
use App\Models\Socialmedia;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $logo=Mainlogo::latest()->first();
        $bannerimage=Bannerimage::latest()->first();
        $banner=Banner::latest()->get();
        $featured=Featured::latest()->first();
        $product=Product::latest()->get();
        $about=About::latest()->first();
        $apdescription=Apdescription::latest()->first();
        $allproduct=Allproduct::latest()->get();
        $clientreview=Clientreview::latest()->get();
        $footerleft=Footerleft::latest()->first();
        $contactus=Contactus::latest()->first();
        $socialmedia=Socialmedia::latest()->get();
        return view('frontend.master',compact('logo','bannerimage','banner','featured','product','about','apdescription','allproduct','clientreview','footerleft','contactus','socialmedia'));
    }
}
