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

    <title>Farmacia 701</title>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WZYLYR21W5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WZYLYR21W5');
</script>
</head>

<body class="active anuncio delivery bg-light">

    <!-- nav bar  -->

    <header class="navbar navbar-light sticky-top bg-light  shadow py-3">
        <nav class="container">
            <a class="navbar-brand " href="{{ route('inicio.dolares') }}">
                <img src="img\logo.png" alt="" width="50" height="50" />
            </a>

            <div class="d-flex align-items-center col-7 justify-content-center">
                <input id="input_search" class="form-control form-control-dark input__search " type="text"
                    placeholder="Busca tu producto aqui" aria-label="Search" />
                <a href="#" id="search" class="btn button__blue button__search search"><i
                        class="fa-solid fa-search"></i></a>
            </div>

            <div class="navbar-nav cart__icon">
                <a href="{{ route('cart_dollars') }}" type="button" class="position-relative button__cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-secondary "></span>
                </a>
            </div>

            <div class="form-check form-switch d-flex flex-column" style="padding: 0;">
                <img src="{{ asset('img\usa.png') }}" class="img-fluid usa" style="width: 25px;" alt="bandera usa">
                <input checked id="dollars" class="form-check-input switch" style="width: 30px; " type="checkbox"
                    role="switch" id="flexSwitchCheck2">
                <label class="form-check-label text-primary mx-1" for="flexSwitchCheck2">
                    <span>
                        Bs {{ $dayrate->value }}
                    </span>
                </label>
            </div>

        </nav>
    </header>

    <section class="anuncio_collapse">
        <div class="sidebar">
            <p class="text-center h6 text-primary text-uppercase fw-bold">Prueba nuestro buscador</p>
            <p class=" mx-4 text-secondary">Haz tu búsqueda por alfabeto, nombre o componente activo</p>
        </div>

    </section>


    <!-- carousel intro  -->

    <section class="container py-3">

        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousels as $carousel)
                    <div class="carousel-item active">
                        <!--data-bs-interval="2000"-->
                            <img src="{{ asset('carousel\\' . $carousel->img) }}" class=" d-flex w-100 img-fluid"
                                alt="imagen de carrusel numero uno">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- separador anuncio  -->
    <section class="separador mt-5 container py-2">
        <div class="navbar">
            <div class="container d-flex justify-content-center align-self-center ">
                <span class="h6 text-uppercase mt-2 fw-bold text-d">unidos</span>
                <span class="h6 text-uppercase"> <img src="img\logo.png" alt=""> <i
                        class="fa-solid fa-plus"></i> <img src="{{ asset('img\zoom.png') }}" alt=""></span>
                <span class="h6 text-uppercase mt-2 fw-bold text-d"> Delivery a nivel nacional <i
                        class="fa-solid fa-truck-fast fs-4"></i></span>
            </div>
        </div>
    </section>


    <!-- carousel publicidad -->

    <section id="ads" class="container mt-5">

        <div class="py-4">
            <p class="h3 head__title">Lo recomendado</p>
        </div>

        <div class="owl-carousel carousel__ads">
            @foreach ($ads as $ad)
                <div class="test"><img src="{{ asset('ads\\' . $ad->img) }}" alt=""></div>
            @endforeach
        </div>

    </section>

    <section id="products" class="container mt-2">



        <div class="py-4">
            <p class="h3 head__title text-center">Catálogo</p>
            <!-- <div class="d-flex  justify-content-end">
                <a class="h5 text-right filter__button">Filtrar <i class="fa-solid fa-filter"></i></a>
            </div> -->
            <!-- <div class="form-check form-switch d-flex justify-content-start">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck">
                <label class="form-check-label text-primary mx-1" for="flexSwitchCheck">Ver en divisas</label>
            </div> -->
        </div>



        <!-- Line -->
        <div id="prueba" class="row justify-content-center product__container">

            @include('Home.dollars.products.pagination')

        </div>


        <!-- boton cargar mas -->
        <div class="d-flex justify-content-center mt-3">
            <button type="button" id="loading" class="btn btn-outline-primary col-4">Cargar más <i
                    class="fa-solid fa-arrow-down"></i></button>
        </div>


    </section>


    <!-- footer  -->

    <section id="footer" class="pt-5">
        <footer class="footer mt-auto py-3 bg-dark">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <span class="text-secondary">&copy; Ingenio Studio <a href="#"
                            class="font-weight-bold ml-1" target="_blank">Henry Silva</a> & <a href="#"
                            class="font-weight-bold ml-1" target="_blank">Arturo Ruiz</a>
                    </span>
                </div>
            </div>
        </footer>
    </section>

    <form id="search_form" method="POST" action="{{ route('search_dollars') }}">
        @csrf
        <input id="value_for_search" name="search" type="hidden">
    </form>

    <script src="{{ asset('recursos/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('recursos/bootstrap-5/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('recursos/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('recursos/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('recursos/icons/all.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
<script>
    let products = 2;

    $("#loading").on('click', function(event) {
        fetch(`/products/pagination/dollars?page=${products}`, {
                method: 'get'
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById("prueba").innerHTML += html
                products++;
            })
            .catch(error => console.log(error))

    });

    const btn = document.querySelector("#search");

    btn.addEventListener("click", (e) => {
        e.preventDefault();
        value = $("#input_search").val();
        value_for_search = $("#value_for_search").val(value);

        const form = document.querySelector("#search_form");
        form.submit();
    })

    const dollars = document.querySelector("#dollars");

    dollars.addEventListener("click", (e) => {
        e.preventDefault();

        sessionStorage.clear();

        location.href = "{{ url('api/bs') }}";
    })
</script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });

        // let filter__button = document.querySelector(".filter_collapse");

        // filter__button.addEventListener("click", function () {
        //     document.querySelector("body").classList.remove("active");

        // })


        let anuncio = document.querySelector("body");

        anuncio.addEventListener("click", function() {
            document.querySelector("body").classList.remove("anuncio");

        })

    })

    const quitar_ad = () => {
        document.querySelector("body").classList.remove("delivery");
    }



    // // Al iniciar inserta en la tabla lo que haya en sessionStorage por si acaso
    addEventListener('DOMContentLoaded', itemsCount);
</script>
