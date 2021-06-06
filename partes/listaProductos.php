<main>
    <br><br><br>

    <h1 class="productos">PRODUCTOS</h1>

    <br>
    <div class="listaProductos">
        <ul class="list-group list-group-flush">
        <?php
            global $pdo;
            $table = "productos";
            $query = "SELECT * FROM  $table;";
            $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);

            if (is_array($rows)) {
                foreach ($rows as $row) {

                        $descripción='';
                        $image='';
                        $precio=0.0;

                        foreach ($row as $key => $val) {

                            if($key=="descripción"){
                                $descripción = $val;
                            } 
                            
                            if ($key=="image"){
                                $image = $val;
                            }

                            if($key=="precio"){
                                $precio = $val;
                            }
                        }

                        echo "<li class='list-group-item'> $descripción <div><img class='imagenProducto' src=$image></img></div>", "<div class='productoIndividual'> precio: ", $precio, "</div></li>";
                }
            }  
        ?>
        </ul>
    </div>

</main>
