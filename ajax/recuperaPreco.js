function precoDesconto(id, codigo, btn_nome){ //PEGA O ID DO BOTÃO E O CONTEÚDO DO CAMPO
    
    
    //var btn_none_value = btn_nome.toString();
    
    if(codigo === ""){   
        alert("DIGITE O CÓDIGO DO PRODUTO");     
    } 
    else if(codigo !== ""){
        $.ajax({
            url: "selectPrecoDesconto.php",
            method:"POST",
            data: {codigo: codigo, id: id}, // MANDA PARA O ARQUIVO PHP
            success:function(data){
               if($.trim(data) === 'CÓDIGO INVÁLIDO'){
                   alert("CÓDIGO INVÁLIDO");
                   $("#input_"+id).val(""); //APAGA O INPUT
               } else{
                    desabilitaBotao(btn_nome); 
                    $('#showPreco_'+id+' h1').html(data);
                    $("#produtoModal_"+id).modal('hide');  
               }
            },
            
            error:function(err){
                alert(err);
            }
        });
    }
}

 
 
function desabilitaBotao(nome){
   var btnNome = nome.toString();
  // document.getElementById(btnId).disabled = 'true';

    //BOTAO IRÁ DESABILITAR EM 0.1 s
    setTimeout(function(){document.getElementById(btnNome).disabled = 'true';}, 100);
}


