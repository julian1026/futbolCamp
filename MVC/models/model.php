<?php

class enlacesPaginas{


    //recibe 
    public function enlacesPaginasmodel($enlacesModel){
        if ($enlacesModel=="ingresar" || $enlacesModel=="usuarios" || 
            $enlacesModel=="salir" || $enlacesModel=="editar") {
            # code...
            $module="views/modules/".$enlacesModel.".php";
        }
        elseif($enlacesModel=="registro"){
            $module="views/modules/registro.php";
        
        }elseif($enlacesModel=="ok"){
            $module="views/modules/ingresar.php";
        }elseif($enlacesModel=="fallo"){
            $module="views/modules/ingresar.php";
        
        }elseif($enlacesModel=="cambio"){
            $module="views/modules/usuarios.php";
        
        }else{
            $module="views/modules/registro.php";
        }
       return $module;
    }

}

?>