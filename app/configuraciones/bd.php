<?php

class BD{

    public static $instancia = null;
    public static function crearinstancia(){

        if(!isset( self::$instancia)){

            $opciones[PdO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia =  new PDO('mysql:host=localhost;dbname=aplicacion','root','',$opciones);
            
        }
        return self::$instancia;
    }


}

?> 