<?php
class product_model{

  private $db;
  private $PRODUCT;

  private $BRAND;
  private $CATEGORY;
  private $ID;
  private $LONGDESCRIPTION;
  private $NAME;
  private $PRICE;
  private $SHORTDESCRIPTION;
  private $SPONSORED;
  private $STOCK;
   private $URL;

  public function __construct(){
    $this->db=Conectar::conexion();
    $this->PRODUCT=array();
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


  public function getUrl() {
    return $this->URL;
  }

  public function setUrl($URL) {
    $this->URL = $URL;
  }


  /**
  * Extreu tots els productes de la taula
  * @return array Bidimensional de tots els productes
  */
  public function get_PRODUCT(){
    $consulta=$this->db->query("select *,URL from PRODUCT left join IMAGE on ID = PRODUCT where SPONSORED = 'Y';");
    while($filas=$consulta->fetch_assoc()){
      $this->PRODUCT[]=$filas;
    }
    return $this->PRODUCT;
  }

  



  public function obtener_imagen(){
    $consulta=$this->db->query("select *,URL from PRODUCT left join IMAGE on ID = PRODUCT;");
    while($filas=$consulta->fetch_assoc()){
      $this->PRODUCT[]=$filas;
    }
    return $this->PRODUCT;
  }



}
?>
