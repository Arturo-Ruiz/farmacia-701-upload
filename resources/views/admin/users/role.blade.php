@if ($role_id === 1)
    <span class="badge badge-primary badge-lg">Administrador</span>
@elseif ($role_id === 2)
    <span class="badge badge-primary badge-lg">Almacen</span>
@elseif ($role_id === 3)
    <span class="badge badge-primary badge-lg">Vendedor</span>
@else
    <b>Ningun rol asignado</b>
@endif