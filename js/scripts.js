$(function (){
   //SELETOR, EVENTO, CALLBACK, AÇAO
   $('.j_mouseover').mouseenter(function (){
        alert("Passou o mouse no H1. Seu Texto é: " + $(this).text());
   });
   
   $('.j_keyup').keyup(function (){
       var texto = $(this).val();
       $('.j_empresa').html(texto);
   });
   
});

