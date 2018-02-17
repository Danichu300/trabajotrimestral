<?php
class brand_model{

private $db;

private $brand;
private $id;
private $name;


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

public function getName() {
  return $this->name;
}

public function setName($name) {
  $this->name = $name;
}
/**
* Extreu totes les persones de la taula
* @return array Bidimensional de totes les persones
*/
public function get_brand(){
    $consulta=$this->db->query("select * from BRAND;");

    while($filas=$consulta->fetch_assoc()){
        $this->brand[]=$filas;
    }

    return $this->brand;
}

}
?>
