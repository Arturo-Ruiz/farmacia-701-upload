<nav class="sidenav navbar navbar-vertical fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">

                <hr class="my-3">

                <!-- Nav items -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('panel-admin') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Panel de control </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Users.index') }}">
                            <i class="ni ni-single-02 text-dark"></i>
                            <span class="nav-link-text">Usuarios</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('DayRate.index') }}">
                            <i class="far fa-money-bill-alt text-dark"></i>
                            <span class="nav-link-text">Tasa del día</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item">
              <a class="nav-link" href="{{ route('Categories.index') }}">
                <i class="far fa-circle text-dark"></i>
                <span class="nav-link-text">Categorías</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('Taxes.index') }}">
                <i class="far fa-circle text-dark"></i>
                <span class="nav-link-text">Impuestos</span>
              </a>
            </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Productoss.index') }}">
                            <i class="fas fa-boxes text-dark"></i>
                            <span class="nav-link-text">Productos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Publicidad.index') }}">
                            <i class="fas fa-ad text-dark"></i>
                            <span class="nav-link-text">Publicidad</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Carrusel.index') }}">
                            <i class="fa fa-outdent text-dark"></i>
                            <span class="nav-link-text">Carrusel</span>
                        </a>
                    </li>

                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link active active-pro"
                            href="https://api.whatsapp.com/send?phone=584127618486&text=Hola%20Arturo%2C%20El%20sistema%20necesita%20mantenimiento%20urgentemente!%20">
                            <i class="ni ni-support-16 text-dark"></i>
                            <span class="nav-link-text">Soporte Tecnico</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
