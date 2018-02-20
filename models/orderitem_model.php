<?php
class orderitem_model{

private $db;

private $orderitem;

private $orderline;
private $order;
private $product;
private $quantity;
private $price;
private $user;

public function __construct(){
    $this->db=Conectar::conexion();
    $this->productos=array();
}

/* GETTERS & SETTERS */

public function getOrderline() {
  return $this->orderline;
}

public function setOrderline($orderline) {
  $this->orderline = $orderline;
}

public function getOrder() {
  return $this->order;
}

public function setOrder($order) {
  $this->order = $order;
}

public function getProduct() {
  return $this->product;
}

public function setProduct($product) {
  $this->product = $product;
}

public function getQuantity() {
  return $this->quantity;
}

public function setQuantity($quantity) {
  $this->quantity = $quantity;
}

public function getPrice() {
  return $this->price;
}

public function setPrice($price) {
  $this->price = $price;
}

/**
* obtiene el orden item
*/
public function get_orderitem(){
    $consulta=$this->db->query("select * from ORDERITEM;");

    while($filas=$consulta->fetch_assoc()){
        $this->orderitem[]=$filas;
    }

    return $this->orderitem;
}


//Finalizar cesta
public function finalizarcesta1(){

      $userCesta = $_SESSION["usuario"];
      $cestaFinal = $_SESSION["cesta"];

      echo count($cestaFinal);

      $sql = "SELECT ID FROM `ORDER` WHERE USER = '$userCesta'";

      $consulta1=$this->db->query($sql);

      while($filas=$consulta1->fetch_assoc()){
          $n1[]=$filas;
      }

      $orden = $n1[0]["ID"];

      for($i = 0; $i < count($cestaFinal); $i++){

        if($cestaFinal[$i] == ""){

        } else {

        $idProducto = $cestaFinal[$i][0];
        $cantidadProducto = $cestaFinal[$i][1];

        echo "<br>";

        $sql = "SELECT PRICE FROM PRODUCT WHERE ID = '$idProducto'";

        $consulta2=$this->db->query($sql);

        while($filas=$consulta2->fetch_assoc()){
            $n3[]=$filas;
        }

        $precioProducto = $n3[$i]['PRICE'];

        $sql = "INSERT INTO ORDERITEM (`ORDER`, PRODUCT, QUANTITY, PRICE) VALUES ($orden, $idProducto , $cantidadProducto, $precioProducto)";

        $consulta=$this->db->query($sql);

      }

      }
  header( "Location: index.php?controller=usuarios&action=logout");
}


}
?>
