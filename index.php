
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MC RADIO tu mejor compañia</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
	
	  
<script>
  $(document).ready(function(){
  
  

var d=new Date();
 var mda= d.getDate()+"/"+(1+d.getMonth())+"/"+
  d.getFullYear();
  
 var hm=d.getHours()+":"+((d.getMinutes()<=9)?"0"+d.getMinutes():d.getMinutes());
  
  
  
 document.getElementById("texto_fecha").value=mda+" "+hm+"hs";
  
  
  
  var campo=document.getElementById("campo");
  $("#boton_enviar").click(function(){

  var valores= $("#campos").serialize();
  
   $.ajax({
    url:"ingresar_datos.php",
	type:"POST",
	data:valores,
	success:function(r){
     alert(r);
	
	}
  
  });
 document.getElementById("texto_nombre").value="";
 document.getElementById("texto_mensaje").value="";
 
  return false;
  });
  
  
  
  
   var reproducir_video= document.getElementById("video");
   var reproducir_musica=document.getElementById("radio");
  var boton_imagen=document.getElementById("imagen_play").addEventListener("click",iniciar_musica,false);
  var ecu=document.getElementById("ecualizador");
  
  
   $("#imagen_play").addClass("boton_play");
  
 verificar_si_esta_prendido();
   
   function iniciar_musica(){
   
   if(!reproducir_musica.paused && !reproducir_musica.ended){
   reproducir_musica.pause();
   
   
   $("#imagen_play").removeClass("boton_pausa");
   $("#imagen_play").addClass("boton_play");
   
  // $("#imagen_play").toggleClass("boton_play");
   }else{
   
   reproducir_musica.play();
   reproducir_musica.ontimeupdate=function(){
   var segundo= Math.round(reproducir_musica.currentTime);
   
   var d=new Date(segundo*1000);
   var minuto = (d.getMinutes()<9)?"0"+d.getMinutes():d.getMinutes();
   var segundos = (d.getSeconds()<9)?"0"+d.getSeconds():d.getSeconds();
   
   document.getElementById("tiempo").innerHTML=minuto+":"+segundos;
   verificar_si_esta_prendido();
   
   };
   
   $("#imagen_play").removeClass("boton_play");
  $("#imagen_play").addClass("boton_pausa");
   
   }
   }
   
   function verificar_si_esta_prendido(){
   if(reproducir_musica.paused){
   
  ecu.style="display:none";
  $("#imagen_play").removeClass("boton_pausa");
  $("#imagen_play").addClass("boton_play");
  
   }else{
  
   ecu.style="display:block";
   $("#imagen_play").removeClass("boton_play");
  $("#imagen_play").addClass("boton_pausa");
   
   }
   }
  });
  
  function mensaje(){
  
  document.getElementById("formulario").style.display="block";
  document.getElementById("pagina_principal").style.display="none";
 
  }
  function pagina_principal(){
  
  document.getElementById("formulario").style.display="none";
  document.getElementById("pagina_principal").style.display="block";
  }
  
 
</script>
	
	  
  </head>

  <body class="" >
      
<?php
	include 'mostrar_imagen.php';
  include 'mostrar_texto.php';

