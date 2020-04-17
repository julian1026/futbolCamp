<?php

require_once "conexion.php";
class Usuarios extends Conexion{

    #registro de usuario
    public function usuarioRegistroModel($datosModel,$tabla){
       
        $registrar=Conexion::conectar()->prepare("INSERT INTO $tabla ( usuario, password, email)
         VALUES (:usuario,:password,:email)");

         $registrar->bindParam(":usuario",$datosModel["usuario"], PDO::PARAM_STR);
         $registrar->bindParam(":password",$datosModel["password"], PDO::PARAM_STR);
         $registrar->bindParam(":email",$datosModel["email"], PDO::PARAM_STR);
       
         if ($registrar->execute()) {
             return "success";
         }else{
             return "error";
         }
         $registrar->close();
    }

    public function usuarioIngresoModel($datosModel,$tabla){
        $ingreso=Conexion::conectar()->prepare("SELECT usuario,password FROM $tabla WHERE usuario=:usuario");
        $ingreso->bindParam(":usuario",$datosModel["usuario"]);

        $ingreso->execute();
        #fetch: obtiene una fila(registro) 
        return $ingreso->fetch();
        $ingreso->close();
     
    }
    public function vistaUsuariosModel($tabla){
    $mostrar=Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $mostrar->execute();
    return $mostrar->fetchAll();// se utliza para obtener un conjunto de registros
    $mostrar->close(); //el metodo close me permite salir de forma segura, sin dejar grietas en el codigo.
    }

    //funcion para editar datos

    public function editarUsuarioModel($id,$tabla){
        $editar=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id=:id");
        $editar->bindParam(":id",$id, PDO::PARAM_INT);
        $editar->execute();
        return $editar->fetch();
    }

       #actualizar usuarios
       public function actualizarUsuarioModel($datos,$tabla){
         $actualizar=Conexion::conectar()->prepare("UPDATE $tabla SET usuario=:usuario,
         password=:password, email=:email WHERE id=:id");

        $actualizar->bindParam(":usuario",$datos["usuario"],PDO::PARAM_STR);
        $actualizar->bindParam(":password",$datos["password"],PDO::PARAM_STR);
        $actualizar->bindParam(":email",$datos["email"],PDO::PARAM_STR);
        $actualizar->bindParam(":id",$datos["id"],PDO::PARAM_INT);
        
        if ($actualizar->execute()) {
            return "success";
        }else{
            return "error";
        }
        $actualizar->close();
       }
     #eliminar usuario

     public function borrarUsuarioModel($dato,$tabla){
        $eliminar=Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
        $eliminar->bindParam(":id",$dato,PDO::PARAM_INT);
        
        if ($eliminar->execute()) {
            return "success";
        }else{
            return "error";
        }
        $eliminar->close();
       }  

}

?>