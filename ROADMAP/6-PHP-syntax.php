


//! SINTÁXIS BÁSICA DE PHP
Cuando iniciamos un archivo PHP siempre tenemos que indicarle al inicio //* >?php
<?php  
$variable = "hola";   // así escribimos comentarios
$nombre = "Ignacio"; // hay que poner siempre al fianl " ; "  para que no de error

echo $variable . " " . $nombre;              // el " . " es un operador de concanetación

?>



<?php
$variable = "hola";   
$nombre = "Ignacio";
?>

<div>
  <h1><?php echo $variable . " " . $nombre; ?></h1>  //podemos pasar directamente dentro del html el código php
</dv>


//! ¿CÓMO VISUALIZAR FICHEROS?
Iniciamos navegador web en local >> nos lleva a localhost:8888/MAMP 
Disco Local > MAMP > htdocs 

metemos los documentos en una carpeta llamada "inicio" (por ejemplo)
creamos otra carpeta llamada "pruebas" 
dentro un doc "fichero.php" y el script para el echo "Hola mundo"

cambiamos a localhost:8888/
al entrar vemos un directorio con las carpetas que hay en htdocs
clicamos en fichero.php y se renderiza nuestro "hola mundo"

------
Si cambiamos fichero.php por index.php al introducir localhost:8888/pruebas se renderiza automáticamente
Esto es porque php siempre busca el fichero index para renderizarlo lo primero por la web

