<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ContactusController extends Controller
{
    public function contactusIndex(Request $request){
        if ($request->ajax()) {
            $data = Contactus::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('contactus.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('contactus.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.contactus.index');
    }

    public function contactusCreate(){
        return view('admin.pages.contact.create');
    }

    public function contactusStore(Request $request){
        Contactus::create([
        'contactus_location'=>$request->contactus_location,
        'contactus_phonenumber'=>$request->contactus_phonenumber,
        'contactus_email'=>$request->contactus_email
        ]);
        return redirect()->route('contactus.index');
    }

    public function contactusEdit($id){
        $edit=Contactus::where('id',$id)->first();
        return view('admin.pages.contact.edit',compact('edit'));
    }

    public function contactusUpdate(Request $request){
        $id=$request->id;
        Contactus::where('id',$id)->update([
            'contactus_location'=>$request->contactus_location,
            'contactus_phonenumber'=>$request->contactus_phonenumber,
            'contactus_email'=>$request->contactus_email
        ]);
        return redirect()->route('contactus.index');
    }

    public function contactusDelete($id){
        Contactus::where('id',$id)->delete();
        return redirect()->route('contactus.index');
    }

}
