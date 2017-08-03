function checkNome(nome){
    
    if(nome === ""){

        $("#btnCadastrar").prop('disabled', true);
        $('#dispNome').text("");
        return false;
    }
    
    if(nome !== ""){
        $.ajax({
           url: 'checkUsuarioNome',
           method:'POST',
           data:{nome:nome},
           success:function(res){
//               if($.trim(res == '<span class="text-danger">Este nome já está em uso</span>')){
//                   $('#dispNome').html('<span class="text-danger">Este nome já está em uso</span>');
//                    isOk();
//               }
                    alert(res);
           }  
        });
    }
}

function checkEmail(email){

   if(email ==="" || email.indexOf("@") ==-1  || email.indexOf("@") <= 0
                  || email.indexOf(".") ==- 1 || email.indexOf(".") <= 1){
        $('#dispEmail').html("Email inválido");
        $("#btnCadastrar").prop('disabled', true);
         isOk();   
        return false;
   }
    
    if(email !== ""){
        $.ajax({
            url:"checkUsuarioEmail.php",
            method:"POST",
            data:{email: email},
            //dataType:"text",
            success:function(html){

               if( $.trim(html) === '<span class="text-danger">Este email já está em uso</span>' ){
                     
                     //$("#btnCadastrar").prop('disabled', true);
                     $('#dispEmail').html(html);
                     isOk();
                } else{

                     $('#btnCadastrar').prop('disabled', false);
                     $('#dispEmail').html(html);
              }

               
            }
        });

    } //else{

        //$('#dispEmail').text('Informe um email válido');
        //$("#btnCadastrar").prop('disabled', true);
   // }

}

function IsPasswordEqual(pwd){
    
    var senha = $("#InputSenha").val(); 
         
     if(pwd === "" && senha ===""){
         $("#btnCadastrar").prop('disabled', true);
         $("#dispConfirmPwd").text("");
         return false;
     }    
         
    if(pwd !== senha){
        //$("#btnCadastrar").prop('disabled', true);
        
        $("#dispConfirmPwd").html('<span class="text-danger"> SENHAS NÃO CONFEREM </span>');
        isOk();
        
    } else{
        $("#btnCadastrar").prop('disabled', false);
        $("#dispConfirmPwd").html('<span class="text-success"> SENHAS CONFEREM </span>');
    }
    
}

function isOk(){
    
    var nome  = $("#dispNome").val();
    var email = $("#dispEmail").val();
    var senha = $("dispConfirmPwd").val();
    
    if( nome  === '<span class="text-danger">Este nome já está em uso</span>'  ||
        email === '<span class="text-danger">Este email já está em uso</span>' ||
        senha === '<span class="text-danger"> SENHAS NÃO CONFEREM </span>'){
    
       $("#btnCadastrar").prop('disabled', true);
    }
    else{
        $('#btnCadastrar').prop('disabled', false);
    }
    
}