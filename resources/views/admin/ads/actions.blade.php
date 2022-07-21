<input type="button" class="btn btn-warning edit" name="edit"  id="{{$id}}" value="Editar">

<!-- <input type="button" class="btn btn-danger delete" name="delete"  id="{{$id}}" value="Eliminar"> -->


<script>

$(".delete").unbind().click(function() {
    $id = $(this).attr('id');

    $.ajax({
        url: "{{url('api/ads/delete')}}",
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
        url: "{{url('api/ads/edit')}}",
        type: "POST",
        data:{
          id: $id,
          _token:'{{ csrf_token() }}'
        },
        cache: false,
        dataType: 'json',
        success: function(dataResult){

            $('#id').val(dataResult.id)
          
            $("#edit_ad").modal("show");
        }
      });

      $table.ajax.reload(null, false );

});
</script>