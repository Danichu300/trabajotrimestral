<?php

//Inicia sesion para poder usar session
session_start();

//require  establece que el código del archivo indicado/invocado es requerido
require_once("db/db.php");
require_once("controllers/productos_controller.php");
require_once("controllers/usuarios_controller.php");
require_once("controllers/categorias_controller.php");
require_once("controllers/brand_controller.php");
require_once("controllers/orderitem_controller.php");
require_once("controllers/order_controller.php");


if (isset($_GET['controller']) && isset($_GET['action']) ) {




  // Controller de productos
  if ($_GET['controller'] == "productos") {

    //cesta añair
    if($_GET['action'] == "cesta"){

      $pedido = new orderitem_controller();
      $pedido->anadircesta();

    }
    //Finalizar la cesta
    if ($_GET['action'] == "finCesta") {
      $controller = new orderitem_controller();
      $controller->finalizarcesta();

    }

    //Cesta
    if($_GET['action'] == "cestaok"){

      $controller = new productos_controller();
      $controller->cestaok();
    }

    //Vaciar carrito de la cesta
    if ($_GET['action'] == "vaciarCarrito") {
      $controller = new productos_controller();
      $controller->vaciarCarritoesta();

    }

    //Borrar la cesta
    if($_GET['action'] == "borrarcesta"){

      $controller = new productos_controller();
      $controller->borrarcesta();
    }

    //finalizar la cesta
    if($_GET['action'] == "finalizar"){

      $order = new order_controller();
      $order->crearOrden();

    }



    //Action para obtener el producto
    if ($_GET['action'] == "get_producto") {
      $ID= $_GET['ID'];
      $controller = new productos_controller();
      $PRODUCT= $controller->get_producto($ID);
      $controller->view_producto($PRODUCT);
    }

    //action para la vista de los productos
    if ($_GET['action'] == "view") {
      $controller = new productos_controller();
      $controller->view();

    }

    //action para insertar productos nuevos
    if ($_GET['action'] == "insert_productos") {
      $controller = new productos_controller();
      $controller->insert_productos();
    }



    //action para ver productos por categorias
    if ($_GET['action'] == "verProductosPorCategoria") {

      $controller = new productos_controller();
      $controller->verProductosPorCategoria();
    }

    //action para ver las categorias padre
    if ($_GET['action'] == "categoriasPadreView") {
      $controller = new productos_controller();
      $controller->categoriasPadreView();
    }

    //action para ver las categorias hija
    if ($_GET['action'] == "categoriasHijasView") {
      $controller = new productos_controller();
      $controller->categoriasHijasView();
    }

    //action para ver las marcas
    if ($_GET['action'] == "marcasView") {
      $controller = new productos_controller();
      $controller->marcasView();
    }

    //action para añadir productos
    if ($_GET['action'] == "add_productos") {
      $controller = new productos_controller();
      $controller->add_productos();

    }

    //action del buscador de productos
    if ($_GET['action'] == "search") {
      $valor = $_POST["buscador"];
      $controller = new productos_controller();
      $controller->search($valor);
    }



    //Action del filtro de producto por marca
    if($_GET['action'] == "fmarca"){

      $filPorMarca = new productos_controller();
      $filPorMarca->filPorMarca();

    }

    //Action del Filtro de producto por precio
    if($_GET['action'] == "fprecio"){

      $filPorMarca = new productos_controller();
      $filPorMarca->filPorPrecio();

    }

    //Vista sin base de datos de los productos
    if ($_GET['action'] == "verMonitores") {
      $controller = new productos_controller();
      $controller->verMonitores();
    }

    if ($_GET['action'] == "verTeclados") {
      $controller = new productos_controller();
      $controller->verTeclados();
    }

    if ($_GET['action'] == "verRatones") {
      $controller = new productos_controller();
      $controller->verRatones();
    }

    if ($_GET['action'] == "verProcesadores") {
      $controller = new productos_controller();
      $controller->verProcesadores();
    }

    if ($_GET['action'] == "verGraficas") {
      $controller = new productos_controller();
      $controller->verGraficas();
    }

    if ($_GET['action'] == "verRam") {
      $controller = new productos_controller();
      $controller->verRam();
    }

    if ($_GET['action'] == "verPBase") {
      $controller = new productos_controller();
      $controller->verPBase();
    }

    if ($_GET['action'] == "verPortatiles") {
      $controller = new productos_controller();
      $controller->verPortatiles();
    }

    if ($_GET['action'] == "verPCSobremesa") {
      $controller = new productos_controller();
      $controller->verPCSobremesa();
    }


  }



  // Conroller de usuarios
  if ($_GET['controller'] == "usuarios") {

    //action para añadir usuarios
    if ($_GET['action'] == "add") {
      $controller = new usuarios_controller();
      $controller->add();

    }
    //Action para insertar usuarios
    if ($_GET['action'] == "insert") {
      $controller = new usuarios_controller();
      $controller->insert();
    }

    //Action para hacer login
    if ($_GET['action'] == "login") {
      $controller = new usuarios_controller();
      $controller->login();
    }

    //Action para hacer logout
    if ($_GET['action'] == "logout") {
      $controller = new usuarios_controller();
      $controller->logout();
    }


  }

  // Controlador de categorias
  if ($_GET['controller'] == "categorias") {

    //Action para ver las categorias padre
    if ($_GET['action'] == "categoriasPadreView") {
      $controller = new categorias_controller();
      $controller->categoriasPadreView();
    }

    //Action para ver las categoria hija
    if ($_GET['action'] == "categoriasHijasView") {
      $controller = new categorias_controller();
      $controller->categoriasHijasView();
    }

    //Action para ver las categorias en el header
    if ($_GET['action'] == "categoriasHeaderView") {
      $controller = new categorias_controller();
      $controller->categoriasHeaderView();
    }

    //Action para añadir categorias
    if ($_GET['action'] == "add_categorias") {
      $controller = new categorias_controller();
      $controller->add_categorias();

    }

    //Action para insertar categorias
    if ($_GET['action'] == "insert_categorias") {
      $controller = new categorias_controller();
      $controller->insert_categorias();
    }

  }





  //Por defecto, si no te indica ninguna ruta, va a la vista de productos controller
} else {
  $controller = new productos_controller();
  $controller->view();
}
?>
