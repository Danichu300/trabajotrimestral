<?php
class categorias_model{

private $db;
private $categorias;


private $id;
private $name;
private $parentcategory;



public function __construct(){
    $this->db=Conectar::conexion();
    $this->categorias=array();
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

public function getParentcategory() {
  return $this->parentcategory;
}

public function setParentcategory($parentcategory) {
  $this->parentcategory = $parentcategory;
}


 public function get_categoriasPadre(){
  //  $consulta=$this->db->query("select * from CATEGORY ");
   $consulta=$this->db->query("select * from CATEGORY where PARENTCATEGORY IS NULL");
     while($filas=$consulta->fetch_assoc()){
         $this->categorias[]=$filas;
     }
     return $this->categorias;
}

public function get_categoriasHijas(){

  $consulta=$this->db->query("select * from CATEGORY where PARENTCATEGORY IS NOT NULL");
    while($filas=$consulta->fetch_assoc()){
        $this->categorias[]=$filas;
    }
    return $this->categorias;
}

public function insertar_categorias() {

if ($this->parentcategory == "NULL") {
   $sql = "INSERT INTO CATEGORY (NAME) VALUES ('{$this->name}')";
}else {
   $sql = "INSERT INTO CATEGORY (PARENTCATEGORY ,NAME) VALUES ('{$this->parentcategory}','{$this->name}')";
}

     $result = $this->db->query($sql);



     if ($this->db->error)
         return "$sql<br>{$this->db->error}";
     else {
         return false;
     }
}

}
?>
