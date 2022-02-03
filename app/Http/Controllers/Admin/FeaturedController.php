<?php

namespace App\Http\Controllers\Admin;

use App\Models\Featured;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FeaturedController extends Controller
{
    public function featuredIndex(Request $request){
        if ($request->ajax()) {
            $data = Featured::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('featured.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('featured.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.featured.index');
    }

    public function featuredCreate(){
        return view('admin.pages.featured.create');
    }

    public function featuredStore(Request $request){
        Featured::create([
            'featured_discription'=>$request->featured_discription
        ]);
        return redirect()->route('featured.index');
    }

    public function featuredEdit($id){
        $edit=Featured::where('id',$id)->first();
        return view('admin.pages.featured.edit',compact('edit'));
    }

    public function featuredUpdate(Request $request){
        $id=$request->id;
        Featured::where('id',$id)->update([
            'featured_discription'=>$request->featured_discription
        ]);
        return redirect()->route('featured.index');
    }

    public function featuredDelete($id){
        Featured::where('id',$id)->delete();
        return redirect()->route('featured.index');
    }
}
