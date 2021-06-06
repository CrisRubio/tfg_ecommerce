<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav">

        <!--Home-->
        <a class="navbar-brand" href="?action=home">
            <img src="img/logo.PNG" alt="Logo" width="190px">
        </a>
        
        <!--Lista de productos-->
        <li class="nav-item">
            <a class="nav-link" href="?action=ver_productos">Productos</a>
        </li>

        <?php     
            if (!isset($_SESSION['usuario'])){
                //Iniciar sesión
                echo '<li class="nav-item"><a class="nav-link" href="?action=iniciar_sesion">Iniciar sesión</a></li>';
                //Registrarse
                echo '<li class="nav-item"><a class="nav-link" href="?action=registrar_usuario">Registrarse</a></li>';
            }
            elseif (isset($_SESSION['usuario']) and $_SESSION['usuario'] == 'admin'){
                //Registrar producto
                echo '<li class="nav-item"><a class="nav-link" href="?action=registrar_producto">Registrar Producto</a></li>';
            }
            elseif (isset($_SESSION['usuario'])){
                //Comprar productos
                echo '<li class="nav-item"><a class="nav-link" href="?action=ver_cesta">Cesta de Compra</a></li>';
                //Cerrar sesión
                echo '<li class="nav-item"><a class="nav-link" href="?action=cerrar_sesion">Cerrar sesión</a></li>';
            }
        ?>
    </ul>
</nav>