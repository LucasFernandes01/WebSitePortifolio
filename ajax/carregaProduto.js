function carrega(count){ // ESSE
    //CARREGANDO OS DADOS PARA O MODAL
   $.ajax({
       url:'selectImg.php',
       method:"POST",
       data:{count: count},
       success:function(data){
         $('#divImg_'+count).html(data);
       }
    });  

}

function carregaNomeCampo(id, count){ //PEGANDO PARAMETRO PELO ID DO BOTAO
    $.ajax({
       url: 'selectNome.php',
       method:"POST",
       data:{name: id}, //NESSE CASO, O name É O ID DO BOTAO PASSADO VIA PARAMETRO
       success:function(data){
           $('#nomeProduto_'+count).html(data);
           
       }
    });
}
