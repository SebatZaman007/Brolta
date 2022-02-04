<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Database\Seeders\ContactTableSeeder;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function contactIndex(Request $request){
        if ($request->ajax()) {
            $data = Contact::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('contact.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('contact.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.contact.index');
    }

    public function contactStore(Request $request){
        Contact::create([
            'contact_name'=>$request->contact_name,
            'contact_phonenumber'=>$request->contact_phonenumber,
            'contact_email'=>$request->contact_email,
            'contact_message'=>$request->contact_message
        ]);

        return redirect()->route('index');
    }

    public function contactDelete($id){
        Contact::where('id',$id)->delete();
        return redirect()->route('contact.index');
    }
}
