@extends('admin.layouts.index')

@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Panel Administrativo</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Panel Administrativo</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-md-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Resumen</h6>
                  <h5 class="h3 text-white mb-0">Numero de pedidos por mes</h5>
                </div>

              </div>
            </div>

            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="myChart" class="chart-canvas" width="400" height="400"></canvas>
              </div>
            </div>


          </div>
        </div>
      </div>


      <!-- Footer -->
      @include('admin.layouts.footer')


</div>

@endsection

@section('scripts')
  <script>
     var enero = JSON.parse("{{ json_encode($enero) }}")
        var febrero = JSON.parse("{{ json_encode($febrero) }}")
        var marzo = JSON.parse("{{ json_encode($marzo) }}")
        var abril = JSON.parse("{{ json_encode($abril) }}")
        var mayo = JSON.parse("{{ json_encode($mayo) }}")
        var junio = JSON.parse("{{ json_encode($junio) }}")
        var julio = JSON.parse("{{ json_encode($julio) }}")
        var agosto = JSON.parse("{{ json_encode($agosto) }}")
        var septiembre = JSON.parse("{{ json_encode($septiembre) }}")
        var octubre = JSON.parse("{{ json_encode($octubre) }}")
        var noviembre = JSON.parse("{{ json_encode($noviembre) }}")
        var diciembre = JSON.parse("{{ json_encode($diciembre) }}")
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: '# de ventas',
            data: [enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
  </script>
@endsection
