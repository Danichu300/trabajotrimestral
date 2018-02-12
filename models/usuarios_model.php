<?php
class usuarios_model{

private $db;
private $usuarios;


private $username;
private $password;
private $name;
private $email;
private $direccion;
private $cp;

public function __construct(){
    $this->db=Conectar::conexion();
    $this->usuarios=array();
}

/* GETTERS & SETTERS */

public function getUsername() {
  return $this->username;
}

public function setUsername($username) {
  $this->username = $username;
}

public function getPassword() {
  return $this->password;
}

public function setPassword($password) {
  $this->password = $password;
}

public function getName() {
  return $this->name;
}

public function setName($name) {
  $this->name = $name;
}

public function getEmail() {
  return $this->email;
}

public function setEmail($email) {
  $this->email = $email;
}

public function getDireccion() {
  return $this->direccion;
}

public function setDireccion($direccion) {
  $this->direccion = $direccion;
}

public function getCp() {
  return $this->cp;
}

public function setCp($cp) {
  $this->cp = $cp;
}





/**
* Inserta un registre a la taula
* @return [false]  si no hi ha hagut cap error,
*         [string] amb text d'error si no ha anat bé
*/
public function insertar() {
    $salt = "$1$encriptat";
    $hashed_password = crypt($this->password, $salt);

     $sql = "INSERT INTO USER (USERNAME, PASSWORD, NAME, EMAIL, ADRESS, POSTALCODE) VALUES ('{$this->username}','{$hashed_password}','{$this->name}','{$this->email}','{$this->direccion}','{$this->cp}')";
     $result = $this->db->query($sql);



     if ($this->db->error)
         return "$sql<br>{$this->db->error}";
     else {
         return false;
     }
}
public function buscar_usuarios(){

  // var_dump($this->username);
  // var_dump($this->password);


$sql = "SELECT USERNAME, PASSWORD FROM USER WHERE USERNAME = '{$this->username}';";
$result = $this->db->query($sql);
$row = mysqli_fetch_assoc($result);
$valid_password = password_verify($this->password, $row['PASSWORD']);
// var_dump($result);

if($result->num_rows > 0) {
  if ($valid_password) {
    return true;
  } else {
    return false;
  }
} else {
  return false;
}


}

}
?>
