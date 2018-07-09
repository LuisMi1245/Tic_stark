<!--Theme Name:EXAMPLE
Template Theme URI:http://ticstark.com
Author: Ticstark
-->

<!-- 
ORDEN EN LA DEFINICIÓN DE ATRIBUTOS:
    - .class (si se tiene más de una clase separar con 2 espacios).
    - #id, name.
    - data-*.
    - src, for, type, href, value.
    - title, alt.
    - aria-*, role.

d-flex: Permite la flexibilidad de las cajas
con respecto a su padre (container).
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <link href="assets/css/ticstark-reset.css" rel="stylesheet">
    <link href="assets/css/ticstark-grid.css" rel="stylesheet">
    <link href="assets/css/ticstark-layout.css" rel="stylesheet">
    <link href="assets/css/ticstark-style.css" rel="stylesheet">
    <link href="assets/css/video-header.css" rel="stylesheet">
    <link href="assets/css/font.css" rel="stylesheet">
    <link href="assets/css/style_prueba.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG"
        crossorigin="anonymous">
    <title>Ticstark - Marketing, Social Media y Software</title>
    <meta name="description" content="Impulsamos tu marca y negocio en redes sociales de manera profesional, aplicando estrategias avanzadas de posicionamiento de marca y campañas publicitarias.">
</head>

