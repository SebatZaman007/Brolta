<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mainlogo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Yajra\DataTables\Facades\DataTables;

class LogoController extends Controller
{
    public function logoIndex(Request $request){
        if ($request->ajax()) {
            $data = Mainlogo::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('logo.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('logo.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('logo_image',function ($data){
                    if($data->logo_image){
                        $url=asset(BlogImage().$data->logo_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','logo_image'])
                ->make(true);
        }

        return view('admin.pages.mainlogo.index');
    }

    public function logoCreate(){
        return view('admin.pages.mainlogo.create');
    }

    public function logoStore(Request $request){
        if (!empty($request->logo_image)) {
            $logo_image = fileUpload($request['logo_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Mainlogo::create([
            'logo_name' => $request->logo_name,
            'logo_image'=>$logo_image
        ]);

        return redirect()->route('logo.index');

    }

    public function logoEdit($id){
        $edit=Mainlogo::where('id',$id)->first();
        return view('admin.pages.mainlogo.edit',compact('edit'));
    }

    public function logoUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->logo_image)) {
            $logo_image = fileUpload($request['logo_image'], BlogImage());
        } else {
            $var=Mainlogo::where('id',$id)->first();
            $logo_image= $var->logo_image;
        }

        Mainlogo::where('id',$id)->update([
            'logo_name' => $request->logo_name,
            'logo_image'=>$logo_image
        ]);
        return redirect()->route('logo.index');
    }

    public function logoDelete($id){
        Mainlogo::where('id',$id)->delete();
        return redirect()->route('logo.index');
    }
}
