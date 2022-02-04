<?php

namespace App\Http\Controllers\Admin;

use App\Models\Clientreview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

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
}