<body>

    <!-- HEADER -->
    <header class="header-fix container-flex fixed-position" id="HEADER">

        <!-- LOGOTIPO -->
        <div class="col-item-flex-3 ">
            <figure class="header-logo">
                <a href="#PORTADA">
                    <span class="header-logo-a f-segoe-r">TIC</span>
                    <span class="header-logo-b f-segoe-b">STARK.</span>
                </a>
            </figure>
        </div>

        <!-- BARRA DE NAVEGACIÓN -->
        <div class="col-item-flex-9">
            <nav class="header-nav" id="MENU">
                <ul>
                    <li>
                        <a href="#PORTADA">HOME</a>
                    </li>
                    <li>
                        <a href="#SERV">QUÉ HACEMOS</a>
                    </li>
                    <li>
                        <a href="#FAQ">EQUIPO</a>
                    </li>
                    <li>
                        <a href="#BLOG">BLOG</a>
                    </li>
                    <li>
                        <a href="#BLOG">CONTACTENOS</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>

    <!-- PORTADA (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
    <section class="portada container-flex background-img-ticstark" id="PORTADA">
        <!-- <video playsinline autoplay muted loop poster="pulina.jpg" id="video_back">
            <source src="assets/video_header/polina.webm" type="video/webm">
            <source src="pulina.mp4" type="video/mp4">
        </video> -->
        <div class="col-item-auto">
            <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center all-color-ticstark-white">
                <div class="col-item-auto">
                    <h1 class="f-segoe-sb a">CREATIVIDAD</h1>
                </div>
                <div class="col-item-auto">
                    <h2 class="f-segoe-sl b">NUESTRA PRIORIDAD</h1>
                </div>
                <div class="col-item-auto">
                    <h2 class="f-segoe-r c">MARCA / DISEÑO / DESARROLLO</h2>
                </div>
                <div class="col-item-auto boton">
                    <a class="button f-segoe-sl" href="sketch.html">LEER MÁS</a>
                </div>
            </figure>
        </div>
    </section>

    <main class="main_content">
        <!-- SERVICIOS DE TICSTARK -->
        <section class="container-flex servicios">

            <div class="col-item-flex-3 background-color-ts-5">
                <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#" alt="diseno_web">POSICIONAMOS</a>
                    </div>
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#" alt="diseno_web">TU MARCA</a>
                    </div>
                </figure>
            </div>

            <div class="col-item-flex-3 background-color-ts-5-1">
                <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#">CREAMOS</a>
                    </div>
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#">COMUNIDADES</a>
                    </div>
                </figure>
            </div>

            <div class="col-item-flex-3 background-color-ts-5-2">
                <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#">GENERAMOS</a>
                    </div>
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#">LEADS</a>
                    </div>
                </figure>
            </div>

            <div class="col-item-flex-3 background-color-ts-5-3">
                <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#">DISEÑAMOS</a>
                    </div>
                    <div class="col-item-auto all-color-ticstark-white">
                        <a href="#">ESTRATEGIAS DIGITALES</a>
                    </div>
                </figure>
            </div>

        </section>

        <!-- CARROUSEL SERVICIOS-->
        <section class="container background-color-ts-2" id="carrousel">
            <div class="container_h d-flex">
                <article class="d-flex-item col-6 f-nexa-b t-all-center color-ticstark-4">
                    <h1 class="subtitulo-b">POSICIONAMOS TU MARCA</h1>
                </article>
                <article class="d-flex-item col-6 f-nexa-b t-all-center color-ticstark-4">
                    <h1 class="subtitulo-b">DE ESTA MANERA</h1>
                </article>
            </div>
        </section>

        <!-- NOSOTROS -->
        <section class="container background-color-ts-1" id="nosotros">
            <article class="text-container">
                <h9 class="f-nexa-b color-ticstark-2">NUESTRO EQUIPO:</h9>
                <h3 class="subtitulo-c f-nexa-b color-ticstark-4">TENEMOS PERSONAS, NO EMPLEADOS</h3>
            </article>


            <div class="container_g container-flex background-white">
                <article class="item-container col-3 d-flex-item t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Carlos_foto.jpeg" alt="Fotografia Carlos">
                    <h4 class="subtitulo-c color-ticstark-3 f-nexa-b">Carlos</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Líder de producto</li>
                </article>
                <article class="item-container col-3 d-flex-item f-nexa-b t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Estaban_foto.jpeg" alt="Fotografia Esteban">
                    <h4 class="subtitulo-c color-ticstark-3 f-nexa-b">Esteban</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Marketing</li>
                </article>
                <article class="item-container col-3 d-flex-item f-nexa-b t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Kevin_foto.jpeg" alt="Fotografia Kevin">
                    <h4 class="subtitulo-c color-ticstark-3 f-nexa-b">Kevin</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Administrador</li>
                </article>
                <article class="item-container col-3 d-flex-item f-nexa-b t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Andres_foto.jpeg" alt="Fotografia Andrés">
                    <h4 class="subtitulo-c color-ticstark-3 f-nexa-b">Andrés</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Diseñador</li>
                </article>
            </div>
        </section>

        <!-- BLOG (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
        <section class="container all-color-ticstark-4 background-color-ts-1" id="BLOG">
            <article class="text-container">
                <h2 class="subtitulo-c f-nexa-b">NUESTRO BLOG</h2>
            </article>
            <div class="container_g container-flex flexflow-r-ol fitems-spacearound">
                <article class="item-container flex-item-30 f-nexa-b">
                    <img class="img-width-full" src="#">
                    <h4 class="subtitulo-b">DIA 1</h4>
                    <p class="texto_b">NOTICIA 1</li>
                </article>
                <article class="item-container flex-item-30 f-nexa-b">
                    <img class="img-width-full" src="#">
                    <h4 class="subtitulo-b">DIA 2</h4>
                    <p class="texto_b">NOTICIA 2</li>
                </article>
                <article class="item-container flex-item-30 f-nexa-b">
                    <img class="img-width-full" src="#">
                    <h4 class="subtitulo-b">DIA 3</h4>
                    <p class="texto_b">NOTICIA 3</li>
                </article>
            </div>
        </section>

        <!-- PARTNERS/CLIENTES (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
        <section class="container" id="CUSTOMERS">
            <div class=" container-flex flexflow-f-ol all-color-ticstark-1 background-color-ts-3">
                <article class="col-3 d-flex-item text-container">
                    <h2 class="subtitulo-c f-nexa-b">NUESTROS CLIENTES</h2>
                </article>

                <article class="item-container col-9 d-flex-item">
                    <img class="img-width-full" src="assets/img/customers/clientes-2.png">
                </article>
            </div>
        </section>

        <!-- FORMULARIO DE CONTACTO (PERMITE CAMBIOS EN ELEMENTOS CON FLEX)-->
        <section class="container container-flex flexflow-r-ol nowrap-align-stretch all-color-ticstark-1 background-color-ts-4" id="FAQ">
            <article class="text-container flex-item-45">
                <h2 class="subtitulo-c f-nexa-b">CONTACTENOS (FOOTER)</h2>
            </article>
            <article class="item-container flex-item-55">
                <a class="link" href="https://www.facebook.com/groups/monteriavende">Facebook</a>
            </article>
        </section>
    </main>
</body>

</html>