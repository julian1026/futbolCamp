var usuario=document.querySelector("#usuario");
var contrasena=document.querySelector("#password");
var correo=document.querySelector("#email");
var terminos=document.getElementById("terminos");
var formulario=document.querySelector("#formulario");
console.log(terminos);
console.log(usuario);
// label 
var Lnombre=document.querySelector("#labelNombre");
var Lpassword=document.querySelector("#labelPassword");
var lbemail=document.querySelector("#labelEmeil");


function validarRegistro(){
    var user=usuario.value;
    var password=contrasena.value;
    var email=correo.value;
    var validar=terminos.value;
    
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
    var long=contrasena.length;
    var expresion=/^[a-zA-Z0-9]*$/;
    if (long<6) {
        Lpassword.innerHTML+="<br> escriba por favor mas de seis caracteres";
        return false;
    }if (!expresion.test(password)) {
        Lpassword.innerHTML+="<br>  no escriba caracteres especiales";
        return false;
    }
}

//validando email
if (email!="") {

    var expresion=/^[a-zA-Z0-9]*$/;
  if (!expresion.test(email)) {
        lbemail.innerHTML+="<br> verificar correo";
        return false;
    }
}
//validando chekbox

    if (validar!="1") {
        formulario.innerHTML+="<br> aceptar terminos y condicones";
        usuario=user;
        contrasena=password;
        correo=email;
        console.log(validar);
        return false;
        
    } 


return true;
}
