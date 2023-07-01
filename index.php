<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>ElectroMusic </title>
</head>
<body>
 <?php require("componentes/header.php");?>
    <main class="contenedor contenido-principal">
        <div class="blog">
            <h3>¿De que trata nuestro blog?</h3>
            <p> Este blog se enfoca en brindar informacion relevante y entretenida sobre la musica Electronica</p>
            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <source loading="lazy"  srcset="img/blog1.jpg" type="image/webp">
                        <img loading="lazy" src="img/blog1.jpg" alt="imagen blog"> 
                    </picture>
                </div>
                <div class="entrada__contenido">
                    <h4 class="no-margin">¿Que es la musica electronica?</h4>
                    <p>La música electrónica puede caracterizarse como un género musical que se crea y produce utilizando instrumentos electrónicos y electromecánicos, diversos instrumentos digitales o la llamada tecnología musical basada en circuitos.</p>
                    <a href="saber_mas.html" class="boton boton--primario"> Saber mas</a>
                </div>
            </article>
            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <source loading="lazy"  srcset="img/blog4.jpg" type="image/webp">
                        <img loading="lazy" src="img/blog4.jpg" alt="imagen blog"> 
                    </picture>
                </div>

                <div class="entrada__contenido">
                    <h4 class="no-margin">Evolucion de la musica electronica</h4>
                    <p>La música electrónica ha experimentado una evolución constante desde su origen a mediados del siglo XX, junto con el desarrollo tecnológico de instrumentos y dispositivos. En la década de 1950, el músico francés Pierre Schaeffer comenzó a experimentar con cintas magnéticas para crear música con sonidos concretos. En los años 60, el alemán Karlheinz Stockhausen experimentó con sintetizadores analógicos y fundó su propia escuela de música electrónica. Por otra parte, en los EE. UU., Robert Moog desarrolló el primer sintetizador modular.</p>
                    <a href="saber_mas.html" class="boton boton--primario">Saber mas</a>
                </div>
            </article>
            <article class="entrada">
                <div class="entrada__imagen">
                    <picture>
                        <source loading="lazy"  srcset="img/blog3.jpg" type="image/webp">
                        <img loading="lazy" src="img/blog3.jpg" alt="imagen blog"> 
                    </picture>
                </div>

                <div class="entrada__contenido">
                    <h4 class="no-margin">Sus tipos</h4>
                    <p>Al igual que sucede en la mayoría de las categorías musicales, también dentro del género de música electrónica es muy frecuente encontrar diversos estilos con composiciones muy características.
                        House
                        EDM
                        Dance
                        Techno
                        Drum and bass
                        Hardcore
                        Trance
                    </p>
                    <a href="saber_mas.html" class="boton boton--primario">Saber mas</a>
                </div>
            </article>
        </div>
        <aside class="sidebar">
            <h3>Curso sobre Musica Electronica</h3>
            <ul class="cursos no-padding">
                <li class="widget-curso_label">
                    <h4 class="no-margin">Como hacer Techno </h4>
                    <p class="widget-curso_label"> 
                        Precio: 
                        <span class="widget-curso_label">Gratis</span>
                    </p>
                    <p class="widget-curso__label">Cupo: 
                        <span class="widget-curso__info">20</span>
                    </p>
                    <a href="entrada_curso.html" class="boton boton--secundario">Más Información sobre nuestro curso</a>
                </li>
            </ul>
            
        </aside>
    </main>
    <?php require("componentes/footer.php"); ?>
</body>
</html>