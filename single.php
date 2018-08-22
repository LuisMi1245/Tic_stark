<?php get_header();?>

<section class="container-grid background-color-ts-3-1" id="PORTADA">
    
<section>
  <div class="titular-single-page">
        <h1 class="f-segoe-sl a-blog-page">
            <?php the_title();?>
        </h1>
    </div>
</section>


<section class="container-grid single-page">
<?php get_sidebar();?>
<article class="container-grid hijo-1-single-page">
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<div class="img-single-page">
<?php 
the_post_thumbnail();
?>
</div>

<span class="text_categoria">
<?php the_category();?>
</span>
<span>
<?php echo get_the_date(); ?>
</span>

<div class="parrafo-single-page f-all-segoe-rn">
<?php the_content();?>
</div>


<?php endwhile; else: ?>
<h4 class="t-center">No se encontraron noticias.</h4>
<?php endif; ?>
</article>
</section>
</section>
<?php get_footer();?>