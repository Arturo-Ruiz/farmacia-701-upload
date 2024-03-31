<script>
    let name ="{{ $name }}"; 
    let dni ="{{ $dni }}"; 
    let email ="{{ $email }}"; 
    let phone ="{{ $phone }}"; 
    let products ="{{ $products }}"; 


    console.log(dni)
    console.log(email)
    console.log(phone)
    console.log(products)

    
    let msg = `Nombre Y Apellido o Empresa: *${name}*
    
    `; 

    let url = `https://api.whatsapp.com/send?phone=584141850671&text=${encodeURIComponent(msg)}`; 
    
    // location.href = url;

</script>