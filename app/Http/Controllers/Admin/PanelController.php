<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Sale;

class PanelController extends Controller
{
    public function index(){

        $enero = Sale::where('created_at', 'LIKE', "%2023-01%")->get()->count();
        $febrero = Sale::where('created_at', 'LIKE', "%2023-02%")->get()->count();
        $marzo = Sale::where('created_at', 'LIKE', "%2023-03%")->get()->count();
        $abril = Sale::where('created_at', 'LIKE', "%2023-04%")->get()->count();
        $mayo = Sale::where('created_at', 'LIKE', "%2023-05%")->get()->count();
        $junio = Sale::where('created_at', 'LIKE', "%2023-06%")->get()->count();
        $julio = Sale::where('created_at', 'LIKE', "%2023-07%")->get()->count();
        $agosto = Sale::where('created_at', 'LIKE', "%2023-08%")->get()->count();
        $septiembre = Sale::where('created_at', 'LIKE', "%2023-09%")->get()->count();
        $octubre = Sale::where('created_at', 'LIKE', "%2023-10%")->get()->count();
        $noviembre = Sale::where('created_at', 'LIKE', "%2023-11%")->get()->count();
        $diciembre = Sale::where('created_at', 'LIKE', "%2023-12%")->get()->count();

        return view('admin.panel.index', compact('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'));
    }
}
