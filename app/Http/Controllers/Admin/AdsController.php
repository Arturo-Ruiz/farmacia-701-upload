<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Ad;

use Intervention\Image\Facades\Image;

class AdsController extends Controller
{
    public function index()
    {
        return view('admin.ads.index');
    }

    public function store(Request $request){
        $file = $request->file('file');

        $path = public_path() . '/ads' . '/';
        
        $fileName = $file->getClientOriginalName();
    
        $img = Image::make($file);

        $img->resize(500, 500);

        $img->save($path .$fileName);

        $ad = new Ad;

        $ad->img = $fileName;

        $ad->save();

        return redirect()->route('Publicidad.index')->with('info', 'Publicidad Registrada Correctamente');
    }



    public function destroy(Request $request)
    {
        $ad = Ad::find($request->id);
        $ad->delete();
        return 'Publicidad eliminado correctamente!';
    }

    public function edit(Request $request)
    {
        $ad = Ad::find($request->id);
        return response()->json($ad);
    }

    public function update(Request $request)
    {
        $file = $request->file('file');

        $path = public_path() . '/ads' . '/';
        
        $fileName = $file->getClientOriginalName();
    
        $img = Image::make($file);

        $img->resize(500, 500);

        $img->save($path .$fileName);

        $ad = Ad::findOrFail($request->id);

        $ad->img = $fileName;

        $ad->save();

        return redirect('Publicidad')->with('info', 'Publicidad actualizada correctamente!');
    }

}
