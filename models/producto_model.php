<?php
class producto_model{

  private $db;
  private $producto;

  private $BRAND;
  private $CATEGORY;
  private $ID;
  private $LONGDESCRIPTION;
  private $NAME;
  private $PRICE;
  private $SHORTDESCRIPTION;
  private $SPONSORED;
  private $STOCK;

  public function __construct(){
    $this->db=Conectar::conexion();
    $this->producto=array();
  }

  /* GETTERS & SETTERS */
  public function getName() {
    return $this->NAME;
  }

  public function setName($NAME) {
    $this->NAME = $NAME;
  }

  public function getPrice() {
    return $this->PRICE;
  }

  public function setPrice($PRICE) {
    $this->PRICE = $PRICE;
  }


  public function getBrand() {
    return $this->BRAND;
  }

  public function setBrand($BRAND) {
    $this->BRAND = $BRAND;
  }

  public function getId() {
    return $this->ID;
  }

  public function setId($ID) {
    $this->ID = $ID;
  }

  public function getCategory() {
    return $this->CATEGORY;
  }

  public function setCategory($CATEGORY) {
    $this->CATEGORY = $CATEGORY;
  }

  public function getLongdescription() {
    return $this->LONGDESCRIPTION;
  }

  public function setLongdescription($LONGDESCRIPTION) {
    $this->LONGDESCRIPTION = $LONGDESCRIPTION;
  }

  public function getShortgdescription() {
    return $this->SHORTDESCRIPTION;
  }

  public function setShortdescription($SHORTDESCRIPTION) {
    $this->SHORTDESCRIPTION = $SHORTDESCRIPTION;
  }


  public function getSponsored() {
    return $this->SPONSORED;
  }

  public function setSponsored($SPONSORED) {
    $this->SPONSORED = $SPONSORED;
  }

  public function getStock() {
    return $this->STOCK;
  }

  public function setStock($STOCK) {
    $this->STOCK = $STOCK;
  }







  /**
  * Muestra un producto a través de su ID
  *
  */
  public function get_producto($ID) {
      $sql = "select *,URL FROM PRODUCT left join IMAGE on ID = PRODUCT WHERE ID='$ID';";

      $result = $this->db->query($sql);

    $fila = $result->fetch_assoc();
    return $fila;
  }


// //Obtener la imagen del producto
// public function get_imagen($ID) {
//     $sql = "select *,URL from PRODUCT left join IMAGE on ID = PRODUCT";
//
//     $result = $this->db->query($sql);
//
//   $fila = $result->fetch_assoc();
//   return $fila;
// }



}
?>
