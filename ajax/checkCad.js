function checkNome(nome){
   if(nome === ""){
       $("#dispNome").text("Digite o seu nome!");
       $("#btnCadastrar").prop('disabled', true);
   }
   
   if(nome !== ""){
       $.ajax({
            url: "checkUsuarioNome.php",
            method: "POST",
            data: {nome: nome},
            success:function(html){
                if($.trim(html) === '0'){
                    $('#dispNome').html('<span class="text-danger">Este nome já está em uso</span>');
                    isOk();
                }
                else{
                    $('#dispNome').html('<span class="text-success">Nome diponível</span>');
                    $("#btnCadastrar").prop('disabled', false);
                }
            }   
       });
   }
   
}

function checkEmail(email){

   if(  email === "" || email.indexOf("@") === -1
        || email.indexOf("@") <= 0
        || email.indexOf(".") === - 1
        || email.indexOf(".") <= 1
        || email.indexOf(".com") === -1
        || email.indexOf(".com") <= 0)
    {
        $('#dispEmail').html("Email inválido");
        $("#btnCadastrar").prop('disabled', true);
         isOk();
         return false; //Evita que o código abaixo seja executado!
    }
    
    if(email !== ""){
        
        $.ajax({
            url:"checkUsuarioEmail.php",
            method:"POST",
            data:{email: email},
            //dataType:"text",
            success:function(html){
                
               if( $.trim(html) === '<span class="text-danger">Este email já está em uso</span>' ){                 
                     $('#dispEmail').html(html);
                     isOk();
                     
                } else{
                    $('#dispEmail').html(html);
                    $("#btnCadastrar").prop('disabled', false);
              }
            }
        });
        
    }
}


function IsPasswordEqual(pwd){
    
    var senha = $("#InputSenha").val(); 
         
     if(pwd === "" && senha ===""){
         
         $("#dispConfirmPwd").html("");
     }    
     
    if(pwd !== senha){
        $("#dispConfirmPwd").html('<span class="text-danger"> SENHAS NÃO CONFEREM </span>');
        isOk();
    }
    else{
        $("#dispConfirmPwd").html('<span class="text-success"> SENHAS CONFEREM </span>');
        $("#btnCadastrar").prop('disabled', false);
    }    
}

function isOk(){
    
    var nome  = $("#dispNome").html();
    var email = $("#dispEmail").html();
    var senha = $("#dispConfirmPwd").html();
    
    if(nome  === '<span class="text-danger">Este nome já está em uso</span>' 
        || email === '<span class="text-danger">Este email já está em uso</span>'
        || senha === '<span class="text-danger"> SENHAS NÃO CONFEREM </span>')
    {
       $("#btnCadastrar").prop('disabled', true);
    }
}