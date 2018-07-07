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
    <title>Ticstark - Marketing, Social Media y Software</title>
    <meta name="description" content="Impulsamos tu marca y negocio en redes sociales de manera profesional, aplicando estrategias avanzadas de posicionamiento de marca y campañas publicitarias.">
</head>

<body>

    <!-- HEADER -->
    <header class="header-fix d-flex fixed-position" id="HEADER">

        <!-- LOGOTIPO -->
        <figure class="logo-h col-6 d-flex-item  ">
            <a href="#PORTADA">
                <img src="assets/img/compreso/logo.png" alt="logotipo">
            </a>
        </figure>

        <!-- BARRA DE NAVEGACIÓN -->
        <nav class="header-nav col-6 d-flex-item" id="MENU">
            <ul>
                <li>
                    <a class="link" href="#SERV">Servicios</a>
                </li>
                <li>
                    <a class="link" href="#nosotros">Nosotros</a>
                </li>
                <li>
                    <a class="link" href="#FAQ">Contacto</a>
                </li>
                <li>
                    <a class="link" href="#BLOG">Blog</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- PORTADA (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
    <section class="container f-nexa-b" id="PORTADA">
        <video playsinline autoplay muted loop poster="pulina.jpg" id="video_back">
            <source src="assets/video_header/polina.webm" type="video/webm">
            <source src="pulina.mp4" type="video/mp4">
        </video>
        <div class="container_b">
            <!-- FLEX -->
            <div class="d-flex flexflow-r-ol fitems-center">
                <figure class="d-flex-item">
                    <img class="logotipo_a" src="assets/img/compreso/logo6-compress.png" alt="isotipo">
                </figure>
                <figure class="d-flex-item">
                    <h1 class="titulo_a color-ticstark-1">TIC<div class="titulo_a d-line-b color-ticstark-5">STARK</div>
                    </h1>
                </figure>
            </div>
            <div class="d-block all-color-ticstark-1 t-all-center">
                <h3 class="eslogan_a">MARKETING DIGITAL</h3>
            </div>
            <div class="margin-5 t-center">
                <a class="d-line-b button f-chivo-l" href="sketch.html">CONOCE MÁS</a>
            </div>
        </div>
    </section>

    <main class="main_content">
        <!-- SERVICIOS DE TICSTARK -->
        <section class="container background-color-ts-2">
            <div class="d-flex">
                <a class="col-3 d-flex-item" href="#" alt="identidad_marca">
                    <img class="img-width-full" src="assets/img/compreso/marketing1.png" alt="Marketing">
                </a>

                <a class="col-3 d-flex-item" href="#" alt="marketing_digital">
                    <img class="img-width-full" src="assets/img/compreso/marketing2.png" alt="Marketing">
                </a>

                <a class="col-3 d-flex-item" href="#" alt="redes_sociales">
                    <img class="img-width-full" src="assets/img/compreso/marketing3.png">
                </a>
                <a class="col-3 d-flex-item" href="#" alt="diseno_web">
                    <img class="img-width-full" src="assets/img/compreso/marketing4.png">
                </a>
            </div>
        </section>

        <!-- CARROUSEL SERVICIOS-->
        <section class="container background-color-ts-2" id="carrousel">
            <div class="container_h d-flex">
                <article class="d-flex-item col-6 f-nexa-b t-all-center color-ticstark-4">
                    <h1 class="subtitulo_b">POSICIONAMOS TU MARCA</h1>
                </article>
                <article class="d-flex-item col-6 f-nexa-b t-all-center color-ticstark-4">
                    <h1 class="subtitulo_b">DE ESTA MANERA</h1>
                </article>
            </div>
        </section>

        <!-- NOSOTROS -->
        <section class="container background-color-ts-1" id="nosotros">
            <article class="text-container">
                <h9 class="f-nexa-b color-ticstark-2" id="titulo_serv">NUESTRO EQUIPO:</h9>
                <h3 class="subtitulo_c f-nexa-b color-ticstark-4">TENEMOS PERSONAS, NO EMPLEADOS</h3>
            </article>


            <div class="container_g d-flex background-white">
                <article class="item-container col-3 d-flex-item t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Carlos_foto.jpeg" alt="Fotografia Carlos">
                    <h4 class="subtitulo_c color-ticstark-3 f-nexa-b">Carlos</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Líder de producto</li>
                </article>
                <article class="item-container col-3 d-flex-item f-nexa-b t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Estaban_foto.jpeg" alt="Fotografia Esteban">
                    <h4 class="subtitulo_c color-ticstark-3 f-nexa-b">Esteban</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Marketing</li>
                </article>
                <article class="item-container col-3 d-flex-item f-nexa-b t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Kevin_foto.jpeg" alt="Fotografia Kevin">
                    <h4 class="subtitulo_c color-ticstark-3 f-nexa-b">Kevin</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Administrador</li>
                </article>
                <article class="item-container col-3 d-flex-item f-nexa-b t-all-center">
                    <img class="img-width-full" src="assets/img/compreso/Andres_foto.jpeg" alt="Fotografia Andrés">
                    <h4 class="subtitulo_c color-ticstark-3 f-nexa-b">Andrés</h4>
                    <p class="texto_b f-nexa-b color-ticstark-2">Diseñador</li>
                </article>
            </div>
        </section>

        <!-- BLOG (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
        <section class="container all-color-ticstark-4 background-color-ts-1" id="BLOG">
            <article class="text-container">
                <h2 class="subtitulo_c f-nexa-b" id="titulo_serv">NUESTRO BLOG</h2>
            </article>
            <div class="container_g d-flex flexflow-r-ol fitems-spacearound">
                <article class="item-container flex-item-30 f-nexa-b">
                    <img class="img-width-full" src="#">
                    <h4 class="subtitulo_b">DIA 1</h4>
                    <p class="texto_b">NOTICIA 1</li>
                </article>
                <article class="item-container flex-item-30 f-nexa-b">
                    <img class="img-width-full" src="#">
                    <h4 class="subtitulo_b">DIA 2</h4>
                    <p class="texto_b">NOTICIA 2</li>
                </article>
                <article class="item-container flex-item-30 f-nexa-b">
                    <img class="img-width-full" src="#">
                    <h4 class="subtitulo_b">DIA 3</h4>
                    <p class="texto_b">NOTICIA 3</li>
                </article>
            </div>
        </section>

        <!-- PARTNERS/CLIENTES (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
        <section class="container" id="CUSTOMERS">
            <div class=" d-flex flexflow-f-ol all-color-ticstark-1 background-color-ts-3">
                <article class="col-3 d-flex-item text-container">
                    <h2 class="subtitulo_c f-nexa-b">NUESTROS CLIENTES</h2>
                </article>

                <article class="item-container col-9 d-flex-item">
                    <img class="img-width-full" src="assets/img/customers/clientes-2.png">
                </article>
            </div>
        </section>

        <!-- FORMULARIO DE CONTACTO (PERMITE CAMBIOS EN ELEMENTOS CON FLEX)-->
        <section class="container d-flex flexflow-r-ol nowrap-align-stretch all-color-ticstark-1 background-color-ts-4" id="FAQ">
            <article class="text-container flex-item-45">
                <h2 class="subtitulo_c f-nexa-b" id="titulo_serv">CONTACTENOS (FOOTER)</h2>
            </article>
            <article class="item-container flex-item-55">
                <a class="link" href="https://www.facebook.com/groups/monteriavende">Facebook</a>
            </article>
        </section>
    </main>
</body>

</html>