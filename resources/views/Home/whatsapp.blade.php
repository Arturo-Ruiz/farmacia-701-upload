<script>
    let name ="{{ $name }}"; 
    let dni ="{{ $dni }}"; 
    let email ="{{ $email }}"; 
    let phone ="{{ $phone }}"; 
    let address ="{{ $address }}"; 
    let deliveryMethod ="{{ $deliveryMethod }}"; 
    let paymentMethod ="{{ $paymentMethod }}"; 



    let products = sessionStorage.getItem('item');


    console.log(dni)
    console.log(email)
    console.log(phone)
    console.log(products)
    console.log(deliveryMethod)


    let order_products = ``; 
    JSON.parse(products).forEach((element) => 
        order_products = order_products + `
*${element['nombre']}* | Cantidad: *${element['cantidad']}*
`
    );

    console.log(order_products)


    
    let msg = `Nombre Y Apellido o Empresa: *${name}*

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
*--------------*
`

msg = msg + `


Compra:
`





    // let url = `https://api.whatsapp.com/send?phone=584141850671&text=${encodeURIComponent(msg)}`; 
    console.log(msg)
    location.href = url;

</script>