<?php
    $paises = ['ar','br','co','jp','ch','in'];
    function valida_campoNecessario($campo){
    if( !isset($campo) || ($campo == '')){
            echo("retornando $campo");
            return false;
        } else {
            return true;
        }
    }

    function valida_pais($p){
        global $paises;
        if (!isset($p) || !in_array($p,$paises)){
            return false;
        } else {
            return true;
        }
    }


?>