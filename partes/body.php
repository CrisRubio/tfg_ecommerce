<body>
<br>
<br>
<br>
<h1 class="body">¡BIENVENID@ A ECOMMERCE!</h1>
<br>
<br>

<h2 class="bodyHome">SERVICIOS</h3>
<table class="home">
    <tr>
        <td>
            <img class="imgHome" src="./img/productos.png" id="productos" alt="productos"/>
        </td>
        <td>
            <img class="imgHome" src="./img/registro.png" id="registrarse" alt="registrarse"/>
        </td>
        <td>
            <img class="imgHome" src="./img/login.PNG" id="inicioSesion" alt="iniciar sesión"/>
        </td>
    </tr>
    <tr>
        <?php     
            if (!isset($_SESSION['usuario'])){
                echo '<td><a href="?action=ver_productos" target="_blank">Productos</a></td>';
                echo '<td>Hacerse socio</td>';
                echo '<td>Iniciar sesión</td>';
            }
            elseif (isset($_SESSION['usuario'])){
                echo '<td><a href="?action=ver_productos" target="_blank">Productos</a></td>';
                echo '<td><a href="?action=registrar_usuario" target="_blank">Hacerse socio</a></td>';
                echo '<td><a href="?action=iniciar_sesion" target="_blank">Iniciar sesión</a></td>';
            }
        ?>
    </tr>
</table>
<br>
<br>