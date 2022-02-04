<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Apdescription;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ApdescriptionController extends Controller
{
    public function apdescriptionIndex(Request $request){
        if ($request->ajax()) {
            $data = Apdescription::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('apdescription.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('apdescription.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.apdescription.index');
    }

    public function apdescriptionCreate(){
        return view('admin.pages.apdescription.create');
    }

    public function apdescriptionStore(Request $request){
        Apdescription::create([
            'apdescription'=>$request->apdescription
        ]);
        return redirect()->route('apdescription.index');
    }

    public function apdescriptionEdit($id){
        $edit=Apdescription::where('id',$id)->first();
        return view('admin.pages.apdescription.edit',compact('edit'));
    }

    public function apdescriptionUpdate(Request $request){
        $id=$request->id;
        Apdescription::where('id',$id)->update([
            'apdescription'=>$request->apdescription
        ]);
        return redirect()->route('apdescription.index');
    }

    public function apdescriptionDelete($id){
        Apdescription::where('id',$id)->delete();
        return redirect()->route('apdescription.index');
    }
}
