<?php get_header();?>

<section class="container-grid background-single-page" id="PORTADA">
    <?php include "style.php"; ?>
<div class="titular-single-page">
        <h1 class="cool-font a-blog-page">
            <?php the_title();?>
        </h1>
    </div>
</section>


<section class="container-grid single-page">
    <?php get_sidebar();?>
    <article class="container-grid hijo-1-single-page">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <h1 class="cool-font b-blog-page">
            <?php the_title();?>
        </h1>
        <span class="text_categoria">
            <?php the_category();?>
        </span>
        <span class="date-single-page">
            <?php echo get_the_date(); ?>
        </span>

        <div class="parrafo-single-page cool-font">
            <?php the_content();?>
        </div>
        <?php endwhile; else: ?>
        <h4 class="t-center">No se encontraron noticias.</h4>
        <?php endif; ?>
    </article>
</section>
<?php get_footer();?>