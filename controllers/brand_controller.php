<?php

require_once("models/brand_model.php");



  class brand_controller {

    function viewmarca(){

      $brand = new brand_model();
      $marcas = $brand->get_brand();



      require_once("views/product_view.phtml");

    }

  }

?>
