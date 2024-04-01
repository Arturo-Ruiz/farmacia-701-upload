<script>
    let name ="{{ $name }}"; 
    let dni ="{{ $dni }}"; 
    let email ="{{ $email }}"; 
    let phone ="{{ $phone }}"; 
    let address ="{{ $address }}"; 
    let deliveryMethod ="{{ $deliveryMethod }}"; 
    let paymentMethod ="{{ $paymentMethod }}"; 
    let total ="{{ $total }}"; 
    let requestProducts ="{{ $requestProducts }}"; 


    let products = sessionStorage.getItem('item');

    let order_products = ``; 
    JSON.parse(products).forEach((element) => 
        order_products = order_products + `
*${element['nombre']}* | Cantidad: *${element['cantidad']}*
`
    );

    
    let msg = `*Farmacia 701*

Nombre Y Apellido o Empresa: *${name}*

Cedula o RIF: *${dni}*`


    if (email) {
        msg = msg + `

Email: *${email}*`
     }

     if (phone) {
        msg = msg + `

Teléfono: *${phone}*`
     }

     if (address) {
        msg = msg + `

Dirección de entrega: *${address}*`
     }

     msg = msg + `
     
Método de entrega: *${deliveryMethod}*`

     msg = msg + `
     
Método de pago: *${paymentMethod}*`

msg = msg + `


Compra:
${order_products}`

msg = msg + `

*Total Compra: ${total}* 
`

if (requestProducts) {
        msg = msg + `

Y Los productos que me gustaría que tuvieran disponibles son: *${requestProducts}*`
     }
     let url = `https://api.whatsapp.com/send?phone=584124212799&text=${encodeURIComponent(msg)}`; 

    // let url = `https://api.whatsapp.com/send?phone=584141850671&text=${encodeURIComponent(msg)}`; 
    location.href = url;
</script>