
            $('#product_id_10').select2({
                width: null,
                containerCssClass: ':all:'
            });





            $("#product_id_10").change(function() {
                var id = $(this).val();

                if (id == 0) {
                    $('#total_10').val(0)
                    $('#amount_10').val(0)
                    $('#stock_10').val(0)
                    $('#stock_10').val(0)
                }

                $.ajax({
                    url: "{{ url('api/products/show') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    cache: false,
                    dataType: 'json',
                    success: function(dataResult) {
                        $('#price_unit_10').val(dataResult.price)
                        $('#stock_10').val(dataResult.stock)
                    }
                });

            });

            $("#amount_10").change(function() {
                var value_10 = parseFloat($(this).val());
                var stock_10 = parseFloat($('#stock_10').val());
                if (value_10 > stock_10) {
                    alert('No hay suficiente stock');
                    $('#amount_10').val(0)
                    $('#total_10').val(0)
                } else {
                    var price_sale_10 = parseFloat($('#price_unit_10').val());
                    var total_10 = value_10 * price_sale_10;

                    $('#total_10').val(total_10)
                }
            });