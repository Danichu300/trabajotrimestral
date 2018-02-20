<?php

//Llamada al modelo
require_once("models/order_model.php");
require_once("models/orderitem_model.php");

class order_controller {

//Crea la orden/pedido
  function crearOrden(){

  $orden = new order_model();
  $ordenitem = new orderitem_model();

  $conclusion=$orden->cesta();


  }

}

?>
