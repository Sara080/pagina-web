<?php
//configuracion para acceder ala BD
function conexionConPHP(){
    $host ='localhost';
    $user='root';
    $contrasenia='';
    $bd='miformulario2';
        $conectar=mysqli_connect($host,$user,$contrasenia,$bd); 
        mysqli_set_charset( $conectar,"utf8"); //sirve para poder visualizar las tildes
        return $conectar;
}
                                                            /*  .-.-.-.-.-.-.-.-.-.-.-.-.Nota.-.-.-.-.-.-.-.-.-.-.-.-.
                                                                        Estos datos se obtienen en Workbench 
                                                                        En la pestaña Server/ClientConnections 
                                                            */
?>