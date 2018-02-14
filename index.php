<?php
session_start();
require_once("db/db.php");



require_once("controllers/productos_controller.php");
require_once("controllers/usuarios_controller.php");
require_once("controllers/categorias_controller.php");
 require_once("controllers/cart_controller.php");


if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

if (isset($_GET['controller']) && isset($_GET['action']) ) {

// carrito

if ($_GET['controller'] == "cart") {
    $cart = new cart_controller();
    if ($_GET['action'] == "addToCart") {

         $num = !empty($_GET['numAddUnits']) ? $_GET['numAddUnits'] : 1;
        $products = [
            "id"=>$_GET['product'],
            "numAddUnits"=>$num,
            "name"=>$_GET['productName'],
            "price"=>$_GET['productPrice'],
            "image"=>$_GET['productImage'],
            "stock"=>$_GET['productStock']
            ];
        $cart->addToCart($products);
    }
    if ($_GET['action'] == "deleteFromCart") {
        $product = $_GET['product'];
        $cart->deleteFromCart($product);
    }
    header('Location: index.php');
}



  // productos
  if ($_GET['controller'] == "productos") {

    if ($_GET['action'] == "get_producto") {
      $ID= $_GET['ID'];
      $controller = new productos_controller();
      $PRODUCT= $controller->get_producto($ID);
      $controller->view_producto($PRODUCT);
    }

    if ($_GET['action'] == "view") {
      $controller = new productos_controller();
      $controller->view();

    }

    if ($_GET['action'] == "insert_productos") {
      $controller = new productos_controller();
      $controller->insert_productos();
    }

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

    //Ver productos por categorias
    if ($_GET['action'] == "verProductosPorCategoria") {

  $controller = new productos_controller();
      $controller->verProductosPorCategoria();
    }

    //categorias
    if ($_GET['action'] == "categoriasPadreView") {
      $controller = new productos_controller();
      $controller->categoriasPadreView();
    }

    if ($_GET['action'] == "categoriasHijasView") {
      $controller = new productos_controller();
      $controller->categoriasHijasView();
    }

    //marcas
    if ($_GET['action'] == "marcasView") {
      $controller = new productos_controller();
      $controller->marcasView();
    }

    //añadir productos
    if ($_GET['action'] == "add_productos") {
      $controller = new productos_controller();
      $controller->add_productos();

    }

    //Buscador
    if ($_GET['action'] == "search") {
        $valor = $_POST["buscador"];
        $controller = new productos_controller();
        $controller->search($valor);
    }

    //carrito mal

    // if ($_GET['action'] == "add_producto_carrito") {
    //     $controller = new productos_controller();
    //     $controller-> add_producto_carrito();
    // }



  }



  // Usuarios
  if ($_GET['controller'] == "usuarios") {


    if ($_GET['action'] == "add") {
      $controller = new usuarios_controller();
      $controller->add();

    }

    if ($_GET['action'] == "insert") {
      $controller = new usuarios_controller();
      $controller->insert();
    }

    if ($_GET['action'] == "login") {
      $controller = new usuarios_controller();
      $controller->login();
    }

    if ($_GET['action'] == "logout") {
      $controller = new usuarios_controller();
      $controller->logout();
    }


  }

  // categorias

  if ($_GET['controller'] == "categorias") {

    if ($_GET['action'] == "categoriasPadreView") {
      $controller = new categorias_controller();
      $controller->categoriasPadreView();
    }

    if ($_GET['action'] == "categoriasHijasView") {
      $controller = new categorias_controller();
      $controller->categoriasHijasView();
    }

    if ($_GET['action'] == "categoriasHeaderView") {
      $controller = new categorias_controller();
      $controller->categoriasHeaderView();
    }

    if ($_GET['action'] == "add_categorias") {
      $controller = new categorias_controller();
      $controller->add_categorias();

    }

    if ($_GET['action'] == "insert_categorias") {
      $controller = new categorias_controller();
      $controller->insert_categorias();
    }

  }






} else {
  $controller = new productos_controller();
  $controller->view();
}
?>
