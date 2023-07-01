<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>ElectroMusic</title>
</head>
<body>
<?php require("Componentes/header.php");?>      
    <main class="contenedor">
        <h3 class="centrar-texto">Informacion del curso</h3>

        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen">
                <img src="img/nosotros.jpg" alt="imagen nosotros">
            </div>
            <div class="sobre-nosotros__texto">
                <p>En este curso queremos enseñarte a hacer este tipo de musica ya que es un estilo musical fundamentalmente instrumental, con escasa presencia de vocales. Normalmente se escucha en el contexto de una sesión continua de DJ, durante la cual este avanza de un disco al siguiente a través de su mezcla sincronizada.</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">
                    <h1 class="logo__nombre no-margin centrar-texto">Electro<span class="logo__bold">Music</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="nosotros.html" class="navegacion__enlace">Nosotros</a>
                    <a href="contacto.html" class="navegacion__enlace">Contactame</a>
                    <a href="tipos.html" class="navegacion__enlace">Tipos</a>
                </nav>
            </div>
        </div>
        <?php require("componentes/footer.php"); ?>
</body>
</html>