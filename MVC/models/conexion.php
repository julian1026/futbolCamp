k<?php
class Conexion{
    public function conectar(){
       /*
        $host="bpxbdl9p7tdbmziiit4l-mysql.services.clever-cloud.com";
        $dbname="bpxbdl9p7tdbmziiit4l";
        $user="ufwbl5522hla8atf";
        $contasena="BxxQmHjx90MMbnfgJepv"; 
        */ 

       
        $host="localhost";
        $dbname="cursophp";
        $user="root";
        $contasena="";


        $link= new PDO("mysql:host=$host;dbname=$dbname","$user",$contasena);
        return $link;
    }
    
}


?>