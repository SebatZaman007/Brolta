<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footerleft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FooterleftController extends Controller
{
    public function footerleftIndex(Request $request){
        if ($request->ajax()) {
            $data = Footerleft::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('footerleft.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('footerleft.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.footerleft.index');
    }

    public function footerleftCreate(){
        return view('admin.pages.footerleft.create');
    }

    public function footerleftStore(Request $request){
        Footerleft::create([
            'footer_link'=>$request->footer_link,
            'footer_description'=>$request->footer_description,
        ]);
        return redirect()->route('footerleft.index');
    }

    public function footerleftEdit($id){
        $edit=Footerleft::where('id',$id)->first();
        return view('admin.pages.footerleft.edit',compact('edit'));
    }

    public function footerleftUpdate(Request $request){
        $id=$request->id;
        Footerleft::where('id',$id)->update([
            'footer_link'=>$request->footer_link,
            'footer_description'=>$request->footer_description,
        ]);
        return redirect()->route('footerleft.index');
    }

    public function footerleftDelete($id){
        Footerleft::where('id',$id)->delete();
        return redirect()->route('footerleft.index');
    }
}
