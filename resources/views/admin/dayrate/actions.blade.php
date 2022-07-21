<input type="button" class="btn btn-warning edit" name="edit"  id="{{$id}}" value="Editar">



<script>
$(".edit").unbind().click(function() {
    $id = $(this).attr('id');

    $.ajax({
        url: "{{url('api/dayrate/edit')}}",
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

            $("#edit_dayrate").modal("show");
        }
      });

      $table.ajax.reload(null, false );

});
</script>