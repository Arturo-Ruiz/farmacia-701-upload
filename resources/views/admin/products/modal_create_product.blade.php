<div class="modal fade" id="register_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('Products.store') }}">
                    @csrf

                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input class="form-control name" placeholder="Ingresar Nombre" name="name" required
                                type="text">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <select class="js-example-basic-single form-control" required name="category_id">
                                <option disabled selected>Seleccionar Categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                            </div>
                            <input class="form-control" id="stock" placeholder="Ingresar Stock" name="stock" required
                                type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    </div>
                                    <input class="form-control" id="price_shop" placeholder="Ingresar Precio Compra"
                                        name="price_shop" required type="text">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    </div>
                                    <input class="form-control" id="price" placeholder="Precio Venta"
                                        name="price" readonly required type="text">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                    </div>
                                    <input class="form-control" id="percentage" placeholder="Ingresar Porcentaje"
                                        name="percentage" required type="number" min="0">
                                </div>
                            </div>
                        </div>
                        
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary save">Registrar</button>
            </div>
            </form>
        </div>
    </div>
