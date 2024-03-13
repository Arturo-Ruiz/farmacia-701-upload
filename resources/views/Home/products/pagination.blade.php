@if (count($products))
    @foreach ($products as $product)
        <div class="card col-md-4 col-sm-5 col-xs-1 ">
            @if ($product->img)
                <div class="img__container position-relative">
                    @if ($product->checked === '1')
                        <div class="controled position-absolute">
                            <p class="title__controlado text-uppercase">Requiere recipe</p>
                        </div>
                    @endif
                    <img src="{{ asset('products/' . $product->img) }}" class="card-img-top img-fluid" alt="...">
                </div>
            @else
                <div class="img__container position-relative">
                    @if ($product->checked === '1')
                        <div class="controled position-absolute">
                            <p class="title__controlado text-uppercase">Requiere recipe</p>
                        </div>
                    @endif
                    <img src="{{ asset('img/logo.png') }}" class="card-img-top img-fluid" alt="...">
                </div>
            @endif
            <div class="card-body">
                <div class="table_container">
                    <div>
                        <h5 class="text-left card-title fw-bold table_cell-title">{{ $product->name }}</h5>

                    </div>
                    <div class="d-flex justify-content-center fw-bold price ">
                        <p class="card-text table_cell">Bs. </p>
                        <p class="card-text table_cell">{{ $product->price * $dayrate->value }}</p>
                    </div>
                    <a href="#"
                        class="d-flex justify-content-center btn btn-primary text-align-center d-block">Agregar</a>
                    <div class=" d-flex justify-content-center">
                        <!-- <a class="cart_cantidad_restar btn btn-primary" href="#"> - </a>
                            <p class="cart_quantity">5</p>
                            <a class="cart_cantidad_sumar btn btn-primary" href="#"> + </a> -->
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endif
