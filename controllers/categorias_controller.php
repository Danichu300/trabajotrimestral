<?php
//Llamada al modelo
require_once("models/categorias_model.php");


class categorias_controller {

function categoriasPadreView(){

  $categorias=new categorias_model();

  $datospadres=$categorias->get_categoriasPadre();

  $categorias=new categorias_model();

  $datoshijas=$categorias->get_categoriasHijas();

  require_once("views/productos_add.phtml");


}

function categoriasHijasView(){

  $categorias=new categorias_model();

  $datoshijas=$categorias->get_categoriasHijas();

  require_once("views/productos_add.phtml");


}
//categorias para el header
function categoriasHeaderView(){

  $categorias=new categorias_model();

  $datospadresHeader=$categorias->get_categoriasHeaderView();

  $categorias=new categorias_model();

  $datoshijas=$categorias->get_categoriasHijas();

  require_once("views/productos_add.phtml");


}

/**
 * Muestra pantalla para añadir productos
 * @return No
 */
function add_categorias() {

  $categorias=new categorias_model();//Coge las categorias  para el menu
  $datospadresHeader=$categorias->get_categoriasHeaderView();

  $categorias=new categorias_model();
  $datospadres=$categorias->get_categoriasPadre();  //Coge las categorias padre

  require_once("views/categorias_add.phtml");
}

/**
 * Inserta una nueva categoria
 * @return No
 */
function insert_categorias() {



    $categorias=new categorias_model();

    if (isset($_POST['insert_categorias'])) {
        $categorias->setName( $_POST['name'] );
        $categorias->setParentcategory( $_POST['parentcategory'] );


        $error = $categorias->insertar_categorias();

        if (!$error) {
            header( "Location: index.php");
        }
        else {
            echo $error;
        }
    }
}




}
?>
