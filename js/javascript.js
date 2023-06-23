  

  $(document).ready(function(){
  
   var reproducir_video= document.getElementById("video");
   var reproducir_musica=document.getElementById("radio");
  var boton_imagen=document.getElementById("imagen_play").addEventListener("click",iniciar_musica,false);
  var ecu=document.getElementById("ecualizador");
  
  
  
  // $("#ecualizador").addClass("ecualizador");
   //$("#ecualizador").setAttribute("class", "ecualizador_pausa");
   $("#imagen_play").addClass("boton_play");
 verificar_si_esta_prendido();
   
   function iniciar_musica(){
   
   if(!reproducir_musica.paused && !reproducir_musica.ended){
   reproducir_musica.pause();
   
   
   //ecu.style.display="inline";
  // $("#imagen_play").setAttribute("class", "boton_play");
   $("#imagen_play").removeClass("boton_pausa");
   $("#imagen_play").addClass("boton_play");
   
  // $("#imagen_play").toggleClass("boton_play");
   }else{
   
   reproducir_musica.play();
   //var tiempo= reproducir_musica.currentTime;
   //var segundo= Math.round(reproducir_musica.currentTime);
   //var tiempo= segundo.toString();
   reproducir_musica.ontimeupdate=function(){
   var segundo= Math.round(reproducir_musica.currentTime);
   
   var d=new Date(segundo*1000);
   var minuto = (d.getMinutes()<9)?"0"+d.getMinutes():d.getMinutes();
   var segundos = (d.getSeconds()<9)?"0"+d.getSeconds():d.getSeconds();
   
   document.getElementById("tiempo").innerHTML=minuto+":"+segundos;
   verificar_si_esta_prendido();
   
//var tiempo=   document.getElementById("tiempo1").max=reproducir_musica.duration;
   //document.getElementById("tiempo1").value=reproducir_musica.currentTime;
   };
   /*alert(tiempo);*/
   
  // ecu.style.display="inline";
   //$("#imagen_play").setAttribute("class", "boton_pausa");
   $("#imagen_play").removeClass("boton_play");
  $("#imagen_play").addClass("boton_pausa");
   
   }
   }
   
   function verificar_si_esta_prendido(){
   if(reproducir_musica.paused){
   //reproducir_musica.pause();
 // ecu.style.display="none";
 //$("#ecualizador").removeClass("ecualizador");
  //$("#ecualizador").addClass("ecualizador_pausa");
   //$("#ecualizador").setAttribute("class", "ecualizador_pausa");
  ecu.style.background="";
  $("#imagen_play").removeClass("boton_pausa");
  $("#imagen_play").addClass("boton_play");
  
  // $("#imagen_play").toggleClass("boton_play");
   }else{
   
   //reproducir_musica.play();
  // ecu.style.display="inline";
   //$("#imagen_play").setAttribute("class", "boton_pausa");
   ecu.style.background="url('../ecualizador.png')";
   $("#imagen_play").removeClass("boton_play");
  $("#imagen_play").addClass("boton_pausa");
   
   }
   }
  });
 

