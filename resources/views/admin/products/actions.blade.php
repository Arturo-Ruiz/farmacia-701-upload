<input type="button" class="btn btn-warning edit"  data-toggle="modal" data-target="#edit_product" name="edit"  id="{{$id}}" value="Editar">

<input type="button" class="btn btn-danger delete" name="delete"  id="{{$id}}" value="Eliminar">

<script>

$(".delete").unbind().click(function() {
    $id = $(this).attr('id');

    $.ajax({
        url: "{{url('api/products/delete')}}",
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
        url: "{{url('api/products/edit')}}",
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
            $('#name_presentation_edit').val(dataResult.name_presentation)
            $('#units_presentation_edit').val(dataResult.units_presentation)
            $('#price_total_edit').val(dataResult.price_total)
            $('#percentage_edit').val(dataResult.percentage)
            $('#stock_edit').val(dataResult.stock)
            $('#price_shop_edit').val(dataResult.price)
            $('#price_edit').val(dataResult.price_sale)
            $('#percentage_edit').val(dataResult.percentage)

            

            
        }
      });

      $table.ajax.reload(null, false );

});
</script>