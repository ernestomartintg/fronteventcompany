<div class="modal fade" id="ModalPaquete" tabindex="-1" aria-labelledby="registerModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content bg-dark bg-opacity-95">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="registerModalLabel">Registro de Usuario</h5> -->
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="container mt-4">
            <!-- <img src="<?= BASE_URL ?>/assets/img/fondo.png" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Fondo"> -->
                <div class="row">
                    <?php

                    $producto = [
                        'nombre' => 'Paquete ',
                        'descripcion' => 'Descripción del Paquete
                        <br>-torta<br>-hora loca<br>-Canciones de Plim Plim<br>-Carteles Pocoyo',
                        'proveedor' => 'Proveedor ',
                        'precio' => '19.99',
                        'imagen' => BASE_URL .'/assets/img/logo.png',
                        'calificacion' => '★★★★☆'
                    ];

                    $cantidadReplicas = 6;

                    for ($i = 0; $i < $cantidadReplicas; $i++) {
                        
                        $x = $i + 1;
                        $Precio = round($producto['precio'] * mt_rand(10, 100) / 10 , 2);

                        echo '<div class="col-md-4 mb-4">';
                        echo '    <div class="card">';
                        echo '        <img src="' . $producto['imagen'] . '" class="card-img-top" alt="Imagen del producto">';
                        echo '        <div class="card-body">';
                        echo '            <h5 class="card-title">' . $producto['nombre'] . $x . '</h5>';
                        echo '            <p class="card-text">' . $producto['descripcion'] . '</p>';
                        echo '            <p class="text-muted mb-1"><small><b>Proveedor: ' . $producto['proveedor'] . $x . '</b></small></p>';
                        echo '            <h6 class="text-success mb-3">$' . $Precio . '</h6>';
                        echo '            <p class="text-warning mb-3"><b>Calificación: ' . $producto['calificacion'] . '</b></p>';
                        echo '            <a href="#" class="btn btn-primary">Comprar ahora</a>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </img>
        </div>
      </div>
    </div>
  </div>
</div>

