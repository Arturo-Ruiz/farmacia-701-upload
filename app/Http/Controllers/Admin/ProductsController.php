<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Imports\ProductsImport;

use Maatwebsite\Excel\Facades\Excel;

Use App\Product;

use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function store(Request $request)
    {
        $products = Product::query()->delete();


        $file = $request->file("file");
        Excel::import(new ProductsImport, $file);


        $product_first = Product::first();

        $product_first->delete();

        
        $product_last_one = Product::select('id')->orderBy('id', 'desc')->first();

        $product_last_one->delete();


        $product_last_two = Product::select('id')->orderBy('id', 'desc')->first();

        $product_last_two->delete();

        
        return redirect()->route('Productoss.index')->with('info', 'Productos importados correctamente!');
    }

    public function upload_file(Request $request){
        return view('admin.products.upload');
    }

    public function upload(Request $request){
        $file = $request->file('file');

        $path = public_path() . '/products' . '/';
        
        $fileName = $file->getClientOriginalName();
    
        $img = Image::make($file);

        // $img->resize(320, 240);

        $img->save($path .$fileName);
    }

}
