<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Carousel;

use Intervention\Image\Facades\Image;

class CarouselsController extends Controller
{
    public function index()
    {
        return view('admin.carousel.index');
    }

    public function store(Request $request){
        $file = $request->file('file');

        $path = public_path() . '\carousel' . '\\';
        
        $fileName = $file->getClientOriginalName();
    
        $img = Image::make($file);

        $img->save($path .$fileName);

        $carousel = new Carousel;

        $carousel->img = $fileName;

        $carousel->save();

        return redirect()->route('Carrusel.index')->with('info', 'Imagen del carrusel registrada correctamente');
    }



    public function destroy(Request $request)
    {
        $carousel = Carousel::find($request->id);
        $carousel->delete();
        return 'Imagen del carrusel eliminada correctamente!';
    }

    public function edit(Request $request)
    {
        $carousel = Carousel::find($request->id);
        return response()->json($carousel);
    }

    public function update(Request $request)
    {
        $file = $request->file('file');

        $path = public_path() . '\carousel' . '\\';
        
        $fileName = $file->getClientOriginalName();
    
        $img = Image::make($file);

        $img->save($path .$fileName);

        $carousel = Carousel::findOrFail($request->id);

        $carousel->img = $fileName;

        $carousel->save();

        return redirect('Carrusel')->with('info', 'Imagen del carrusel actualizada correctamente!');
    }
}
