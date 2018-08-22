
        <!-- TARJETA # 1 -->
        <article class="card-container <?php nivel_tarjeta();?>">
        <div class="card-cabeza">            
        <div class="imagen">
                    <a href="<?php the_permalink();?>">
                    <?php 
                    if (has_post_thumbnail()){the_post_thumbnail($nivel_tarjeta);}
                    ?>
                    </a>
                </div>
                <div class="categoria">
                    <span class="text_categoria">
                        <?php the_category();?>
                    </span>
                </div>
            </div>
            <div class="card-cuerpo">
                <div class="main-content">
                    <div class="cont-titular">
                        <h1>
                            <a class="t-center" href="<?php the_permalink();?>">
                                <?php the_title();?> 
                            </a>
                        </h1>
                    </div>
                    <div class="cont-texto">
                        <p>
                            <?php the_excerpt();?>
                        </p>
                    </div>
                </div>
                <div class="main-content">
                    <div class="cont-button">
                        <a href="<?php the_permalink();?>">LEER MÁS</a>
                    </div>
                    <div class="cont-fecha">
                        <hr>
                        <span>
                            <?php echo get_the_date(); ?>
                        </span>
                    </div>
                </div>
            </div>
        </article>
        