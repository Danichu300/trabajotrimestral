<?php
//Llamada al modelo
require_once("models/product_model.php");


class product_controller {




/**
 * Mostra llistat
 * @return No
 */
function view() {
  $PRODUCT=new product_model();

  //Uso metodo del modelo de product
  $datos=$PRODUCT->get_product();


  //Llamado a la vista: mostrar la pantalla
  require_once("views/product_view.phtml");
}

/**
 * Mostra imagen
 * @return No
 */
function get_imagen() {
  $PRODUCT=new product_model();

  //Uso metodo del modelo de product
  $imagen=$PRODUCT->obtener_imagen();

  //Llamado a la vista: mostrar la pantalla
  require_once("views/product_view.phtml");
}




}
?>
