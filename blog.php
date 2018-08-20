<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <title>Ticstark - Marketing, Social Media y Software</title>
    <meta name="description" content="Impulsamos tu marca y negocio en redes sociales de manera profesional, aplicando estrategias avanzadas de posicionamiento de marca y campañas publicitarias.">
    <link rel="icon" href="assets/img/svg-images/favicon.svg" sizes="16x16 24x24 36x36 48x48">
    <link href="assets/css/ticstark-reset.css" rel="stylesheet">
    <link href="assets/css/ticstark-grid.css" rel="stylesheet">
    <link href="assets/css/ticstark-layout.css" rel="stylesheet">
    <link href="assets/css/ticstark-style.css" rel="stylesheet">
    <link href="assets/css/video-header.css" rel="stylesheet">
    <link href="assets/css/font.css" rel="stylesheet">
    <link href="assets/css/ticstark-custom-style.css" rel="stylesheet">
    <link href="assets/css/responsive/mediaqueries.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG"
        crossorigin="anonymous">
</head>

<body>
    <!-- HEADER -->
    <header class="container-flex header-fix nowrap-align-center header-mobile" id="HEADER">
        <!-- LOGOTIPO -->
        <div class="col-item-flex-2">
            <figure class="header-logo">
                <a href="#PORTADA">
                    <img class="img-full" src="assets/img/svg-images/logo-white.svg">
                </a>
            </figure>
        </div>

        <!-- BARRA DE NAVEGACIÓN -->
        <div class="col-item-flex-8">
            <nav class="header-nav h-blog">
                <ul>
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="#SERV">QUÉ HACEMOS</a>
                    </li>
                    <li>
                        <a href="blog.php">BLOG</a>
                    </li>
                    <li>
                        <a href="#FAQ">CONTACTENOS</a>
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
            <figure class="container-flex flexflow-c-ol nowrap-align-center all-color-ticstark-white">
                <div class="col-item-flex-5">
                    <h1 class="f-segoe-sb a-blog prueba">TICSTARK</h1>
                </div>
                <div class="col-item-flex-5">
                    <h2 class="f-segoe-sl-webkit b-blog">BLOG</h1>
                </div>
                <a class="boton-arrow" href="#" onclick="slideArrow()">
                    <img class="img-full" src="assets/img/svg-images/arrows.svg">
                </a>
            </figure>
        </div>
    </section>

    <!-- BLOG -->
    <style>
        .container-grid {
            grid-template-columns: repeat(3, 24%);
        }
    </style>
    <section class="blog" id="BLOG">
        <div class="text-container">
            <!-- <h2 class="c-2 t-center f-segoe-s color-ticstark-black">ÚLTIMAS ENTRADAS</h2> -->
        </div>

<!-- BLOG CONTENIDO -->
<div class="container-grid blog fitems-start">

<!-- TARJETA #1 -->
<article class="card-container card-level-1">
<div class="card-cabeza">
<img src="assets/img/compreso/paths/path-0-5.jpg">
<div class="categoria">
<span>Estrategias</span>
</div>
</div>

<div class="card-cuerpo">
<div class="cont-titular">
<h1>Claves para aumentar el tráfico orgánico en su estrategia de contenidos.</h1>
</div>
<div class="cont-texto">
<p>Aunque siempre hemos hecho hincapié en que la creación de contenidos innovadores y de calidad, son básicamente la clave del éxito en una estrategia de content marketing. Debe saber que, además de…</div>
<div class="cont-button">
<a href="#">LEER MÁS</a>
</div>
<hr>
<div class="cont-fecha">
<span>18, Agosto, 2018</span>
</div>
</div>
</article>

<!-- TARJETA #1 -->
<article class="card-container card-level-2">
<div class="card-cabeza">
<img src="assets/img/compreso/paths/path-0-6.jpg">
<div class="categoria">
<span>Marketing</span>
</div>
</div>

<div class="card-cuerpo">
<div class="cont-titular">
<h1>AUMENTE EL NÚMERO DE LEADS EN SU EMPRESA CON CONTENIDOS DE VALOR.</h1>
</div>
<div class="cont-texto">
<p>El contenido nos diferencia de la competencia y nos ayuda a tener un posicionamiento web efectivo.
Como agencia digital lo sabemos y se lo demostramos a nuestros clientes. Actualmente, las…</p>
</div>
<div class="cont-button">
<a href="#">LEER MÁS</a>
</div>
<hr>
<div class="cont-fecha">
<span>18, Agosto, 2018</span>
</div>
</div>
</article>

<!-- TARJETA #1 -->
<article class="card-container card-level-3">
<div class="card-cabeza">
<img src="assets/img/compreso/paths/path-0-4.jpg">
<div class="categoria">
<span>Tecnología</span>
</div>
</div>

<div class="card-cuerpo">
<div class="cont-titular">
<h1>Twitter, la red social que difunde mayor número de noticias falsas.</h1>
</div>
<div class="cont-texto">
<p>La propagación de contenidos e información falsa a través de redes sociales es una tendencia que
está en aumento y cada día está generando mayores impactos en la toma de...</p>
</div>
<div class="cont-button">
<a href="#">LEER MÁS</a>
</div>
<hr>
<div class="cont-fecha">
<span>18, Agosto, 2018</span>
</div>
</div>
</article>

