<?php

include_once '../configuraciones/bd.php';
$conexionBD = BD:: crearInstancia();

$id = isset($_POST['id'])?$_POST['id']:'';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$caballo=isset($_POST['caballo'])?$_POST['caballo']:'';
$derribos=isset($_POST['derribos'])?$_POST['derribos']:'';
$desobediencias=isset($_POST['desobediencias'])?$_POST['desobediencias']:'';
$puntos=isset($_POST['puntos'])?$_POST['puntos']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion!=''){

    switch ($accion){
        case'agregar' :
            $puntos = $derribos *4 + $desobediencias*4;
            $sql ="INSERT INTO participantes (nombre, caballo, derribos,desobediencias,puntos) VALUES ('$nombre', '$caballo','$derribos','$desobediencias','$puntos')";
            $consulta = $conexionBD->prepare($sql);
            $consulta->execute();
            $nombre ='';
            $caballo = '';
            $derribos = '';
            $puntos = '' ;
            $id = '' ;    
            $desobediencias = '' ;  
        break;

        case'editar' :
            $puntos = $derribos *4 + $desobediencias*4;
            $sql = "UPDATE participantes SET nombre ='$nombre',caballo ='$caballo',derribos ='$derribos', desobediencias ='$desobediencias', puntos = '$puntos' WHERE id= '$id'";
            $consulta = $conexionBD->prepare($sql);
            $consulta->execute();
            $nombre ='';
            $caballo = '';
            $derribos = '';
            $puntos = '' ;
            $id = '' ; 
            $desobediencias = '' ;  
        break;
        case'borrar' :
            
            $sql = "DELETE FROM participantes WHERE id ='$id' ";
            $consulta = $conexionBD->prepare($sql);
            $consulta->execute();
            $nombre ='';
            $caballo = '';
            $derribos = '';
            $puntos = '' ;
            $desobediencias = '' ; 
              
        break;
        case 'Seleccionar':
            $sql = "SELECT * FROM participantes WHERE id = '$id' ";
            $consulta=$conexionBD->prepare($sql);
            $consulta->execute();

            $participante = $consulta->fetch(PDO::FETCH_ASSOC);
            $nombre = $participante['nombre'];
            $caballo = $participante['caballo'];
            $derribos =$participante['derribos'];
            $puntos =$participante['puntos'];
            $id = $participante['id'];
            $desobediencias = $participante['desobediencias'];
            
        
        break;
        
    }   

}

$consulta = $conexionBD ->prepare("SELECT * FROM  participantes ORDER BY participantes.puntos asc");
$consulta->execute();
$listaParticipantes = $consulta->fetchAll();


?>