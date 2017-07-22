$(function (){
   //SELETOR, EVENTO, CALLBACK, AÇAO
   $('.j_mouseover').mouseenter(function (){
    //alert("Passou o mouse no H1. Seu Texto é: " + $(this).text());
   });
   
   //SELETOR, EFEITO, CALLBACK, AÇAO
   $('a').click(function (){
        deletaPost($(this).attr('rel'));
        return false;
   });
   
    function deletaPost(postId){
        var alerta = confirm("Tem Certeza que quer Deletar");
        if(alerta === true){
            $('#'+postId).fadeOut(function (){
                alert('Post Removido com sucesso');
            });
        }else{
            alert('no');
        }
    }
   
});

