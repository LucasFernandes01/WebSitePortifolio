function validaForm(){
    var email = document.getElementById("InputEmail").value;
    var senha = document.getElementById("InputSenha").value;
    var confirmaSenha = document.getElementById("InputConfirmaSenha").value;

    //VERIFICANDO SE OS CAMPOS ESTAO VAZIOS
    if(email === "" && senha === "" && confirmaSenha === ""){
        alert("PREENCHA TODOS OS CAMPOS");
        //document.getElementById("form-cadastro").reset();
        return false;
    }
    
     //VERIFICANDO SE O EMAIL É VÁLIDO
    if( email.indexOf("@") === -1 || email.indexOf(".") === -1 ){
        alert("DIGITE UM EMAIL VÁLIDO");
        //document.getElementById("form-cadastro").reset();
        
        return false;
    }
    
        if(senha !== confirmaSenha){
        alert("SENHAS DIFERENTES! DIGITE A MESMA UMA SENHA E CONFIRME-A");
        //document.getElementById("InputSenha").reset();
        //document.getElementById("InputConfirmaSenha").reset();
        
        return false;
    }
                      
}