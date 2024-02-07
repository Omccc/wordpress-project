<?php /*Template Name: Page With Sidebar */ ?>


<?php get_header() ?>

<div id="searchResults">
<p> Resultats pour "<?php echo get_query_var('s'); ?></p>"
  <?php
   global $wp_query;
  $total_results = $wp_query->found_posts;
  echo "La recherche a trouvé " . $total_results . "resultats ";
  ?>

</p>
</div>
<?php get_template_part('templates/posts', 'loop') ?>


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