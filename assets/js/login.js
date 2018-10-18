function confirmar(){
	var usuario = $('#usuario').val();
	var contrasena = $('#contrasena').val();
	//alert(usuario + contrasena);
	$.ajax({
		url:'Controladores/user.php',
		type:'POST',
		data:'usuario='+usuario+"&button=ingresar"+'&contrasena='+contrasena
	}).done(function(respuesta){
            //alert(respuesta);
            if (respuesta == '0') {
                alert('usuario o contraseña incorrecta');
            }else{
                location.href = 'partida.php';
            }
		
	});
}
