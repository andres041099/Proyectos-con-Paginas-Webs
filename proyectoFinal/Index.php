<!DOCTYPE html>
<html>
<head>
<title>Inicio</title>
<link rel="stylesheet" href="Estilo/EstiloFinal.css">
</head>
<body>
<header>
    <h1>Proyecto Final</h1>
</header>

<main>
    <nav>
        <a href="Index.php">Inicio</a>
        <a href="Blog.php">Blog</a>
        <a href="Admin.php">Admin</a>
    </nav>
    <section id="centro">
        <article>
        <h2>Informacion</h2>
        <p>En esta Pagina Se trata de un especie de Blog y de como poder postear las biografias por parte del administrador como el usuario visitante y de como crear una 
            cuenta para modificar los elementos de esta pagina.</p>
        <center><img src="Imagenes/Mi Foto.jpg" alt=""></center>
        <h3>Biografia</h3>
        </article>
    </section>
    <?php
function ArchivoBiografia(){
    echo str_replace("\n", "<br>\n", file_get_contents("Documentosentxt/Biografia.txt"));
}
ArchivoBiografia();
?>
</main>
</body>
</html>