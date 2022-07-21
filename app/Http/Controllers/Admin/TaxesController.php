<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Tax;

class TaxesController extends Controller
{
    
    public function index()
    {
        return view('admin.tax.index');
    }

    public function store(Request $request)
    {
        $tax = new Tax;

        $tax->name = $request->name;
        $tax->value = $request->value;

        $tax->save();

        return redirect('Taxes')->with('info', 'Impuesto creado correctamente!');
    }

    public function edit(Request $request)
    {
        $tax = Tax::findOrFail($request->id);

        return response()->json($tax);
    }

    public function update(Request $request)
    {
        $tax = Tax::findOrFail($request->id);

        $tax->name = $request->name;
        $tax->value = $request->value;

        $tax->save();

        return redirect('Taxes')->with('info', 'Impuesto actualizado correctamente!');
    }

    public function destroy(Request $request)
    {
        $tax = Tax::find($request->id);
        $tax->delete();
        return 'Impuesto eliminado correctamente!';
    }

    public function show(Request $request)
    {
        $tax = Tax::find($request->id);
        return response()->json($tax);
    }

}
