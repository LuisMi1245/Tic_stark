
<!-- FORMULARIO DE CONTACTO (PERMITE CAMBIOS EN ELEMENTOS CON FLEX)-->
<section class="container-fluido" id="FAQ">
    <div class="container-flex">
        <div class="col-item-flex-4 background-color-ts-8 sr4">
            <div class="container-flex flexflow-c-ol">
                <h2 class="c-2 f-segoe-bn color-ticstark-6 g1">CONTACTO</h2>
                <ul class="lista-none g all-color-6">
                    <li>
                        <a href="mailto:info@ticstark.com">info@ticstark.com</a>
                    </li>
                    <li>
                        <a href="tel:+573003422392">+57 300-3422392</a>
                    </li>
                    <li>
                        <a href="www.ticstark.com">www.ticstark.com</a>
                    </li>
                    <li>
                        <h2 class="f-segoe-bn color-ticstark-6 h">Redes Sociales</h2>
                        <div class="container-flex icons">
                            <div class="col-item-flex-2 subicons">
                                <a href="https://www.facebook.com/ticstarksas/" target="_blank">
                                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/facebook.svg" alt="logo facebook">
                                </a>
                            </div>
                            <div class="col-item-flex-2 subicons">
                                <a href="https://twitter.com/Ticstarksas" target="_blank">
                                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/twitter.svg" alt="logo twitter">
                                </a>
                            </div>
                            <div class="col-item-flex-2 subicons">
                                <a href="https://www.instagram.com/monteriavendeoficial/">
                                    <img class="img-full" src="<?php bloginfo('template_url')?>/assets/img/svg-images/instagram.svg" alt="logo instagram">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-item-flex-8 background-color-ts-7 sr4">
            <h2 class="c-3 f-segoe-rn color-ticstark-6">ENVÍANOS TU MENSAJE</h2>
          
            <?php FORM ?>
            <form class="container-flex flexflow-c-ol margin-3">
                <!-- NOMBRES / EMAIL -->
                <div class="col-item-auto">
                    <div class="container-flex flexflow-r-ol fitems-spacebetween">
                        <input class="col-item-custom-1" id="nombre" placeholder="Nombre" type="text">
                        <input class="col-item-custom-1" id="email" placeholder="Correo Electrónico" type="email">
                    </div>
                </div>

                <!-- MENSAJE -->
                <textarea class="col-item-auto" id="mensaje" name="mensaje" rows="9" placeholder="Mensaje"></textarea>
                <!-- ENVIAR -->
                <input class="col-item-auto button f-segoe-sl-webkit t-center" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</section>