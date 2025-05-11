<!DOCTYPE html>
<html>
<head>
<title>Blog</title>
</head>
<body>
<header>
    <h1>Blog</h1>
    <link rel="stylesheet" href="Estilo/EstiloFinal.css">
</header>
<main>
    <nav>
        <a href="Index.php">Inicio</a>
        <a href="Blog.php">Blog</a>
        <a href="Admin.php">Admin</a>
    </nav>
    <section id="contenedor-entradas">
    <?php
    $direccion = "Documentosentxt/Blog.txt";
$doc = array_reverse( file($direccion) );
for ($i=0; $i <count($doc) ; $i++) { 
    $doc[$i]= str_replace("\n", "<br>",$doc[$i]);
    $separacion = explode("|",$doc[$i]);

    $entrada = "<article class='entrada'>";
    $entrada .= "<h1>" . $separacion[0] . "</h1>";
    $entrada .= "<p class='fecha-entrada'>" . $separacion[1] . "</p>";
    $entrada .= "<p>" . $separacion[2] . "</p>";
    $entrada .= "</article>";

    echo $entrada;
}
?>

    </section>

</body>
</html>