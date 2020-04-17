var usuario=document.querySelector("#usuario");
var contrasena=document.querySelector("#password");
var correo=document.querySelector("#email");

// label id
var Lnombre=document.querySelector("#labelNombre");
var Lpassword=document.querySelector("#labelPassword");

function validarRegistro(){
    var user=usuario.value;
    var password=contrasena.value;
    var email=correo.value;
// validar formulario

//validando usuario
if (user!="") {
    var longitud=user.length;
    var expresion=/^[a-zA-Z0-9]*$/;
    if (longitud>6) {
        Lnombre.innerHTML+="<br> escriba por favor menos de 6 caracteres";

        return false;
    }
    if (!expresion.test(user)) {
        Lnombre.innerHTML+="<br> caracteres especiales no se admiten";

        return false;
    }
}
//validando password
if (password!="") {
    var long=contrasena.value;
    var expresion=/^[a-zA-Z0-9]*$/;
    if (long<6) {
        Lpassword.innerHTML+="<br> escriba por favor mas de seis caracteres";
        return false;
    }if (!expresion.test(password)) {
        Lpassword.innerHTML+="<br>  no escriba caracteres especiales";
        return false;
    }
}

return true;
    
}
