<?php

namespace App\Http\Controllers\Admin;

use App\Models\Allproduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AllproductController extends Controller
{
    public function allproductIndex(Request $request){
        if ($request->ajax()) {
            $data = Allproduct::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('allproduct.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('allproduct.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('allproduct_image',function ($data){
                    if($data->allproduct_image){
                        $url=asset(BlogImage().$data->allproduct_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','allproduct_image'])
                ->make(true);
        }
        return view('admin.pages.allproduct.index');
    }

    public function allproductCreate(){
        return view('admin.pages.allproduct.create');
    }

    public function allproductStore(Request $request){
        if (!empty($request->allproduct_image)) {
            $allproduct_image = fileUpload($request['allproduct_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Allproduct::create([
            'allproduct_image'=>$allproduct_image,
            'allproduct_name'=>$request->allproduct_name,
            'allproduct_newprice'=>$request->allproduct_newprice,
            'allproduct_oldprice'=>$request->allproduct_oldprice,
            'allproduct_seemore'=>$request->allproduct_seemore,
        ]);
        return redirect()->route('allproduct.index');
    }

    public function allproductEdit($id){
        $edit=Allproduct::where('id',$id)->first();
        return view('admin.pages.allproduct.edit',compact('edit'));
    }

    public function allproductUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->allproduct_image)) {
            $allproduct_image = fileUpload($request['allproduct_image'], BlogImage());
        } else {
            $var=Allproduct::where('id',$id)->first();
            $allproduct_image= $var->allproduct_image;
        }

        Allproduct::where('id',$id)->update([
            'allproduct_image'=>$allproduct_image,
            'allproduct_name'=>$request->allproduct_name,
            'allproduct_newprice'=>$request->allproduct_newprice,
            'allproduct_oldprice'=>$request->allproduct_oldprice,
            'allproduct_seemore'=>$request->allproduct_seemore,
        ]);
        return redirect()->route('allproduct.index');
    }

    public function allproductDelete($id){
        Allproduct::where('id',$id)->delete();
        return redirect()->route('allproduct.index');
    }
}
