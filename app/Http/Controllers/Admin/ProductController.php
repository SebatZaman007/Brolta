<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function productIndex(Request $request){
        if ($request->ajax()) {
            $data = Product::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('product.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('product.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('product_image',function ($data){
                    if($data->product_image){
                        $url=asset(BlogImage().$data->product_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','product_image'])
                ->make(true);
        }
        return view('admin.pages.product.index');
    }

    public function productCreate(){
        return view('admin.pages.product.create');
    }

    public function productStore(Request $request){
        if (!empty($request->product_image)) {
            $product_image = fileUpload($request['product_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }
        Product::create([
            'product_image'=>$product_image,
            'product_name'=>$request->product_name,
            'product_newprise'=>$request->product_newprise,
            'product_oldprise'=>$request->product_oldprise,
            'product_buy'=>$request->product_buy,
        ]);
        return redirect()->route('product.index');
    }

    public function productEdit($id){
        $edit=Product::where('id',$id)->first();
        return view('admin.pages.product.edit',compact('edit'));
    }

    public function productUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->product_image)) {
            $product_image = fileUpload($request['product_image'], BlogImage());
        } else {
            $var=Product::where('id',$id)->first();
            $product_image= $var->product_image;
        }

        Product::where('id',$id)->update([
            'product_image'=>$product_image,
            'product_name'=>$request->product_name,
            'product_newprise'=>$request->product_newprise,
            'product_oldprise'=>$request->product_oldprise,
            'product_buy'=>$request->product_buy,
        ]);
        return redirect()->route('product.index');
    }

    public function productDelete($id){
        Product::where('id',$id)->delete();
        return redirect()->route('product.index');
    }
}
