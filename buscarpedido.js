let buscarP=document.getElementById("buscar");
let btnBuscar=document.getElementById("btnBuscar");

btnBuscar.addEventListener("click", function(){
    $.ajax({
        url:"consulta.php",
        method:"POST",
        data:{
            datos:buscarP.value
        },
        success: function (r){
            $('#resultados').html(r);
        }
    })
})


