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
    <header class="header-fix container-flex fixed-position nowrap-align-baseline" id="HEADER">

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
                    <h2 class="f-segoe-sl-webkit f-segoe-sl  b">NUESTRA PRIORIDAD</h1>
                </div>
                <div class="col-item-auto">
                    <h2 class="f-segoe-r c">MARCA / DISEÑO / DESARROLLO</h2>
                </div>
                <div class="col-item-auto boton">
                    <a class="button f-segoe-sl f-segoe-sl-webkit" href="sketch.html">LEER MÁS</a>
                </div>
            </figure>
        </div>
    </section>

    <main class="main_content">

        <!-- SERVICIOS DE TICSTARK -->
        <section class="container-fluido">
            <div class="container-flex servicios">
                <div class="efecto-caja bloque-servicios col-item-flex-3 background-color-ts-5">
                    <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r b-1" href="#">POSICIONAMOS</span>
                        </div>
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r a-1" href="#">TU MARCA</span>
                        </div>
                    </figure>
                </div>

                <div class="efecto-caja bloque-servicios col-item-flex-3 background-color-ts-5-1">
                    <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r a-1" href="#">CREAMOS</span>
                        </div>
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r b-1" href="#">COMUNIDADES</span>
                        </div>
                    </figure>
                </div>

                <div class="efecto-caja bloque-servicios col-item-flex-3 background-color-ts-5-2">
                    <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r b-1" href="#">GENERAMOS</span>
                        </div>
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r a-1" href="#">LEADS</span>
                        </div>
                    </figure>
                </div>

                <div class="efecto-caja bloque-servicios col-item-flex-3 background-color-ts-5-3">
                    <figure class="container-flex flex-grow-1 flexflow-c-ol nowrap-align-center">
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r a-1" href="#">DISEÑAMOS</span>
                        </div>
                        <div class="col-item-auto all-color-ticstark-white">
                            <span class="f-segoe-r b-1" href="#">ESTRATEGIAS DIGITALES</span>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <!-- SERVICIOS DETALLADOS -->
        <section class="container-fluido background-color-ts-6">
            <div class="container-flex">
                <article class="col-item-flex-4">
                    <img class="img-full" src="assets/img/compreso/path-5.png">
                </article>
                <article class="col-item-flex-8">
                    <div class="container-flex flexflow-c-ol sr">
                        <div class="col-item-auto">
                            <h1 class="f-segoe-sl f-segoe-sl-webkit a-2">IDENTIDAD DE MARCA</h1>
                        </div>
                        <div class="col-item-auto">
                            <p class="f-segoe-r b-2">Le damos identidad a tu marca, teniendo claro el segmento de mercado y tu público objetivo.</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="container-fluido background-white">
            <div class="container-flex">
                <article class="col-item-flex-8">
                    <div class="container-flex flexflow-c-ol sr">
                        <div class="col-item-auto">
                            <h1 class="f-segoe-sl f-segoe-sl-webkit a-2">MARKETING DIGITAL</h1>
                        </div>
                        <div class="col-item-auto">
                            <p class="f-segoe-r b-2">Diseñamos estrategias y usamos herramientas para llegar a tu público verdadero, siempre ofreciendo
                                lo que ellos necesitan de tu marca.</p>
                        </div>
                    </div>
                </article>
                <article class="col-item-flex-4">
                    <img class="img-full" src="assets/img/compreso/path-6.png">
                </article>
            </div>
        </section>

        <section class="container-fluido background-color-ts-7">
            <div class="container-flex">
                <article class="col-item-flex-4">
                    <img class="img-full" src="assets/img/compreso/path-7.png">
                </article>
                <article class="col-item-flex-8">
                    <div class="container-flex flexflow-c-ol sr">
                        <div class="col-item-auto">
                            <h1 class="f-segoe-sl f-segoe-sl-webkit a-2">REDES SOCIALES</h1>
                        </div>
                        <div class="col-item-auto">
                            <p class="f-segoe-r b-2">Creamos contenido para las comunidades digitales, en Facebook e Instagram, que se identifiquen
                                con tu marca.</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- BLOG (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
        <section class="container-fluido background-color-ts-8 blog" id="BLOG">
            <article class="text-container">
                <h2 class="c-2 f-segoe-bn color-ticstark-black">BLOG</h2>
            </article>
            <div class="container-flex flexflow-r-ol fitems-spacearound">
                <article class="col-item-flex-3">
                    <div class="container-grid">
                        <span class="cateogoria-container">Marca Personal</span>
                        <img class="img-full" src="assets/img/compreso/path-2.png">
                    </div>
                </article>
                <article class="col-item-flex-3">
                    <div class="container-grid">
                        <span class="cateogoria-container">Desafia tu mundo</span>
                        <img class="img-full" src="assets/img/compreso/path-3.png">
                    </div>
                </article>
                <article class="col-item-flex-3">
                    <div class="container-grid">
                        <span class="cateogoria-container">Desarrollo de tecnologías</span>
                        <img class="img-full" src="assets/img/compreso/path-4.png">
                    </div>
                </article>
            </div>
        </section>

        <!-- PARTNERS/CLIENTES (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
        <section class="container-fluido background-color-ts-9 customer" id="CUSTOMER">
            <div class=" container-flex nowrap-align-center fitems-spacearound">
                <article class="col-item-flex-3">
                    <h2 class="c-2 f-segoe-bn color-ticstark-white">CLIENTES</h2>
                </article>
                <div class="col-item-9">
                    <div class="container-flex flexflow-r-pl fitems-spacearound">
                        <article class="col-item-flex-2">
                            <img class="img-full-custom" src="assets/img/svg-images/ibm.svg">
                        </article>
                        <article class="col-item-flex-2">
                            <img class="img-full-custom" src="assets/img/svg-images/logo-platzi.png">
                        </article>
                        <article class="col-item-flex-2">
                            <img class="img-full-custom" src="assets/img/svg-images/nasa-6.svg">
                        </article>
                    </div>
                </div>

            </div>
        </section>

        <!-- FORMULARIO DE CONTACTO (PERMITE CAMBIOS EN ELEMENTOS CON FLEX)-->
        <section class="container-fluido" id="FAQ">
            <div class="container-flex">
                <div class="col-item-flex-4 background-color-ts-8">
                    <div class="sr3 container-flex flexflow-c-ol nowrap-align-center">
                        <h2 class="c-2 f-segoe-bn color-ticstark-6">CONTACTO</h2>
                        <ul class="lista-none">
                            <li>info@ticstark.com</li>
                            <li>3003422392</li>
                            <li>www.ticstark.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-item-flex-8 background-color-ts-7">
                    <div class="sr3 container-flex color-ticstark-6">
                        <h2 class="c-3 f-segoe-r ">ENVÍANOS TU MENSAJE</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="container-fluido"></footer>
</body>

</html>