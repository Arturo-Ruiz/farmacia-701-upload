<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\DayRate;

class DayRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dayrate.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $dayrate = DayRate::findOrFail($request->id);

        return response()->json($dayrate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $dayrate = DayRate::findOrFail($request->id);

        $dayrate->value = $request->value;

        $dayrate->save();

        return redirect('DayRate')->with('info', 'Tasa del dia actualizada correctamente!');
    }

    public function show(Request $request)
    {
        $dayrate = DayRate::find($request->id);
        return response()->json($dayrate);
    }
}
