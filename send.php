<?php

extract($_POST); 

if (isset($nombre)) {

    if(strlen(trim($nombre)) === 0) {

        echo "Error: el campo 'Nombre' no fue completado.";
    } else {
        if (isset($apellidos)) {
            echo "Hola $nombre $apellidos con $edad años de edad, sexo $sexo con correo electrónico $email y teléfono $telefono";
        } else {
            echo "Hola $nombre";
        }
    }
    


} else {

    die('Permisos insuficientes.');
}


echo '<a href="javascript:history.back(-1)">Volver</a>';

?>