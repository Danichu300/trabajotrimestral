<?php
//Llamada al modelo
require_once("models/productos_model.php");


class productos_controller {




  /**
  * Mostra llistat monitores
  * @return No
  */
  function view() {
    $productos=new productos_model();

    //Uso metodo del modelo de product
    $datos=$productos->get_productos();

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
    $datos=$productos->verTeclados();

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
    $datos=$productos->verRatones();

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
    $datos=$productos->verProcesadores();

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
    $datos=$productos->verGraficas();

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
    $datos=$productos->verRam();

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
    $datos=$productos->verPBase();

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
    $datos=$productos->verPortatiles();

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
    $datos=$productos->verPCSobremesa();

    //Llamado a la vista: mostrar la pantalla
    require_once("views/productos_view.phtml");
  }

  // ver categorias
  function categoriasPadreView(){

    $productos=new productos_model();

    $datospadres=$productos->get_categoriasPadre();

    $productos=new productos_model();

    $datoshijas=$productos->get_categoriasHijas();

    require_once("views/productos_add.phtml");

  }

  function categoriasHijasView(){

    $productos=new productos_model();
    $datoshijas=$productos->get_categoriasHijas();

    require_once("views/productos_add.phtml");

  }

  //marcasView
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




}
?>
