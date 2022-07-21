<input type="button" class="btn btn-warning edit" name="edit"  id="{{$id}}" value="Editar">

<input type="button" class="btn btn-danger delete" name="delete"  id="{{$id}}" value="Eliminar">


<script>

$(".delete").unbind().click(function() {
    $id = $(this).attr('id');

    $.ajax({
        url: "{{url('api/tax/delete')}}",
        type: "POST",
        data:{
          id: $id,
          _token:'{{ csrf_token() }}'
        },
        cache: false,
        dataType: 'json',
        success: function(dataResult){

        }
      });

      $table.ajax.reload(null, false );

});

$(".edit").unbind().click(function() {
    $id = $(this).attr('id');

    $.ajax({
        url: "{{url('api/tax/edit')}}",
        type: "POST",
        data:{
          id: $id,
          _token:'{{ csrf_token() }}'
        },
        cache: false,
        dataType: 'json',
        success: function(dataResult){

            $('#id').val(dataResult.id)
            $('#name_edit').val(dataResult.name)
            $('#value_edit').val(dataResult.value)

            $("#edit_taxes").modal("show");
        }
      });

      $table.ajax.reload(null, false );

});
</script>