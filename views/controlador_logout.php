<?php

session_start();

//Borrar contenido de $_SESSION
session_unset();

//elimina la sesio
session_destroy();

//Te manda al index
 include 'header_view.phtml' ; 

 ?>
