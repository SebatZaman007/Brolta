<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bannerimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BannerimageController extends Controller
{
    public function bannerimageIndex(Request $request){
        if ($request->ajax()) {
            $data = Bannerimage::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('bannerimage.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('bannerimage.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('banner_image',function ($data){
                    if($data->banner_image){
                        $url=asset(BlogImage().$data->banner_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','banner_image'])
                ->make(true);
        }
         return view('admin.pages.bannerimage.index');
    }

    public function bannerimageCreate(){
        view('admin.pages.bannerimage.create');
    }

    public function bannerimageStore(Request $request){
        if (!empty($request->banner_image)) {
            $banner_image = fileUpload($request['banner_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Bannerimage::create([
            'banner_image'=>$banner_image,
        ]);
        return redirect()->route('bannerimage.index');
    }

    public function bannerimageEdit($id){
        $edit=Bannerimage:: where('id',$id)->first();
         return view('admin.pages.bannerimage.edit',compact('edit'));
    }

    public function bannerimageUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->logo_image)) {
            $banner_image = fileUpload($request['banner_image'], BlogImage());
        } else {
            $var=Bannerimage::where('id',$id)->first();
            $banner_image= $var->banner_image;
        }

        Bannerimage::where('id',$id)->update([
            'banner_image'=>$banner_image,
        ]);

        return redirect()->route('bannerimage.index');

    }

    public function bannerimageDelete($id){
        Bannerimage::where('id',$id)->delete();
        return redirect()->route('bannerimage.index');
    }
}
