<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('img\favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('recursos/bootstrap-5/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('recursos/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('recursos/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('recursos/icons/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}" />

    <title>Carrito de compras</title>
</head>

<body class="bg-light container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fs-6 text-primary" href="{{route('inicio')}}"> <i class="fa-solid fa-reply"></i> Volver a la
                tienda </a>
        </div>
    </nav>


    <section class="">
        <div>
            <div class="text-center">
                <img src="img\logo.png" class="d-block mx-auto my-4" alt="Logo de farmacia 701" width="80" height="80">
                <p class="h3 fw-bold">Carrito de compras</p>
                <p class="fs-5 fw-lighter">Finaliza los detales de tu compra</p>
            </div>
        </div>


        <main class="row">
            <!-- tabla carrito de compras  -->

            <div class="col-md-7 cart__info mt-5 py-5 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3 cart_count">
                    <span class="text-primary">Su pedido</span>
                    <span class="badge bg-primary rounded-pill"></span>
                </h4>


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cant</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody id="products__table">

                    </tbody>
                    <tr class="total_pago">

                    </tr>
                </table>
                
            </div>


            <!-- Datos personales y de envio  -->

            <div class="info col-md-5 mt-md-5 py-md-5">
                <div class="mb-3">
                    <p class="h4 fw-bold">
                        Datos personales y envío

                    </p>
                </div>

                <form method="POST" action="{{ route('cartSave') }}">
                    @csrf

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="firstName" class="form-label">Nombre y Apellido o Nombre de empresa</label>
                            <input name="name" type="text" class="form-control" placeholder="Nombre y Apellido o Nombre de empresa" value=""
                                required="active">
                        </div>

                        <div class="col-12">
                            <label for="dni" class="form-label">Cedula o Rif</label>
                            <input name="dni" type="text" class="form-control" placeholder="Ingresar Cedula o RIF" value=""
                                required="active">
                        </div>


                        <div class="col-12">
                            <label for="email" class="form-label">Email <span
                                    class="text-muted">(Opcional)</span></label>
                            <input type="email" class="form-control" id="email"  name="email"
                                placeholder="Con tu email podras participar de nuestras promociones">
                        </div>

                        <div class="col-12">
                            <label for="phone" class="form-label">Teléfono <span
                                    class="text-muted">(Opcional)</span></label>
                            <input type="phone" class="form-control" id="phone"  name="phone"
                                placeholder="Coloca el Teléfono de la persona que retira o recibira el producto">
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Direccion de envío</label>
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="En caso de solicitar delivery" required="">
                        </div>


                    </div>

                    <hr class="my-4">
                    <h4 class="mb-1">Elija el tipo de entrega <i class="fa-solid fa-truck-fast"></i></h4>
                    <div class="my-2 col-6">
                        <div class="form-check">
                            <input id="retiro" name="metodo_entrega" value="Retiro en tienda" type="radio" class="form-check-input" checked=""
                                required="">
                            <label class="form-check-label" value="Retiro en tienda"  for="retiro">Retiro en tienda</label>
                        </div>
                        <div class="form-check">
                            <input id="delivery" value="Delivery" name="metodo_entrega" type="radio" class="form-check-input"
                                required="">
                            <label class="form-check-label" value="Delivery" for="delivery">Delivery</label>
                        </div>

                    </div>

                    <!-- <div class="form-check">
                       <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Guardar esta información para una proxima oportunidad</label>
                    </div>  -->

                    <hr class="my-4">

                    <h4 class="mb-1">Método de pago <i class="fa-solid fa-credit-card"></i></h4>
                    <div class="my-2 col-6">
                        <div class="form-check">
                            <input id="debito" value="Tarjeta de debito" name="paymentMethod" type="radio" class="form-check-input" checked=""
                                required="">
                            <label class="form-check-label" value="Tarjeta de debito" for="debito">Tarjeta de débito</label>
                        </div>
                        <div class="form-check">
                            <input id="credito" name="paymentMethod" value="Tarjeta de crédito" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" value="Tarjeta de crédito" for="credito">Tarjeta de crédito</label>
                        </div>
                        <div class="form-check">
                            <input id="pagoMovil" value="Pago móvil" name="paymentMethod" type="radio" class="form-check-input"
                                required="">
                            <label class="form-check-label" value="Pago móvil" for="pagoMovil">Pago móvil</label>
                        </div>
                        <div class="form-check">
                            <input id="zelle" value="Zelle" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" value="Zelle" for="zelle">Zelle</label>
                        </div>
                        <div class="form-check">
                            <input id="binance" value="Binance" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label value="Zelle" class="form-check-label" for="binance">Binance</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" value="Paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label value="Paypal" class="form-check-label" for="paypal">Paypal</label>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-1">Solicitud de productos <i class="fa-solid fa-paper-plane"></i></h4>
                    <div class="my-2 col-6">
                        <div class="form-check">
                            <div class="mb-3">
                                <textarea name="solicitud" class="form-control solicitud__area" id="solicitud" rows="2" placeholder="Ingrese productos requeridos que no aparecen en el catálogo"></textarea>
                              </div>
                        </div>
                    </div>
                    <input id="products" name="products" type="hidden">
                    <input id="total" name="total" type="hidden">

                    <button  class="w-100 btn btn-primary btn-lg" type="sumbit">Enviar pedido</button>
                </form>

            </div>

        </main>

    </section>










    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Sponsored by Farmacia 701 &copy; all rigths reserved</p>
    </footer>
    </div>







    <script src="{{ asset('recursos/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('recursos/bootstrap-5/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('recursos/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('recursos/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('recursos/icons/all.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    
<script>
    window.onload = () => {
        insertarTabla();
        cantItemsTable();
        getTotal();
    };

    //    Al cargar elementos del DOM inserta en la tabla lo que haya en sessionStorage por si acaso
    //       addEventListener('DOMContentLoaded', insertarTabla);


    // Sumar y restar productos en tabla

    tablaPedido.addEventListener('click', (e) => {
        e.preventDefault();
        // console.log(e);

        let nombreProducto = e.composedPath()[3].childNodes[1].innerHTML;
        let items = JSON.parse(sessionStorage.getItem("item"))

        if (e.target.innerText === '+') {
            items.map((e) => {

                if (nombreProducto == e.nombre) {

                    e.cantidad = ++e.cantidad
                    e.total = e.precio * e.cantidad
                    e.total = e.total.toFixed(2);

                    items.indexOf(e, e)

                    sessionStorage.setItem("item", JSON.stringify(items))

                    insertarTabla();
                    cantItemsTable();
                    getTotal();
                }
            })

        } else

            if (e.target.innerText === '-') {
                items.map((e) => {

                    if (nombreProducto == e.nombre) {

                        e.cantidad = --e.cantidad
                        e.total = e.precio * e.cantidad
                        e.total = e.total.toFixed(2);

                        items.indexOf(e, e)

                        sessionStorage.setItem("item", JSON.stringify(items))

                        if (e.nombre === nombreProducto && e.cantidad === 0) {
                            let i = JSON.parse(sessionStorage.getItem("item"));
                            // console.log('se cumple la condicion', e.nombre);
                            let res = i.filter(e => e.nombre != nombreProducto);
                            sessionStorage.setItem("item", JSON.stringify(res));

                        }

                        insertarTabla();
                        cantItemsTable();
                        getTotal();

                    }

                })
            }
    })



    // Contar cuantos items hay en el carrito checkout-table
    const cantItemsTable = () => {
        let itemsCart = JSON.parse(sessionStorage.getItem("item"));
        let divTable = document.querySelector(".cart_count");


        let temp = itemsCart.map(function (item) {
            return parseFloat(item.cantidad);
        });

        let sumItems = temp.reduce(function (prev, next) {
            return prev + next

        }, 0);


        if (sumItems > 0) {
            divTable.innerHTML = `
                <span class="text-primary">Su pedido</span>
                <span class="badge bg-primary rounded-pill"> ${sumItems} <i class="fa-solid fa-cart-shopping"></i></span>`;
        } else {
            divTable.innerHTML = `
                <span class="text-primary">Su pedido</span>
                <span class="badge bg-primary rounded-pill">0<i class="fa-solid fa-cart-shopping"></i></span>`;
        }
    };



    // borrar items del carrito  

    function borrarItem() {
        document.getElementById("products__table").addEventListener("click", (e) => {

            let productos = JSON.parse(sessionStorage.getItem('item'));
            let productoDeleted = e.composedPath()[4].children[0].innerHTML

            let res = productos.filter(e => e.nombre != productoDeleted);
            // console.log(res);  

            sessionStorage.setItem("item", JSON.stringify(res));

            insertarTabla();
            cantItemsTable();
            getTotal();
        })
    }

    const delAtCero = () => {
        document.getElementById("products__table").addEventListener("click", (e) => {

            let productos = JSON.parse(sessionStorage.getItem('item'));
            let productoDeleted = e.composedPath()[4].children[0].innerHTML
            console.log(productoDeleted);
            if (e.nombre === productoDeleted && e.cantidad === 0) {
                let res = productos.filter(e => e.nombre != productoDeleted);

            }
            // console.log(res);  

            // sessionStorage.setItem("item", JSON.stringify(res));

            // insertarTabla();
            // cantItemsTable();
            // getTotal();
        })
    }


    // sumar las cantidades del carrito y dar el total 

    function getTotal() {
        let totalPago = document.querySelector('.total_pago');
        let items = JSON.parse(sessionStorage.getItem("item"));

        let temp = items.map(function (item) {
            return parseFloat(item.total);
        });

        let sum = temp.reduce(function (prev, next) {
            return prev + next

        }, 0);

        sum = sum.toFixed(2);

        $("#total").val(sum);

        totalPago.innerHTML =
            `<th></th>
                    <th>Total a pagar</th>
                    <th class="text-center">Bs.${sum}</th>`
    }


</script>
</body>
</html> 
