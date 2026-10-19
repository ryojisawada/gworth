<?php get_header(); ?>

<main class="main">
  <article>
    <div class="page-header">
      <div class="wrap">
        <h1><?php echo strtoupper(get_post_field('post_name', get_the_ID())); ?><span><?php the_title(); ?></span></h1>
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-header -->

    <div class="page-contents">
      <div class="wrap">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-contents -->
  </article>
</main>

<?php get_footer(); ?>
