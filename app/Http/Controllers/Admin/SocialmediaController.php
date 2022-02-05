<?php

namespace App\Http\Controllers\Admin;

use App\Models\Socialmedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class SocialmediaController extends Controller
{
    public function socialmediaIndex(Request $request){
        if ($request->ajax()) {
            $data = Socialmedia::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('socialmedia.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('socialmedia.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.socialmedia.index');
    }

    public function socialmediaCreate(){
        return view('admin.pages.socialmedia.create');
    }

    public function socialmediaStore(Request $request){

        Socialmedia::create([
            'socialmedia_facebook'=>$request->socialmedia_facebook,
            'socialmedia_twitter'=>$request->socialmedia_twitter,
            'socialmedia_linkedin'=>$request->socialmedia_linkedin,
            'socialmedia_instagram'=>$request->socialmedia_instagram
        ]);

        return redirect()->route('socialmedia.index');
    }

    public function socialmediaEdit($id){
        $edit=Socialmedia::where('id',$id)->first();
        return view('admin.pages.socialmedia.edit',compact('edit'));
    }

    public function socialmediaUpdate(Request $request){
        $id=$request->id;
        Socialmedia::where('id',$id)->update([
            'socialmedia_facebook'=>$request->socialmedia_facebook,
            'socialmedia_twitter'=>$request->socialmedia_twitter,
            'socialmedia_linkedin'=>$request->socialmedia_linkedin,
            'socialmedia_instagram'=>$request->socialmedia_instagram
        ]);

        return redirect()->route('socialmedia.index');
    }

    public function socialmediaDelete($id){
        Socialmedia::where('id',$id)->delete();
        return redirect()->route('socialmedia.index');
    }
}
