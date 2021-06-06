<?php

function iniciar_sesion_usuario($table)
{
    global $pdo;


    $datos = $_REQUEST;
    
    if (count($_REQUEST) < 2) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }

    $query = "SELECT * FROM  $table;";

    try {

        $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        $count = 0;
        $nombre = "";
        
        if (is_array($rows)) {
            foreach ($rows as $row) {
                foreach ($row as $key => $val) {

                    if($key=="usuario" && $_REQUEST['username']==$val){
                        $count = 1;
                        $nombre = $val;
                    } 
                    
                    if ($key=="contraseña" && $_REQUEST['pwd']==$val){
                        $count = 2;
                    }
                }
            }
        }

        if($count==2){
            if($nombre == "admin"){
                $_SESSION["usuario"] = "admin";
            } else {
                $_SESSION["usuario"] = "normal";
                echo "<script type='text/javascript'> alert('Se ha iniciado sesión correctamente');window.location.href='index.php'</script>";
            }            
            
        } else {
            echo "<script type='text/javascript'> alert('No se ha iniciado sesión correctamente');window.location.href='index.php'</script>";
        }

    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

?>