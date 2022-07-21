@extends('admin.layouts.index')

@section('content')
<div class="header bg-primary pb-6">
        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="alert alert-success">
                            {{ session('info') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (session('danger'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Usuarios</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('panel-admin') }}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-lg btn-neutral" data-toggle="modal" data-target="#register_user">Registrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Administrar Usuarios</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id="users" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
     
      <!-- Footer -->
      @include('admin.layouts.footer')
</div>

@include('admin.users.modal_create_user')
@include('admin.users.modal_edit_user')

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
          $table =  $('#users').DataTable({
            responsive: true,
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     ">",
                "sPrevious": "<"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }

                },
                "serverSide": true,
                "ajax" : "{{url('api/users')}}",
                "columns":[
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'actions'},
                ]

            });
        } );

</script>
@endsection
