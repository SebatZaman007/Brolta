<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    public function bannerIndex(Request $request){
        if ($request->ajax()) {
            $data = Banner::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('banner.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('banner.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.banner.index');
    }

    public function bannerCreate(){
        return view('admin.pages.banner.create');
    }

    public function bannerStore(Request $request){
        Banner::create([
            'banner_name'=>$request->banner_name,
            'banner_description'=>$request->banner_description,
            'banner_link'=>$request->banner_link
        ]);

        return redirect()->route('banner.index');
    }

    public function bannerEdit($id){
        $edit=Banner::where('id',$id)->first();
         return view('admin.pages.banner.edit',compact('edit'));
    }

    public function bannerUpdate(Request $request){
        $id=$request->id;
        Banner::where('id',$id)->update([
            'banner_name'=>$request->banner_name,
            'banner_description'=>$request->banner_description,
            'banner_link'=>$request->banner_link
        ]);

        return redirect()->route('banner.index');
    }

    public function bannerDelete($id){
        Banner::where('id',$id)->delete();
        return redirect()->route('banner.index');
    }
}
