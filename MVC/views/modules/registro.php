<h1>Registro de usuario</h1>
<form method="post" id="formulario" onsubmit="return validarRegistro()">
    <label id="labelNombre" for="usuario" class="col-form-label">Nombre :</label><br>
    <input type="text" class="form-control my-3" placeholder="maximo 6 caracteres" maxlength="6" name="usuario" id="usuario" requerid>
    <label id="labelPassword" for="password" class="col-form-label">Contrasena :</label><br>
    <input type="password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control my-3" placeholder="Minimo seis caracteres, incluir numeros y una mayuscula" maxlength="6" name="password" id="password"  required>
    <label id="labelEmail" for="email" class="col-form-label">Correo Electronico:</label><br>
    <input type="email" class="form-control my-3" placeholder="escriba correctamente su correo electronico" name="email" id="email" >

    <p><input type="checkbox" name="terminos" id="terminos" ><a href="#">Acepto Terminos</a> </p><br>
    <input type="submit" class="btn btn-danger" value="Enviar">
</form>
<?php
 $registro= new Controller();
 $registro->usuarioRegistroController();
if (isset($_GET["action"])) {
    # code...
    

    if ($_GET["action"]=="ok") {
     
        echo"REgistro Exitoso";
    }
}

?>
 <h2>never give up</h2>
