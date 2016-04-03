<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="item">
  <div class="row">
    <div class="col-xs-12">

      <div class="headline"><h1><?php the_title(); ?></h1></div>

      <div class="page-content">
        <?php the_content(); ?>
      </div>


    </div>
  </div>
</div>








<?php endwhile; endif; ?>


<?php wp_pagenavi(); ?>

<?php get_footer(); ?>
