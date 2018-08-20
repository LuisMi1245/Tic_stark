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
-->

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
            <nav class="header-nav h-home">
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
                <div class="col-item-auto">
                    <h1 class="f-segoe-sb a prueba">CREATIVIDAD</h1>
                </div>
                <div>
                    <h2 class="f-segoe-sl-webkit b">NUESTRA PRIORIDAD</h1>
                </div>
                <div>
                    <h2 class="f-segoe-r c">MARCA - DISEÑO - DESARROLLO</h2>
                </div>
                <div class="boton">
                    <a class="button f-segoe-rn" href="sketch.html">LEER MÁS</a>
                </div>
            </figure>
        </div>
    </section>

    <!-- SERVICIOS DE TICSTARK -->
    <section class="container-flex flexflow-r-pl">
        <div class="bloque-servicios col-item-flex-3">
            <figure class="efecto-caja">
                <img class="img-full" src="assets/img/compreso/Page1.png" alt="Servicios de ticstark">
            </figure>
        </div>
        <div class="bloque-servicios col-item-flex-3">
            <figure class="efecto-caja">
                <img class="img-full" src="assets/img/compreso/Page2.png" alt="Servicios de ticstark">
            </figure>
        </div>
        <div class="bloque-servicios col-item-flex-3">
            <figure class="efecto-caja">
                <img class="img-full" src="assets/img/compreso/Page3.png" alt="Servicios de ticstark">
            </figure>
        </div>
        <div class="bloque-servicios col-item-flex-3">
            <figure class="efecto-caja">
                <img class="img-full" src="assets/img/compreso/Page4.png" alt="Servicios de ticstark">
            </figure>
        </div>
    </section>

    <!-- SERVICIOS DETALLADOS -->
    <section class="container-flex background-color-ts-6" id="SERV">
        <article class="col-item-flex-5">
            <img class="img-relative-3" src="assets/img/compreso/paths/path-5.png" alt="servicios">
        </article>
        <article class="col-item-flex-8">
            <div class="container-flex flexflow-c-ol sr">
                <div class="col-item-auto">
                    <h1 class="f-segoe-sl-webkit a-2">IDENTIDAD DE MARCA</h1>
                </div>
                <div class="col-item-auto">
                    <p class="f-segoe-r b-2">Le damos identidad a tu marca, creando reconocimiento y captación en los usuarios, teniendo claro el
                        segmento de mercado y tu público objetivo.</p>
                </div>
            </div>
        </article>
    </section>

    <section class="container-flex background-white">
        <article class="col-item-flex-8">
            <div class="container-flex flexflow-c-ol sr">
                <div class="col-item-auto">
                    <h1 class="f-segoe-sl-webkit a-2">MARKETING DIGITAL</h1>
                </div>
                <div class="col-item-auto">
                    <p class="f-segoe-r b-2">Diseñamos
                        <strong class="b-2">estrategias para llegar a tu público verdadero</strong>, optimizando tus canales de ventas para que
                        tus clientes compren sin dolores de cabezas.
                        <br> Siempre ofreciendo lo que ellos necesitan de tu marca.</p>
                </div>
            </div>
        </article>
        <article class="col-item-flex-5">
            <img class="img-relative-3" src="assets/img/compreso/paths/path-6.png" alt="servicios">
        </article>
    </section>

    <section class="container-flex background-color-ts-7">
        <article class="col-item-flex-5">
            <img class="img-relative-3" src="assets/img/compreso/paths/path-7.png" alt="servicios">
        </article>
        <article class="col-item-flex-8">
            <div class="container-flex flexflow-c-ol sr">
                <div class="col-item-auto">
                    <h1 class="f-segoe-sl-webkit a-2">REDES SOCIALES</h1>
                </div>
                <div class="col-item-auto">
                    <p class="f-segoe-r b-2">Creamos contenido para las comunidades digitales, en Facebook e Instagram, que se identifiquen con tu
                        marca.
                    </p>
                </div>
            </div>
        </article>
    </section>

  <!-- BLOG (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
  <section class="blog" id="BLOG">
        <div class="text-container">
            <h2 class="c-2 f-segoe-bn color-ticstark-black">BLOG</h2>
        </div>
        <!-- BLOG CONTENIDO -->
        <div class="container-grid fitems-center">

            <!-- TARJETA # 1 -->
            <article class="card-container card-level-3">
                <div class="card-cabeza">
                    <img src="assets/img/compreso/paths/path-0.jpg">
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

            <!-- TARJETA # 1 -->
            <article class="card-container card-level-3">
                <div class="card-cabeza">
                    <img src="assets/img/compreso/paths/path-0-1.jpg">
                    <div class="categoria">
                        <span>Fechas</span>
                    </div>
                </div>

                <div class="card-cuerpo fitems-start">
                    <div class="cont-titular">
                        <h1>DÍA DE LA MUJER: ¿CUÁL ES SU IMPACTO EN EL MUNDO DIGITAL?</h1>
                    </div>
                    <div class="cont-texto">
                        <p>Este 8 de marzo se conmemora en todo el mundo el Día Internacional de la Mujer, una fecha que celebra su valentía, coraje y papel en la sociedad. En el que cumplen como uno de lo...</div>
                    <div class="cont-button">
                        <a href="#">LEER MÁS</a>
                    </div>
                    <hr>
                    <div class="cont-fecha">
                        <span>19, Agosto, 2018</span>
                    </div>
                </div>
            </article>

            <!-- TARJETA # 1 -->
            <article class="card-container card-level-3">
                <div class="card-cabeza">
                    <img src="assets/img/compreso/paths/path-0-2.jpg">
                    <div class="categoria">
                        <span>Tecnología</span>
                    </div>
                </div>

                <div class="card-cuerpo">
                    <div class="cont-titular">
                        <h1>Plataformas digitales: últimas innovaciones</h1>
                    </div>
                    <div class="cont-texto">
                        <p>La implementación de nuevas funcionalidades, el desarrollo de nuevos servicios de mensajería instantánea y las nuevas métricas para los anunciantes, son algunas de las innovaciones con las que inician el nuevo...</p>
                    </div>
                    <div class="cont-button">
                        <a href="#">LEER MÁS</a>
                    </div>
                    <hr>
                    <div class="cont-fecha">
                        <span>14, Agosto, 2018</span>
                    </div>
                </div>
            </article>
            <!-- TARJETA # 1 -->
            <article class="card-container card-level-3">
                <div class="card-cabeza">
                    <img src="assets/img/compreso/paths/path-0-3.jpg">
                    <div class="categoria">
                        <span>Redes Sociales</span>
                    </div>
                </div>

                <div class="card-cuerpo">
                    <div class="cont-titular">
                        <h1>No sobredimensione el nuevo algoritmo de Facebook y reafirme su estrategia digital</h1>
                    </div>
                    <div class="cont-texto">
                        <p>Con la intensión de regresar a sus orígenes, Facebook decidió volver a darle prioridad a la cercanía entre las personas y a la construcción de relaciones. Aunque romántica la idea,…</p>
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
        </div>
    </section>
    
    <!-- PARTNERS/CLIENTES (PERMITE CAMBIOS EN ELEMENTOS CON FLEX) -->
    <section class="background-color-ts-9" id="CUSTOMER">
        <div class=" container-flex nowrap-align-center">
            <article class="col-item-flex-3 customer bloque-cliente-mobile-1">
                <h2 class="c-2 c-mobile f-segoe-bn color-ticstark-white">CLIENTES</h2>
            </article>

            <div class="col-item-flex-9 customer bloque-cliente-mobile-2">
                <div class="container-flex flexflow-r-pl fitems-spacearound cliente-mobile">
                    <article class="col-item-flex-2 bloque-cliente">
                        <img class="img-relative-2" src="assets/img/svg-images/customers/logo.png" alt="imagen cliente">
                    </article>
                    <article class="col-item-flex-2 bloque-cliente">
                        <img class="img-relative-2" src="assets/img/svg-images/customers/logo-2.png" alt="imagen cliente">
                    </article>
                    <article class="col-item-flex-2 bloque-cliente">
                        <img class="img-relative-2" src="assets/img/svg-images/customers/logo.png" alt="imagen cliente">
                    </article>
                    <article class="col-item-flex-2 bloque-cliente">
                        <img class="img-relative-2" src="assets/img/svg-images/customers/logo-2.png" alt="imagen cliente">
                    </article>
                </div>
            </div>

        </div>
    </section>

    <!-- FORMULARIO DE CONTACTO (PERMITE CAMBIOS EN ELEMENTOS CON FLEX)-->
    <section class="container-fluido" id="FAQ">
        <div class="container-flex">
            <div class="col-item-flex-4 background-color-ts-8 sr4">
                <div class="container-flex flexflow-c-ol">
                    <h2 class="c-2 f-segoe-bn color-ticstark-6 g1">CONTACTO</h2>
                    <ul class="lista-none g all-color-6">
                        <li>
                            <a class="faq-mobile-1" href="mailto:info@ticstark.com">info@ticstark.com</a>
                        </li>
                        <li>
                            <a class="faq-mobile-1" href="tel:+573003422392">+57 300-3422392</a>
                        </li>
                        <li>
                            <a class="faq-mobile-1" href="www.ticstark.com">www.ticstark.com</a>
                        </li>
                        <li>
                            <h2 class="f-segoe-bn color-ticstark-6 h faq-mobile-1">Redes Sociales</h2>
                            <div class="container-flex icons">
                                <div class="col-item-flex-2 subicons">
                                    <a href="https://www.facebook.com/ticstarksas/" target="_blank">
                                        <img class="img-full" src="assets/img/svg-images/facebook.svg" alt="logo facebook">
                                    </a>
                                </div>
                                <div class="col-item-flex-2 subicons">
                                    <a href="https://twitter.com/Ticstarksas" target="_blank">
                                        <img class="img-full" src="assets/img/svg-images/twitter.svg" alt="logo twitter">
                                    </a>
                                </div>
                                <div class="col-item-flex-2 subicons">
                                    <a href="https://www.instagram.com/monteriavendeoficial/">
                                        <img class="img-full" src="assets/img/svg-images/instagram.svg" alt="logo instagram">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-item-flex-8 background-color-ts-7 sr4">
                <h2 class="c-3 f-segoe-rn color-ticstark-6">ENVÍANOS TU MENSAJE</h2>
                <form class="container-flex flexflow-c-ol margin-3">
                    <!-- NOMBRES / EMAIL -->
                    <div class="col-item-auto">
                        <div class="container-flex flexflow-r-ol fitems-spacebetween">
                            <input class="col-item-custom-1" id="nombre" placeholder="Nombre" type="text">
                            <input class="col-item-custom-1" id="email" placeholder="Correo Electrónico" type="email">
                        </div>
                    </div>

                    <!-- MENSAJE -->
                    <textarea class="col-item-auto" id="mensaje" name="mensaje" rows="7" placeholder="Mensaje"></textarea>
                    <!-- ENVIAR -->
                    <input class="col-item-auto button f-segoe-sl-webkit t-center" type="submit" value="Enviar">
                </form>
            </div>
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