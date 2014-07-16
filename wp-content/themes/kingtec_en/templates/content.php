<article <?php post_class(); ?>>
  <header>
    <p class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
       <div class="entry-summary">
      <?php the_excerpt(); ?>
      </div>
  </header>
     <?php get_template_part('templates/entry-meta'); ?>
</article>
<hr>