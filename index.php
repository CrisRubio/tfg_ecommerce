<?php
    session_start();

    include(dirname(__FILE__)."/baseDeDatos/ejecutarSQL.php");
    $central = "";
    include(dirname(__FILE__)."/partes/header.php");
    include(dirname(__FILE__)."/partes/menu.php");
    include(dirname(__FILE__)."/baseDeDatos/conectarBD.php");
    include(dirname(__FILE__)."/baseDeDatos/iniciar_sesion_usuario.php");
    include(dirname(__FILE__)."/baseDeDatos/registrar_nuevo_usuario.php");

    if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
    else $action = "home";

    switch ($action) {
        case "home":
            $central = "/partes/body.php";
            break;
        case "iniciar_sesion":
            $central = "/partes/iniciarSesion.php";
            break;
        case "do_login":
            $central = iniciar_sesion_usuario("usuarios"); //tabla usuarios
            break;
        case "registrar_usuario":
            $central = "/partes/registroUsuario.php";
            break;
        case "new_user":
            $central = registrar_nuevo_usuario("usuarios"); //tabla usuarios
            break;
        case "ver_productos":
            $central = "/partes/listaProductos.php";
            break;
        case "cerrar_sesion":
            session_destroy();
            header("Location: index.php");
            break;
        default:
            $data["error"] = "Accion No permitida";
            $central = "/partes/body.php";
    }

    if ($central <> "") include(dirname(__FILE__).$central);
    include(dirname(__FILE__)."/partes/footer.php");

?>