
<?php
    require_once 'models/paginacion_model.php';

    $conexion = new mysqli("localhost", "user", "user", "store013");
    $conexion->query("SET NAMES 'utf8'");

    $pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 5;
    $consulta      = "SELECT * FROM PRODUCT where SPONSORED = 'Y'";

    $paginar  = new Paginar($conexion, $consulta);
    $resultados    = $paginar->getDatos($pagina);
?>

                    <ul class="pagination">
                        <?php echo $paginar->crearLinks( $enlaces); ?>
                    </ul>
