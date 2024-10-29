<div class="container mt-4">
    <img src="<?= BASE_URL ?>/assets/img/fondo.png" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Fondo">
        <div class="row">
            <?php

            $producto = [
                'nombre' => 'Tipo de evento ',
                'imagen' => BASE_URL .'/assets/img/logo.png'
            ];

            $cantidadReplicas = 6;

            for ($i = 0; $i < $cantidadReplicas; $i++) {
                
                $x = $i + 1;

                echo '<div class="col-md-4 mb-4">';
                echo '    <div class="card" style="width: 24rem;">';
                echo '        <img src="' . $producto['imagen'] . '" class="card-img-top" alt="Imagen del producto">';
                echo '        <div class="card-body">';
                echo '            <h5 class="card-title">' . $producto['nombre'] . $x . '</h5>';
                echo '        </div>';
                echo '        <div class="modal-footer p-4 ">';
                echo '          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalPaquete">Ver</button>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </div>
    </img>
</div>
<?php include 'app/view/components/modalRegistro.php';?>
<?php include 'app/view/components/modalPaquete.php';?>