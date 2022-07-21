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
                        <h6 class="h2 text-white d-inline-block mb-0">Productos</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('panel-admin') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('Productoss.index') }}">Productos</a></li>
                                <li class="breadcrumb-item"><a href="#">Cargar Imagenes</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{ route('Productoss.index') }}" class="btn btn-lg btn-neutral"><i class="fas fa-arrow-left"></i> Volver Atrás</a>
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
                        <h3 class="mb-0">Realizar carga de imagénes</h3>
                    </div>
                    <form method="POST"
                        action="{{ route('product.upload.store') }}" 
                        enctype="multipart/form-data"
                        class="dropzone"
                        id="my-awesome-dropzone">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('admin.layouts.footer')
      

        @endsection

@section('scripts')
    <script>   
        Dropzone.prototype.defaultOptions.dictDefaultMessage = "Selecciona o Arrastra Las imagenes aqui para subirlas!";
        Dropzone.prototype.defaultOptions.dictFallbackMessage = "Tu navegador no soporta la subida de imagenes.";
        Dropzone.prototype.defaultOptions.dictFallbackText = "Please use the fallback form below to upload your files like in the olden days.";
        Dropzone.prototype.defaultOptions.dictFileTooBig = "Esta imagen es muy grande.";
        Dropzone.prototype.defaultOptions.dictInvalidFileType = "You can't upload files of this type.";
        Dropzone.prototype.defaultOptions.dictCancelUpload = "Cancel upload";
        Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation = "Are you sure you want to cancel this upload?";
        Dropzone.prototype.defaultOptions.dictRemoveFile = "Remove file";
        Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "You can not upload any more files.";

        Dropzone.options.myAwesomeDropzone = {
            paramName: "file",
            success: function (file, response) {
                // alert("Imagen Subida Correctamente")
            } 
        };       
    </script>
@endsection
