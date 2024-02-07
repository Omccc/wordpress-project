<div class="col-6 col-s-9">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    <h1><?php the_title(); ?></h1>

    <p><?php the_post_thumbnail(); ?></p>

    <p><?php the_content(); ?></p>

  <?php endwhile; ?>

  <?php the_posts_pagination(); ?>

  <?php else : ?>
    <p><?php esc_html_e( 'No posts found', 'your-theme-text-domain' ); ?></p>
  <?php endif; ?>

</div>
