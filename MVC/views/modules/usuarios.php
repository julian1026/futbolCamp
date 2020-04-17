
<?php
session_start();
if (!$_SESSION["validar"]) {
  # code...
  header("location:index.php?action=ingresar");
  exit();//salir del metodo de forma segura
}
?>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">usuario</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
        <?php
        $control=new Controller();
        $control->vistaUsuariosController();
        $control->borraUsuarioController();
        ?>
    
  </tbody>
</table>

<?php
if (isset($_GET["action"])) {
  # code...
  if ($_GET["action"]=="cambio") {
      echo"cambio Exitoso";
  }
}
?>