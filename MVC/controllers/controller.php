<?php


class Controller{
 
    // llamada a la plantilla
    public function callTemplate(){
        include "views/plantilla.php";
    }

    #interaccion con el usuario

    public function enlacesPaginasController(){

      if (isset($_GET["action"])) {
        $enlacesController= $_GET["action"];
      }else{
        $enlacesController="registro";
      }
      $respuesta=enlacesPaginas::enlacesPaginasModel($enlacesController);
      include $respuesta;
      
    }

    //Registro de Usuario
    public function usuarioRegistroController(){
      
      if (isset($_POST["usuario"])) {
        # code...
      $usuario= $_POST["usuario"];
      $password= $_POST["password"];
      $email=  $_POST["email"];
        $datosController=array("usuario"=>$usuario,"password"=>$password,"email"=>$email);

        $repuesta=Usuarios::usuarioRegistroModel($datosController,"usuarios");
        if ($repuesta=="success") {
          # code...
          header("location:index.php?action=ok");
        }else{
           
           header("location:index.php");
        }
      }
    }

    public function usuarioIngresoController(){
       if (isset($_POST["ingresoUsuario"])) {

        $usuario= $_POST["ingresoUsuario"];
        $password= $_POST["ingresoPassword"];
         echo "Registro Exitoso";
        $datosController=array("usuario"=>$usuario,"password"=>$password);
        $respuesta=Usuarios::usuarioIngresoModel($datosController,"usuarios");
        if ($respuesta["usuario"]==$usuario && $respuesta["password"]==$password) {
          # code...
          session_start();
          $_SESSION["validar"]=true;
          header("location:index.php?action=usuarios");
        }else{
            header("location:index.php?action=fallo");
        }

       }
    }

    public function vistaUsuariosController(){
      $respuesta=Usuarios::vistaUsuariosModel("usuarios");
      
      foreach ($respuesta as $row => $value) {
        echo'<tr>
                <td>'.$value["usuario"].'</td>
                <td>'.$value["password"].'</td>
                <td>'.$value["email"].'</td>
                <td><a href="index.php?action=editar&id='.$value["id"].'"><button type="button" class="btn btn-success">editar</button></a></td>
                <td><a href="index.php?action=usuarios&idB='.$value["id"].'"><button type="button" class="btn btn-danger">eliminar</button></a></td>
                </tr>';
      }
    }

    //funcion para editar datos de un usuario
    public function editarUsuarioController(){
      $id=$_GET["id"];
      $editar=Usuarios::editarUsuarioModel($id,"usuarios");
      echo '
      <input type="hidden" class="form-control my-3" value="'.$editar["id"].'" name="idEditar">
      <input type="text" class="form-control my-3" value="'.$editar["usuario"].'" name="usuarioEditar" requerid>
      <input type="text" class="form-control my-3" value="'.$editar["password"].'" name="passwordEditar"  required>
     <input type="email" class="form-control my-3" value="'.$editar["email"].'" name="emailEditar" >
      <input type="submit" class="btn btn-danger" value="Actualizar">
      ';
    }

    //actualizar usuario
    public function actualizarUsuarioController(){
      if (isset($_POST["usuarioEditar"])) {
        # code...
        $id=$_POST["idEditar"];
        $usuario= $_POST["usuarioEditar"];
        $password= $_POST["passwordEditar"];
        $email=  $_POST["emailEditar"];
         
        $datos=array("id"=>$id,"usuario"=>$usuario,"password"=>$password,"email"=>$email);
        $actualizarUser=Usuarios::actualizarUsuarioModel($datos,"usuarios");
        if ($actualizarUser=="success") {
          # code...
          header("location:index.php?action=cambio");
        }else{
         echo "error";
        }
      }
    }
    #eliminar usuario
      public function borraUsuarioController()
      {
      
        if (isset($_GET["idB"])) {
          $datos=$_GET["idB"];
          echo $datos;
          $deleteUser=Usuarios::borrarUsuarioModel($datos,"usuarios");
          echo $deleteUser;
          if ($deleteUser=="success")
              
              {
                # code...
                header("location:index.php?action=usuarios");
              }
            
         }
      }
}

#comenzar con videos de session 33
?>