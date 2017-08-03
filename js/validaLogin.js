function validaLogin(){
    var email = document.getElementById("InputEmail").value;
    var senha = document.getElementById("InputSenha").value;
    
    //PARA CAMPOS VAZIOS
     if(email === "" && senha === ""){
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
}