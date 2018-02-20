<?php
class order_model{

private $db;

private $order;

private $id;
private $date;
private $paymentinfo;
private $status;
private $shippingaddress;
private $user;

public function __construct(){
    $this->db=Conectar::conexion();
    $this->productos=array();
}

/* GETTERS & SETTERS */

public function getId() {
  return $this->id;
}

public function setId($id) {
  $this->id = $id;
}

public function getDate() {
  return $this->date;
}

public function setDate($date) {
  $this->date = $date;
}

public function getPaymentinfo() {
  return $this->paymentinfo;
}

public function setPaymentinfo($paymentinfo) {
  $this->paymentinfo = $paymentinfo;
}

public function getStatus() {
  return $this->status;
}

public function setStatus($status) {
  $this->status = $status;
}

public function getShippingaddress() {
  return $this->shippingaddress;
}

public function setShippingaddress($shippingaddress) {
  $this->shippingaddress = $shippingaddress;
}

public function getUser() {
  return $this->user;
}

public function setUser($user) {
  $this->user = $user;
}

/**
* obtener productos
*
*/
public function get_productos(){
    $consulta=$this->db->query("select * from ORDER;");

    while($filas=$consulta->fetch_assoc()){
        $this->order[]=$filas;
    }

    return $this->order;
}


//Cesta
public function cesta(){

  $cUsuario = $_SESSION["usuario"];
  $direccion = $_GET["direccion"];

  $sql = "SELECT ID FROM `ORDER` WHERE USER = '$cUsuario'";

  $consulta1=$this->db->query($sql);

  while($filas=$consulta1->fetch_assoc()){
      $n1[]=$filas;
  }

  if($n1 == null){

  $sql = "INSERT INTO `ORDER` (SHIPPINGADDRESS, USER) VALUES ('$direccion','$cUsuario')";

    $consulta=$this->db->query($sql);

    $sql = "SELECT ID FROM `ORDER` WHERE USER = '$cUsuario'";

    $consulta=$this->db->query($sql);

  }

  $sql = "SELECT ID FROM `ORDER` WHERE USER = '$cUsuario'";

  $consulta1=$this->db->query($sql);

  while($filas=$consulta1->fetch_assoc()){
      $n2[]=$filas;
  }

  $_SESSION["orden"] = $n2[0]["ID"];

  header('location: index.php?controller=productos&action=finCesta');

}

}
?>
