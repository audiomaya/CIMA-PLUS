function enviar_datos_ajax(){
  var n=document.getElementById("nombre").value
  var ap=document.getElementById("apaterno").value
  var am=document.getElementById("nombre").value

  var url="mail.php";

  $.ajax({

    type:"post",
    url:url,
    data:{nombre:n,apaterno:ap,amaterno:am},

    success:function(datos){

      $("#mostrardatos").html(datos);

    }

  }

  )
}