<!-- TARJETA #1 -->
<article class="card-container card-level-1">
<div class="card-cabeza">
<img src="assets/img/compreso/paths/path-0-5.jpg">
<div class="categoria">
<span>Estrategias</span>
</div>
</div>

<div class="card-cuerpo">
<div class="cont-titular">
<h1>B2B Content Marketing: potenciando la competencia</h1>
</div>
<div class="cont-texto">
<p>Las exigencias de las audiencias fervientes y ávidas de conocimiento han obligado a las empresas
a robustecer y reconsiderar su oferta de valor frente a temas como la elaboración y…</p>
</div>
<div class="cont-button">
<a href="#">LEER MÁS</a>
</div>
<hr>
<div class="cont-fecha">
<span>18, Agosto, 2018</span>
</div>
</div>
</article>

<!-- TARJETA #1 -->
<article class="card-container card-level-2">
<div class="card-cabeza">
<img src="assets/img/compreso/paths/path-1.png">
<div class="categoria">
<span>E-Commerce</span>
</div>
</div>

<div class="card-cuerpo">
<div class="cont-titular">
<h1>¿POR QUÉ APLICAR LA ANALÍTICA WEB EN SU E-COMMERCE?</h1>
</div>
<div class="cont-texto">
<p>Todos los resultados son medibles y la analítica web cumple un papel importante en este hecho. Le
contamos qué es y cuáles son las recomendaciones para usar estas métricas en…</p>
</div>
<div class="cont-button">
<a href="#">LEER MÁS</a>
</div>
<hr>
<div class="cont-fecha">
<span>18, Agosto, 2018</span>
</div>
</div>
</article>


<!-- TARJETA #1 -->
<article class="card-container card-level-3">
<div class="card-cabeza">
<img src="assets/img/compreso/paths/path-0-1.jpg">
<div class="categoria">
<span>Fechas</span>
</div>
</div>

<div class="card-cuerpo">
<div class="cont-titular">
<h1>DÍA DE LA MUJER: ¿CUÁL ES SU IMPACTO EN EL MUNDO DIGITAL?</h1>
</div>
<div class="cont-texto">
<p>Este 8 de marzo se conmemora en todo el mundo el Día Internacional de la Mujer, una fecha que celebra
su valentía, coraje y papel en la sociedad. En el que cumplen como uno de lo...</div>
<div class="cont-button">
<a href="#">LEER MÁS</a>
</div>
<hr>
<div class="cont-fecha">
<span>19, Agosto, 2018</span>
</div>
</div>
</article>
</div>
</section>

    <!-- FOOTER -->
    <footer class="container-fluido">
        <section class="container-flex flexflow-c-ol">
            <div class="background-color-ts-10 container-flex flexflow-r-ol all-color-ticstark-white fitems-spacearound">
                <div class="col-item-flex-2 sr5">
                    <h3 class="f-segoe-sb e">UBICACIÓN</h3>
                    <ul class="lista-none f all-color-n">
                        <li>
                            <a href="mailto:info@ticstark.com">info@ticstark.com</a>
                        </li>
                        <li>
                            <a href="tel:+573003422392">+57 300-3422392</a>
                        </li>
                        <li>
                            <a>Cra 11 #30-66</a>
                        </li>
                        <li>
                            <a>Montería-Córdoba</a>
                        </li>
                    </ul>
                </div>
                <div class="col-item-flex-2 sr5">
                    <h3 class="f-segoe-sb e">SERVICIOS</h3>
                    <ul class="lista-none f all-color-n">
                        <li>
                            <a>Identidad de Marca</a>
                        </li>
                        <li>
                            <a>Marketing Digital</a>
                        </li>
                        <li>
                            <a>Redes Sociales</a>
                        </li>
                        <li>
                            <a>Diseño Web</a>
                        </li>
                        <li>
                            <a>Desarrollo eCommerce</a>
                        </li>
                    </ul>
                </div>
                <div class="col-item-flex-2 sr5">
                    <h3 class="f-segoe-sb e">AGENCIA</h3>
                    <ul class="lista-none f all-color-n">
                        <li>
                            <a>Blog</a>
                        </li>
                        <li>
                            <a>¿Quienes somos?</a>
                        </li>
                        <li>
                            <a>Trabaje con nosotros.</a>
                        </li>
                        <li>
                            <a>Contacto.</a>
                        </li>
                        <li>
                            <a>Política de privacidad y manejo de datos.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-item-flex-2 sr5">
                    <h3 class="f-segoe-sb e">NOSOTROS</h3>
                    <ul class="lista-none f all-color-n">
                        <li>
                            <a>Esteban Sanchez (Marketer)</a>
                        </li>
                        <li>
                            <a>Carlos Marsiglia (Product Design)</a>
                        </li>
                        <li>
                            <a>Kevin Mena (Administración)</a>
                        </li>
                        <li>
                            <a>Andrés Benitez (Diseñador)</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="background-color-ts-9 f-segoe-sb color-ticstark-7 d">COPYRIGHT © 2018 TICSTARK. TODOS LOS DERECHOS RESERVADOS.</div>
        </section>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>