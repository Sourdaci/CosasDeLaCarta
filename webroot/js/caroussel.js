var posicion = 0;
 var imagenes = new Array();
 $(document).ready(function() {
   var numeroImatges = 4;
   if(numeroImatges<=3){
       $('.derecha_flecha').css('display','none');
    $('.izquierda_flecha').css('display','none');
   }

     $('.img_carrusel').live('click',function(){
         $('#bigimage').attr('src',$(this).attr('src'));
        return false;
     });

     $('.izquierda_flecha').live('click',function(){
         if(posicion>0){
            posicion = posicion-1;
        }else{
            posicion = numeroImatges-3;
        }
        $(".carrusel").animate({"left": -($('#imagen_'+posicion).position().left)}, 600);
        return false;
     });

     $('.izquierda_flecha').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha').hover(function(){
         $(this).css('opacity','0.5');
     },function(){
         $(this).css('opacity','1');
     });

     $('.derecha_flecha').live('click',function(){
        if(numeroImatges>posicion+3){
            posicion = posicion+1;
        }else{
            posicion = 0;
        }
        $(".carrusel").animate({"left": -($('#imagen_'+posicion).position().left)}, 600);
        return false;
     });

 });