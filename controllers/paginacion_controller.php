
<?php
require_once 'models/paginacion_model.php';

$conexion = new mysqli("localhost", "user", "user", "store013");
$conexion->query("SET NAMES 'utf8'");

//Te coge las paginas
$pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;

//Crea los enlaces
$enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 5;

//Consulta para obtener todos los productos esponsorizados
$consulta      = "SELECT * FROM PRODUCT where SPONSORED = 'Y'";

$paginar  = new Paginar($conexion, $consulta);
$resultados    = $paginar->getDatos($pagina);
?>

<ul class="pagination">
  <?php echo $paginar->crearLinks( $enlaces); ?>
</ul>
