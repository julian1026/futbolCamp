<h1>ingresar</h1>
<form method="post" id="formulario">
    <input type="text" class="form-control my-3" placeholder="usuario" name="ingresoUsuario" requerid>
    <input type="password" class="form-control my-3" placeholder="password" name="ingresoPassword"  required>
    <input type="submit" class="btn btn-danger" value="Enviar">
</form>
<?php
 $registro= new Controller();
 $registro->usuarioIngresoController();
 if (isset($_GET["action"])) {
    # code...
    if ($_GET["action"]=="fallo") {
        echo"No tienes acceso al sistema";
    }
}
?>
 <h2>never give up</h2>
