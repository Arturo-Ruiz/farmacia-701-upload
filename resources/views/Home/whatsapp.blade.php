<script>
    let msg ="{{ $msg }}"; 
    let url = "https://api.whatsapp.com/send?phone=584141850671&text=" + msg; 
    location.href = url;
</script>