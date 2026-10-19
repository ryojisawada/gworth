<?php get_header(); ?>

<main class="main">
  <article>
    <div class="page-header page-header--smart-house">
      <div class="wrap">
        <h1>SMART HOUSE<span>スマートハウス事業</span></h1>
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
