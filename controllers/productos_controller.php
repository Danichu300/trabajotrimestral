<?php
//Llamada al modelo
require_once("models/productos_model.php");
require_once("models/brand_model.php");


class productos_controller {

  /**
  * Obtiene un producto por su id
  *
  */
  function get_producto($id) {

    $PRODUCT=new productos_model();

    $ID = $_GET['ID'];

    $error = $PRODUCT->get_producto($ID);

    return $error;
  }

//Muestra los productos
  function view_producto($PRODUCT){
    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();
    require_once ('views/producto_view.phtml');
  }


  /**
  * Vista de productos
  * @return No
  */
  function view() {



    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();

    $brand = new brand_model();//Coge el filtro
    $marcas = $brand->get_brand();

    $PRODUCT=new productos_model();

    //Uso metodo del modelo de product
    $datos=$PRODUCT->get_product();

    //Uso metodo del modelo de product
    $data_carousel = $PRODUCT->get_carrousel();


    //Llamado a la vista: mostrar la pantalla product, que es la misma que producto_view, solo que se le añade carrusel
    require_once("views/product_view.phtml");
  }



  //Ver productos por categorias
  function verProductosPorCategoria() {


    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();

    $productos=new productos_model();



    //Uso metodo del modelo de product
    $datos=$productos->get_ProductosPorCategoria();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  // ver categorias padres e hijas
  function categoriasPadreView(){

    $productos=new productos_model();

    $datospadres=$productos->get_categoriasPadre();

    $productos=new productos_model();

    $datoshijas=$productos->get_categoriasHijas();

    require_once("views/productos_add.phtml");


  }

//Ver categorias hijas
  function categoriasHijasView(){

    $productos=new productos_model();
    $datoshijas=$productos->get_categoriasHijas();

    require_once("views/productos_add.phtml");

  }

  //para ver las marcas
  function marcasView(){

    $productos=new productos_model();
    $datosmarcas=$productos->get_marcasView();

    require_once("views/productos_add.phtml");

  }

  /**
  * Muestra pantalla para añadir productos
  * @return No
  */
  function add_productos() {


    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();

    $productos=new productos_model();
    $datoshijas=$productos->get_categoriasHijas();//coge las categorias hijas

    $productos=new productos_model();
    $datosmarcas=$productos->get_marcasView(); //Coge las marcas

    require_once("views/productos_add.phtml");
  }

  /**
  * Inserta un nuevo producto
  * @return No
  */
  function insert_productos() {
    $productos=new productos_model();
    if (isset($_POST['insert_productos'])) {

      $productos->setCategory( $_POST['category'] );
      // $productos->setSponsorizado( $_POST['sponsorizado'] );
      $productos->setBrand( $_POST['brand'] );
      $productos->setPrice( $_POST['price'] );
      $productos->setStock( $_POST['stock'] );
      $productos->setNombre( $_POST['nombre'] );
      $productos->setDescorta( $_POST['descorta'] );
      $productos->setDeslarga( $_POST['deslarga'] );

      $error = $productos->insertar_productos();

      if (!$error) {

        header( "Location: index.php");
      }
      else {
        echo $error;
      }
    }
  }

  //Buscador
  function search($valor) {

    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();

    $productos = new productos_model();
    $datos = $productos->search($valor);

    require_once("views/productos_view.phtml");
  }


  //filtro por marca

  function filPorMarca(){

    $producto = new productos_model();
    $brand = new brand_model();
    $categorias = new categorias_model();
    $datos = $producto->get_Marca();
    $marcas = $brand->get_brand();
    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();


    require_once("views/productos_view.phtml");

  }

//Filtro por precio
  function filPorPrecio(){


    $producto = new productos_model();
    $brand = new brand_model();
    $categorias = new categorias_model();
    $datos = $producto->get_Dinero();
    $marcas = $brand->get_brand();
    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();

    require_once("views/productos_view.phtml");

  }
//Cesta
  function cestaok(){
    $categorias=new categorias_model();//Coge las categorias padre para el menu
    $datospadresHeader=$categorias->get_categoriasHeaderView();


  $cesta2 = new productos_model();
  $cesta21 = $cesta2->get_cesta();
  $user1 = new usuarios_model();
  $usuarioactuafinCesta = $user1->buscar_usuarios();

  require_once("views/cesta_view.phtml");

}

//Borra una parte de la cesta
function borrarcesta(){

  $bcesta = new productos_model();
  $borrarcesta = $bcesta->borrar_cesta();

}

function vaciarCarritoesta(){

    $producto=new productos_model();
    $cestaVacia=$producto->vaciarCesta();

    require_once("views/cesta_view.phtml");

  }

//insertar productos a la compra
  function aCompra(){

  $administrarCompra = new productos_model();
  $administrarCompra->setName($_POST["aProducto"]);
  $administrarCompra->setPrice($_POST["aPrice"]);
  $administrarCompra->setStock($_POST["aStock"]);
  $administrarCompra->setSponsored($_POST["aSponsored"]);
  $administrarCompra->setShortdescription($_POST["aDP"]);
  $administrarCompra->setLongdescription($_POST["ADG"]);
  $administrarCompra->setBrand($_POST["aBrand"]);
  $administrarCompra->setCategory($_POST["aCategora"]);
  $afilPorPrecio = $administrarCompra->aCompra();

  }


  /**
  * Mostra llistat monitores
  * @return No
  */
  function verMonitores() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_monitores();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat teclados
  * @return No
  */
  function verTeclados() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_Teclados();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat ratones
  * @return No
  */
  function verRatones() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_Ratones();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat procesadores
  * @return No
  */
  function verProcesadores() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_Procesadores();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat Gráficas
  * @return No
  */

  function verGraficas() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_Graficas();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat Memorias RAM
  * @return No
  */

  function verRam() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_Ram();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat Placas Base
  * @return No
  */

  function verPBase() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_PBase();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat Portatiles
  * @return No
  */

  function verPortatiles() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_Portatiles();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  /**
  * Mostra llistat PC Sobremesa
  * @return No
  */

  function verPCSobremesa() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_PCSobremesa();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }


}
?>
