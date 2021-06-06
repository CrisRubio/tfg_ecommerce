<?php

function registrar_nuevo_usuario($table)
{
    global $pdo;

    $datos = $_REQUEST;
    if (count($_REQUEST) < 14) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO $table VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

    try { 
        $consult = $pdo -> prepare($query);
        $a = $consult->execute(array($_REQUEST['dni'],$_REQUEST['name'],$_REQUEST['surname'],$_REQUEST['email'],
        $_REQUEST['phone'],$_REQUEST['address'],$_REQUEST['number'],$_REQUEST['piso'],$_REQUEST['puerta'],
        $_REQUEST['provincia'],$_REQUEST['poblacion'],$_REQUEST['cp'],$_REQUEST['username'],$_REQUEST['pwd']));

        if (1>$a) echo "<h1> Inserción incorrecta </h1>";
        else {
            if ($_REQUEST['name'] == "admin"){
                $_SESSION["usuario"] = "admin";
            } else {
                $_SESSION["usuario"] = "normal";
            } 
            header("Location: index.php");
        }
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

?>