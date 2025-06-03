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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FSFRGLQSQG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FSFRGLQSQG');
</script>

<style>
    /* INDEX 
    ... (tus otras secciones) ...
    NUEVO: X- Categories Carousel (Nuevo)
    ...
*/

/*********************************
    X- Categories Carousel (Nuevo)
**********************************/
#categories-carousel-section .head__title {
    margin-bottom: 1.5rem; /* Ajusta el espacio debajo del título si lo usas */
}

.categories-owl-carousel .category-item {
    padding: 5px; /* Pequeño espacio para que no se peguen los bordes/sombras */
}

.categories-owl-carousel .category-item a {
    text-decoration: none;
    color: #333; /* Color del texto del nombre de la categoría */
    display: block; /* Para que el hover afecte a toda el área */
    transition: transform 0.3s ease-in-out;
}

.categories-owl-carousel .category-item a:hover {
    transform: translateY(-5px); /* Efecto sutil al pasar el mouse */
}

.categories-owl-carousel .category-item img {
    width: 100px;  /* Ancho inicial para el círculo */
    height: 100px; /* Alto inicial para el círculo (igual al ancho) */
    border-radius: 50%; /* ESTO HACE LA IMAGEN CIRCULAR */
    object-fit: cover; /* Asegura que la imagen cubra el círculo sin deformarse */
    border: 2px solid var(--color__primary); /* Borde con tu color primario */
    padding: 3px; /* Espacio opcional entre la imagen y el borde */
    background-color: #fff; /* Fondo por si las imágenes tienen transparencia */
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    margin: 0 auto; /* Para centrar la imagen si el contenedor es más ancho */
}

.categories-owl-carousel .category-name {
    font-size: 0.9em;
    font-weight: 500;
    margin-top: 10px; /* Espacio entre la imagen y el nombre */
    line-height: 1.2;
    height: 2.4em; /* Para tratar de mantener 2 líneas de texto visibles */
    overflow: hidden; /* Oculta texto extra */
    text-overflow: ellipsis; /* Añade ... si el texto es muy largo */
}

/* Estilos para los botones de navegación (opcional, si los activas en JS) */
.categories-owl-carousel .owl-nav button.owl-prev,
.categories-owl-carousel .owl-nav button.owl-next {
    background: rgba(0, 119, 204, 0.8) !important; /* Tu color primario con transparencia */
    color: white !important;
    border-radius: 50% !important;
    width: 35px !important;
    height: 35px !important;
    font-size: 16px !important; /* Ajusta el tamaño del icono de flecha */
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    padding: 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
}

.categories-owl-carousel .owl-nav button.owl-prev {
    left: -15px !important; /* Ajusta para que no esté tan pegado */
}

.categories-owl-carousel .owl-nav button.owl-next {
    right: -15px !important; /* Ajusta para que no esté tan pegado */
}

.categories-owl-carousel .owl-nav button.owl-prev:hover,
.categories-owl-carousel .owl-nav button.owl-next:hover {
    background: var(--color__primary) !important; /* Color primario sólido al pasar el mouse */
}


/* --- AJUSTES RESPONSIVOS PARA EL NUEVO CARRUSEL --- */
/* Para pantallas medianas (tablets) - ajustamos tamaño del círculo */
@media screen and (max-width: 991px) { /* Antes del breakpoint 'lg' de Bootstrap */
    .categories-owl-carousel .category-item img {
        width: 90px;
        height: 90px;
    }
    .categories-owl-carousel .category-name {
        font-size: 0.85em;
    }
}

/* Para pantallas pequeñas (móviles) - ajustamos más el tamaño */
@media screen and (max-width: 767px) { /* Antes del breakpoint 'md' de Bootstrap */
    .categories-owl-carousel .category-item img {
        width: 80px;
        height: 80px;
    }
     .categories-owl-carousel .owl-nav button.owl-prev {
        left: -5px !important;
    }

    .categories-owl-carousel .owl-nav button.owl-next {
        right: -5px !important;
    }
}

@media screen and (max-width: 575px) { /* Antes del breakpoint 'sm' de Bootstrap */
    .categories-owl-carousel .category-item img {
        width: 70px;
        height: 70px;
    }
    .categories-owl-carousel .category-name {
        font-size: 0.8em;
    }
}
</style>
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

    <section id="categories-carousel-section" class="container py-4">
    <div class="py-2"> <p class="h3 head__title text-start">Laboratorios Recomendados</p> </div>
    <div class="owl-carousel categories-owl-carousel">
        <div class="category-item text-center">
            <a href="#link-categoria-1"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy1L0KksDyj5KhIrjBZeXi3iTjM4TwyoEsMw&s" alt="Categoría 1">
                <p class="category-name mt-2">Calox</p>
            </a>
        </div>
        <div class="category-item text-center">
            <a href="#link-categoria-2">
                <img src="https://www.drogueriaits2015.com.ve/app_img/aliados/COFASA.png" alt="Categoría 2">
                <p class="category-name mt-2">Cofasa</p>
            </a>
        </div>
        <div class="category-item text-center">
            <a href="#link-categoria-3">
                <img src="https://via.placeholder.com/150/6DC72E/FFFFFF?Text=Cat+3" alt="Categoría 3">
                <p class="category-name mt-2">Vitaminas</p>
            </a>
        </div>
        <div class="category-item text-center">
            <a href="#link-categoria-4">
                <img src="https://via.placeholder.com/150/FFA207/FFFFFF?Text=Cat+4" alt="Categoría 4">
                <p class="category-name mt-2">Bebés y Maternidad</p>
            </a>
        </div>
        <div class="category-item text-center">
            <a href="#link-categoria-5">
                <img src="https://via.placeholder.com/150/8304F3/FFFFFF?Text=Cat+5" alt="Categoría 5">
                <p class="category-name mt-2">Dermocosmética</p>
            </a>
        </div>
        <div class="category-item text-center">
            <a href="#link-categoria-6">
                <img src="https://via.placeholder.com/150/333333/FFFFFF?Text=Cat+6" alt="Categoría 6">
                <p class="category-name mt-2">Equipos Médicos</p>
            </a>
        </div>
    </div>
</section>

<section id="ads" class="container">
    </section>
    <!-- carousel publicidad -->

    <section id="ads" class="container">

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

        $(".categories-owl-carousel").owlCarousel({
        loop: true,
                    autoplay: true,
            autoplayTimeout: 2000,             // Para que sea un bucle infinito
        margin: 10,             // Espacio entre ítems (ajusta según necesites)
        nav: true,              // Muestra botones de navegación (prev/next)
        dots: true,            // Muestra los puntos de paginación (puedes poner false si no los quieres)
        navText: [              // Personaliza los iconos de navegación (necesitas FontAwesome)
            "<i class='fa-solid fa-angle-left'></i>",
            "<i class='fa-solid fa-angle-right'></i>"
        ],
        responsive: {
            0: { // Pantallas muy pequeñas (móviles en vertical)
                items: 4, // Mostrar 2 ítems
                dots: true, // Quizás quieras dots en móviles
                nav: false // Y ocultar nav si hay poco espacio
            },
            576: { // Pantallas pequeñas (móviles en horizontal, sm de Bootstrap)
                items: 5 // Mostrar 3 ítems
            },
            768: { // Pantallas medianas (tablets, md de Bootstrap)
                items: 5 // Mostrar 4 ítems
            },
            992: { // Pantallas grandes (escritorio pequeño, lg de Bootstrap)
                items: 5 // Mostrar 5 ítems como solicitaste
            }
        }
    });

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
