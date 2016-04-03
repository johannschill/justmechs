<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="item">
  <div class="row">
    <div class="col-xs-12 reset-padding">

      <div class="headline"><h1><?php the_title(); ?></h1></div>

      <div class="item-content">
        <div class="item-content-img">
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

            <?php if ( has_post_thumbnail() ) {
            	the_post_thumbnail();
            } ?>

          </a>

        </div>
      </div>

      <div class="item-cta ">
        <a class="gumroad-button" href="<?php the_field('gumroad_url'); ?>"><?php the_field('gumroad_button_text'); ?></a>
      </div>

    </div>
  </div>
</div>








<?php endwhile; endif; ?>


<?php wp_pagenavi(); ?>

<?php get_footer(); ?>
