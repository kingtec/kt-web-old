<?php while (have_posts()) : the_post(); ?>

<?php 

$news = get_category_by_slug('news');
$updates = get_category_by_slug('updates');
$industry = get_category_by_slug('industry');
$careers = get_category_by_slug('careers');

$news_id = $news->term_id;
$updates_id = $updates->term_id;
$industry_id = $industry->term_id;
$careers_id = $industry->term_id;


if (in_category(array($news_id,$updates_id,$industry_id))) { 

  get_template_part('templates/news', 'header');

  } elseif (in_category($careers_id)) {

  get_template_part('templates/careers', 'header');

  } 

  ?>



<?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div id="featured-image" style="background-image: url('<?php echo $image[0]; ?>')">
        </div>
      <?php endif; ?>

<div class="wrap container" role="document">

  <div class="content row news">
    <article <?php post_class(); ?>>

          <p class="entry-title center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
           <?php get_template_part('templates/entry-meta'); ?>
           
             <div class="entry-content">
                <?php the_content(); ?>
              </div>


    </article>
  </div>

  <div class="row contact tpad-30">

    <div class="col-md-12">

    <?php 

      if (in_category(5)) { 

        ?>

        <h4>如果您对此职位有兴趣，可用以下的联系表单把您的联系方式以及履历写一封信给我们。</h4>

        <?php

        echo do_shortcode('[contact-form-7 id="150" title="招聘联系表单"]'); 
      }

     ?>

    </div>
  </div>

</div>

<?php endwhile; ?>
