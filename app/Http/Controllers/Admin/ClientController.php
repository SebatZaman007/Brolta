<?php

namespace App\Http\Controllers\Admin;

use App\Models\Clientreview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Whoops\Run;
use Yajra\DataTables\Facades\DataTables;

use function PHPUnit\Framework\returnSelf;

class ClientController extends Controller
{
    public function clientIndex(Request $request){
        if ($request->ajax()) {
            $data = Clientreview::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('client.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('client.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('client_image',function ($data){
                    if($data->client_image){
                        $url=asset(BlogImage().$data->client_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','client_image'])
                ->make(true);
        }

        return view('admin.pages.cleint.index');
    }

    public function clientCreate(){
        return view('admin.pages.cleint.create');
    }

    public function clientStore(Request $request){
        if (!empty($request->client_image)) {
            $client_image = fileUpload($request['client_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Clientreview::create([
            'client_image'=>$client_image,
            'client_name'=>$request->client_name,
            'client_review'=>$request->client_review
        ]);

        return redirect()->route('client.index');
    }

    public function clientEdit($id){
        $edit=Clientreview::where('id',$id)->first();
        return view('admin.pages.cleint.edit',compact('edit'));
    }

    public function clientUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->client_image)) {
            $client_image = fileUpload($request['client_image'], BlogImage());
        } else {
            $var=Clientreview::where('id',$id)->first();
            $client_image= $var->client_image;
        }

        Clientreview::where('id',$id)->update([
            'client_image'=>$client_image,
            'client_name'=>$request->client_name,
            'client_review'=>$request->client_review
        ]);

        return redirect()->route('client.index');
    }

    public function clientDelete($id){
        Clientreview::where('id',$id)->delete();
        return redirect()->route('client.index');
    }
}