?>



	
	<div id="fondo_principal"  class=" " >
	  
	  
	<nav class="navbar navbar-expand-lg bg-transparent fixed-top ">
	  <div class="container-fluid">
		<a class="navbar-brand " href="#">MC RADIO</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
		  
		  <div class="navbar-nav m-auto ">
			<a class="nav-link  " aria-current="page" onclick="pagina_principal()" data-bs-toggle="collapse" href="#navbarNavAltMarkup" >INICIO</a>
			<a class="nav-link" onclick="mensaje()" data-bs-toggle="collapse" href="#navbarNavAltMarkup" >MENSAJE</a>
			<a class="nav-link" data-bs-toggle="collapse" href="#navbarNavAltMarkup">FACEBOOCK</a>

		  </div>
		</div>
	  </div>
	</nav>
	

	  <div id="pagina_principal" class="">
	
    <div class="btn ">
	  <!-- MUESTRA EL VIDEO -->
	  <div class=" btn "   >
	  <div id="caja_video" class="">
		<video id="video"width="100%" height="100%"
		  autoplay muted loop >
		  <source src="videomc.mp4" ></source>
		</video>
	  </div>
	  </div>
	  <!-- MUESTRA EL ANUNCIO DE IMAGEN -->

  


	  <div id="caja_imagen_anuncio" class="" >

		<div id="carouselExampleIndicators" class="carousel carousel-fade slide " data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active  " aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
			<div class="carousel-item active ">
			  <img src="data:image/jpeg; base64,<?php echo $img ?>" class="d-block w-100" height="385px" alt="plantilla para curriculum vitae">
			  <div class="carousel-caption  ">
			

			  </div>

			</div>
			<div class="carousel-item">
			  <img src="data:image/jpeg; base64,<?php echo $img2 ?>" class="d-block w-100" height="385px" alt="plantilla para curriculum vitae">
			  <div class="carousel-caption  ">
				

			  </div>

			</div>
			<div class="carousel-item">
			  <img src="data:image/jpeg; base64,<?php echo $img3 ?>" class="d-block w-100" height="385px" alt="plantilla para curriculum vitae">
			  <div class="carousel-caption  ">
			

			  </div>

			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span  class=" carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next  " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon " aria-hidden="true"></span>
			<span class="visually-hidden  ">Next</span>
		  </button>
		

	  

	
		</div>

		
	  </div>
	  <!-- MUESTRA EL ANUNCIO DEL TEXTO 
	  EN MOVIMIENTO-->
	  <div id="caja_texto_anuncio">
		<marquee id="texto_anuncio">
		  <?php echo "$fila[0]" ?>
		</marquee>
	  </div>
	  </div>
	  
	  <!-- MUESTRA ECUALIZADOR ,BOTON PLAY
	  Y EL TIEMPO-->
	  <div id="caja_de_contenido_musical" >

		<audio id="radio"  >
		  <source src ="http://node-07.zeno.fm/wepq48u94v8uv?rj-ttl=5&rj-tok=>" type="audio/mpeg"></source>
		</audio>
		
		
		
		<img id="imagen_fondo_boton" class="" height="80px" width="100%"
		  src="imagen_fondo_btn.jpg" >
		  
		<div class="row ">
		  
       <div class="col-4 btn  " >
		 <img class="btn "id="ecualizador" src="ecualizador.png" width="100px" height="100px" style="display:none">
	   </div>
		  <div class="col-4  btn"  >
		<img id="imagen_play" src="play.png"   width="100px" height="100px"  class=" ">
	   </div>
	   <div class="col-4 btn ">
		 <h1 class="btn " id="tiempo"></h1>
	   </div>
	  
		</div>
	  
    </div><!-- /.container -->
</div>
	
	</div>
	 


	<!-- formulario para enviar mensaje-->
	  
	 <div id="formulario" style="display:none"> 
	<div class="container"id="formulario" align="center">
	  <h1 id="titulo_mensaje">Mensaje</h1>
	  
	  <img id="img_formulario" src="imagen_mensaje.png"  width="100%" height="250px" >
		
	  <form id="campos" method="POST"  class="form-inline"  role="form">
		<div class="form-group">
		  <label class="sr-only" for="texto_nombre"  >Nombre</label>
		  <input  name="nombre" type="text" class="form-control" 
			placeholder="Nombre" id="texto_nombre">
		</div>

		<div class="form-group">
		  <label for="texto_mensaje" id="texto_nombre"></label>
		  <textarea name="texto"  class="form-control" id="texto_mensaje" 
			rows="5" placeholder="Escribe aqui tu mensaje" ></textarea>
		</div>
       <div>
           <input type="hidden" name="fecha" id="texto_fecha">
           
       </div>
		<button  class="btn btn-warning btn-block" id="boton_enviar" >Enviar</button>
	  </form>

	  
    </div><!-- /.container -->
	 </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	  <script  src="js/bootstrap.min.js"></script>
	 

  </body>
</html>
