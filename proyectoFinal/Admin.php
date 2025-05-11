<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<body>
<header>
    <h1>Admin</h1>
    <link rel="stylesheet" href="Estilo/EstiloFinal.css">
</header>
<main>
    <nav>
        <a href="Index.php">Inicio</a>
        <a href="Blog.php">Blog</a>
        <a href="Admin.php">Admin</a>
    </nav>
    

<?php
 
 if( 
    // isset($_POST["txtnombre"]) && !empty($_POST["txtnombre"]) && 
    // isset($_POST["txtapellido"])  && !empty($_POST["txtapellido"]) && 
    // isset($_POST["txtfecha"])  && !empty($_POST["txtfecha"])&&
    isset($_POST["txtBiografia"])  && !empty($_POST["txtBiografia"])) {
    // $nombre = $_POST["txtnombre"];
    // $apellido = $_POST["txtapellido"];
    // $fecha = $_POST["txtfecha"];
    $biografia = $_POST["txtBiografia"];

    file_put_contents("Documentosentxt/Biografia.txt", $biografia);
}
//else if( /*condiciones para blog */){
    
//}
?>

<aside>
    <form id="formularioBiografia" action="Admin.php" method= "POST">
  Escribe tu Biografia:<textarea type="text"  name="txtBiografia">
    <?php
        echo file_get_contents("Documentosentxt/Biografia.txt");
    ?>
  </textarea><br>
  <input type="submit" name="botonGuardarBiografia" value="Enviar">
</form>

<form id="formularioBlog" action="Admin.php" method= "POST">
  Titulo:<input type="text"  name="txtTitulo"><br>
  Fecha:<input type="text"  name="txtfecha"><br>
  <p>Escribe tu Entrada de Blog:</p>
  <textarea type="text"  name="txtEntradaBlog">
   
  </textarea><br>
  <input type="submit" name="botonGuardarBlog" value="Enviar">
</form>
    </aside>
    </main>

</body>
</html>