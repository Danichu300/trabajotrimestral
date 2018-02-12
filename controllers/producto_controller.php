<?php
//Llamada al modelo
require_once("models/producto_model.php");


class producto_controller {




  /**
   * Elimina una fila de la taula
   * @return No
   */
  function get_producto($id) {

      $PRODUCT=new producto_model();

      $ID = $_GET['ID'];

      $error = $PRODUCT->get_producto($ID);

      return $error;
    }


function view_producto($PRODUCT){
  require_once ('views/producto_view.phtml');
}


// //Muestra la imagen del producto
//
// function get_imagen($id) {
//
//     $PRODUCT=new producto_model();
//
//     $ID = $_GET['ID'];
//
//     $error = $PRODUCT->get_imagen($ID);
//
//     return $error;
//   }
//
//   function view_productoImagen($PRODUCT){
//     require_once ('views/producto_view.phtml');
//   }





}
?>
