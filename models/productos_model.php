<?php
class productos_model{

  private $db;
  private $productos;

  private $brand;
  private $category;
  private $id;
  private $deslarga;
  private $name;
  private $price;
  private $descorta;
  private $sponsorizado;
  private $stock;
  private $nombre;


  public function __construct(){
    $this->db=Conectar::conexion();
    $this->productos=array();
  }

  /* GETTERS & SETTERS */
  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
  }


  public function getBrand() {
    return $this->brand;
  }

  public function setBrand($brand) {
    $this->brand = $brand;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getCategory() {
    return $this->category;
  }

  public function setCategory($category) {
    $this->category = $category;
  }

  public function getDeslarga() {
    return $this->deslarga;
  }

  public function setDeslarga($deslarga) {
    $this->deslarga = $deslarga;
  }

  public function getDescorta() {
    return $this->descorta;
  }

  public function setDescorta($descorta) {
    $this->descorta = $descorta;
  }


  public function getSponsorizado() {
    return $this->sponsorizado;
  }

  public function setSponsorizado($sponsorizado) {
    $this->sponsorizado = $sponsorizado;
  }

  public function getStock() {
    return $this->stock;
  }

  public function setStock($stock) {
    $this->stock = $stock;
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


  /**
  * muestra todos los productos esponsorizados
  * @return array Bidimensional de tots els productes
  */
  public function get_PRODUCT(){
    $consulta=$this->db->query("select *,URL from PRODUCT left join IMAGE on ID = PRODUCT where SPONSORED = 'Y';");
    while($filas=$consulta->fetch_assoc()){
      $this->PRODUCT[]=$filas;
    }
    return $this->PRODUCT;
  }

//Obtiene el carrusel
  public function get_carrousel(){
    $consulta=$this->db->query("SELECT PRODUCT.ID, FORMAT(PRODUCT.PRICE, 0) AS PRICE, PRODUCT.SHORTDESCRIPTION, IMAGE.URL , PROMOTION.ID , PROMOTION.DISCOUNTPERCENTAGE, FORMAT(PRODUCT.PRICE,0)*(1-(PROMOTION.DISCOUNTPERCENTAGE)/100) AS DISCOUNTEDPRICE FROM PRODUCT , IMAGE, PROMOTION WHERE PRODUCT.ID = IMAGE.PRODUCT AND IMAGE.PRODUCT = PROMOTION.ID;");
    while ($rows=$consulta->fetch_assoc()) {
      $this->carousel[]=$rows;
    }
    return $this->carousel;
  }



  //Ver productos por categorias
  public function get_ProductosPorCategoria(){

    $id1 = $_GET["ID"];
    $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = '$id1';");
    while($filas=$consulta->fetch_assoc()){
      $this->productos[]=$filas;
    }
    return $this->productos;
  }

  //obtener categorias
  public function get_categoriasPadre(){
    //  $consulta=$this->db->query("select * from CATEGORY ");
    $consulta=$this->db->query("select * from CATEGORY where PARENTCATEGORY IS NULL");
    while($filas=$consulta->fetch_assoc()){
      $this->categorias[]=$filas;
    }
    return $this->categorias;
  }

//Obtiene las categorias hijas
  public function get_categoriasHijas(){

    $consulta=$this->db->query("select * from CATEGORY where PARENTCATEGORY IS NOT NULL");
    while($filas=$consulta->fetch_assoc()){
      $this->categorias[]=$filas;
    }
    return $this->categorias;
  }

  //Marcas
  public function get_marcasView(){

    $consulta=$this->db->query("select * from BRAND");
    while($filas=$consulta->fetch_assoc()){
      $this->categorias[]=$filas;
    }
    return $this->categorias;
  }

  //insertar producto
  public function insertar_productos() {


    $sql = "INSERT INTO PRODUCT (CATEGORY, PRICE, BRAND, STOCK, NAME, SHORTDESCRIPTION, LONGDESCRIPTION) VALUES ('{$this->category}','{$this->price}','{$this->brand}','{$this->stock}','{$this->nombre}','{$this->descorta}','{$this->deslarga}')";

    $result = $this->db->query($sql);

    if ($this->db->error)
    return "$sql<br>{$this->db->error}";
    else {
      return false;
    }
  }

  //Buscador
  public function search($valor){

    $consulta=$this->db->query("SELECT *, img.URL FROM PRODUCT prod
      join IMAGE img on prod.ID = img.PRODUCT WHERE SHORTDESCRIPTION like '%$valor%';");

      while($filas=$consulta->fetch_assoc()){
        $this->productos[]=$filas;
      }
      return $this->productos;
    }

    //filtro por marca
    public function get_Marca(){

      if(isset($_POST["marca"])){

        $numeroMarca = $_POST["marca"];

        $consulta=$this->db->query("select *,URL from PRODUCT left join IMAGE on ID = PRODUCT where BRAND = '$numeroMarca';");

        while($filas=$consulta->fetch_assoc()){
          $this->productos[]=$filas;
        }

        return $this->productos;

      } else {

        $consulta=$this->db->query("select *,URL from PRODUCT left join IMAGE on ID = PRODUCT");

        while($filas=$consulta->fetch_assoc()){
          $this->productos[]=$filas;
        }

        return $this->productos;

      }

    }

//Filtro por dinero
    public function get_Dinero(){

      $precioMinimo = $_POST["precioMinimo"];
      $precioMaximo = $_POST["precioMaximo"];

      $consulta=$this->db->query("SELECT *, URL FROM PRODUCT left join IMAGE on ID = PRODUCT WHERE PRICE > $precioMinimo AND PRICE < $precioMaximo");

      while($filas=$consulta->fetch_assoc()){
        $this->productos[]=$filas;
      }

      return $this->productos;

    }

//Obtener cesta
    public function get_cesta(){

      $cesta = $_SESSION["cesta"];

      if($cesta != null){

        foreach ($cesta as $linea){

          $cestamuestra=$this->db->query("SELECT *, URL from PRODUCT left join IMAGE on ID = PRODUCT WHERE ID = '$linea[0]';");

          while($filas=$cestamuestra->fetch_assoc()){
            $cesta3[]=$filas;
          }

        }

      }

      return $cesta3;

    }

//Borrar la cesta
    public function borrar_cesta(){

      $numero = $_GET["numero1"];

      $cestacontinua = $_SESSION["cesta"];

      for ($j = 0; $j< count($cestacontinua); $j++){

        $nulo = NULL;

        if ($_SESSION["cesta"][$j][0] == $nulo){

          echo "nada";

        } else if($_SESSION["cesta"][$j][0] == $numero) {

          unset($_SESSION["cesta"][$j]);

          break;
        }
      }
      header( "Location: index.php?controller=productos&action=cestaok");

    }


//Añadir compra
    function aCompra(){

      $sql = "INSERT INTO PRODUCT (NAME, STOCK, PRICE, SPONSORED, SHORTDESCRIPTION, LONGDESCRIPTION, BRAND, CATEGORY) VALUES ('{$this->name}', '{$this->stock}', '{$this->price}', '{$this->sponsored}', '{$this->shortdescription}', '{$this->longdescription}', '{$this->brand}', '{$this->category}')";

      $aProducto = $this->db->query($sql);

    }

//Vaciar cesta
    public function vaciarCesta(){

      $_SESSION["cesta"] = null;

    }


    /**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_monitores(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 10;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}



/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_Teclados(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 14;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_Ratones(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 15;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_Procesadores(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 3;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_Graficas(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 4;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}


/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_Ram(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 5;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_PBase(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 16;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_Portatiles(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 18;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

/**
* Extreu tots els productes de la taula
* @return array Bidimensional de tots els productes
*/
public function get_PCSobremesa(){
  $consulta=$this->db->query("select *, URL from PRODUCT left join IMAGE on ID = PRODUCT where CATEGORY = 19;");
  while($filas=$consulta->fetch_assoc()){
    $this->productos[]=$filas;
  }
  return $this->productos;
}

  }
  ?>
