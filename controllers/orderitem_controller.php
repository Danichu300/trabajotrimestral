<?php
//Llamada al modelo
require_once("models/orderitem_model.php");

$cestaCompra = array();

class orderitem_controller {

/**
 * Muestra pantalla 'orderitem'
 * @return No
 */

  public function view() {
    $producto=new orderitem_model();

    //Uso metodo del modelo de personas
    $datos=$producto->get_orderitem();

  }

//Función para añadir cosas a la cesta
  public function anadircesta(){

    $cesta = new orderitem_model();

    $id = $_GET["id"];
    $unidades = $_GET["uni"];

    $cestaCompra = array ($id, $unidades);
    $_SESSION["cesta"][] = $cestaCompra;

    header('location: index.php?controller=productos&action=view');

  }


//Función para finalizar la cesta
  public function finalizarcesta(){

    $cestaFinal = new orderitem_model();

    $cestaFinafinCesta = $cestaFinal->finalizarcesta1();

  }

}
?>
