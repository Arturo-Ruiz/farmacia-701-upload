<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

use App\Ad;

use App\DayRate;

use App\Sale;

use App\Carousel;

class WebController extends Controller
{

    public function dollars()
    {
        return redirect('Inicio-Dolares');
    }

    public function bs()
    {
        return redirect('Inicio');
    }

    public function index()
    {

        $dayrate = DayRate::where('id', 1)->first();

        $products = Product::where('stock', '>=', 1)
            ->orderBy('category_id', 'asc')
            ->paginate(15);

        $ads = Ad::orderBy('id', 'asc')->get();

        $carousels = Carousel::orderBy('id', 'asc')->get();

        return view("Home.index", compact("products", "ads", "dayrate", "carousels"));
    }


    public function index_dollars()
    {

        $dayrate = DayRate::where('id', 1)->first();

        $products = Product::where('stock', '>=', 1)
            ->orderBy('category_id', 'asc')
            ->paginate(15);

        $ads = Ad::orderBy('id', 'asc')->get();

        $carousels = Carousel::orderBy('id', 'asc')->get();

        return view("Home.dollars.index", compact("products", "ads", "dayrate", "carousels"));
    }

    public function pagination()
    {
        $dayrate = DayRate::find(1);
        $products = Product::where('stock', '>=', 1)
            ->orderBy('category_id', 'asc')
            ->paginate(15);
        return view('Home.products.pagination', compact('products', "dayrate"));
    }

    public function pagination_dollars()
    {
        $dayrate = DayRate::find(1);
        $products = Product::where('stock', '>=', 1)
            ->orderBy('category_id', 'asc')
            ->paginate(15);
        return view('Home.dollars.products.pagination', compact('products', "dayrate"));
    }

    public function search(Request $request)
    {
        $carousels = Carousel::orderBy('id', 'asc')->get();

        $value = $request->search;
        $products = Product::where('stock', '>=', 1)
            ->where('name', 'LIKE', "%$value%")
            ->get();
        $dayrate = DayRate::find(1);
        $ads = Ad::orderBy('id', 'asc')->get();
        return view("Home.search", compact("products", "ads", "dayrate", "value", "carousels"));
    }

    public function search_dollars(Request $request)
    {
        $carousels = Carousel::orderBy('id', 'asc')->get();

        $value = $request->search;
        $products = Product::where('stock', '>=', 1)
            ->where('name', 'LIKE', "%$value%")->get();
        $dayrate = DayRate::find(1);
        $ads = Ad::orderBy('id', 'asc')->get();
        return view("Home.dollars.search", compact("products", "ads", "dayrate", "value", "carousels"));
    }

    public function cart()
    {
        return view("Home.cart");
    }

    public function cart_dollars()
    {
        return view("Home.dollars.cart");
    }

    public function cartSave(Request $request)
    {

        $sale = new Sale;
        $sale->save();


        $products = $request->products;

        foreach (json_decode($products) as $product) {

            $test = Product::where('name', $product->nombre)->get();

            foreach ($test as $key) {
                $producto = Product::findOrFail($key->id);

                $producto->stock = $producto->stock - $product->cantidad;

                $producto->save();
            }
        }

        $msg_productos = ", *Compra* : ";
        foreach (json_decode($products) as $product) {
            $msg_productos = " " . $msg_productos . "" . $product->nombre . ", Cantidad: " . $product->cantidad . " ; ";
        }

        $msg = "*Nombre Y Apellido o Nombre de empresa* : " . $request->name . ", *Cedula o RIF* : " . $request->dni . ", *Email* : " . $request->email . ", *Teléfono* : " . $request->phone . ", *Dirección* : " . $request->address . ", *Método de entrega* : " . $request->metodo_entrega . ", *Método de pago* : " . $request->paymentMethod . " " . $msg_productos . ", *Total* : " . $request->total . " .Bs, Y Los productos que me gustaria que tuvieran disponibles son : " . $request->solicitud;

        $name = $request->name;
        $dni = $request->dni;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $address = $request->metodo_entrega;




        return view("Home.whatsapp", compact("msg", "name", "dni", "email", "phone", "address"));
    }

    public function cartSaveDollars(Request $request)
    {

        $sale = new Sale;
        $sale->save();


        $products = $request->products;

        foreach (json_decode($products) as $product) {

            $test = Product::where('name', $product->nombre)->get();

            foreach ($test as $key) {
                $producto = Product::findOrFail($key->id);

                $producto->stock = $producto->stock - $product->cantidad;

                $producto->save();
            }
        }
        $msg_productos = ", *Compra* : ";
        foreach (json_decode($products) as $product) {
            $msg_productos = " " . $msg_productos . "" . $product->nombre . ", Cantidad: " . $product->cantidad . " ; ";
        }

        $msg = "*Nombre* : " . $request->name . ", *Email* : " . $request->email . ", *Teléfono* : " . $request->phone . ", *Dirección* : " . $request->address . ", *Método de entrega* : " . $request->metodo_entrega . ", *Método de pago* : " . $request->paymentMethod . " " . $msg_productos . ", *Total* : " . $request->total . " $, Y Los productos que me gustaria que tuvieran disponibles son : " . $request->solicitud;

        return view("Home.whatsapp", compact("msg"));
    }
}
