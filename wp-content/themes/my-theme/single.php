<?php /*Template Name: Page With Sidebar */ ?>


<?php get_header() ?>


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
<?php get_template_part('templates/comments', '') ?>

<div class="col-3 col-s-12">

  <div class="aside">
    <h2>What?</h2>
    <p>Yes why not and if then else...</p>
    <h2>Where?</h2>
    <p>Whatever you like whatever you go...</p>
    <h2>How?</h2>
    <p>Please don't ask me how or why... just because...</p>
  </div>
</div>
</div>

<?php get_footer() ?>