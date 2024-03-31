<script>

    let name ="{{ $name }}"; 
    
    let msg = `
    Nombre Y Apellido o Empresa: ${name}
    `; 

    let url = `https://api.whatsapp.com/send?phone=584124212799&text=${encodeURIComponent(msg)}`; 
    
    location.href = url;

</script>