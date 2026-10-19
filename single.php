<?php get_header(); ?>

<main class="main">
  <article>
    <div class="page-header">
      <div class="wrap">
        <span class="page-header__ttl">TOPICS<span>お知らせ</span></span>
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-header -->

    <div class="page-contents">
      <div class="wrap">
        <time class="post-time"><?php the_time('Y.m.d') ?></time>
        <h1 class="post-ttl"><?php the_title() ?></h1>

        <div class="post-contents">
          <?php the_content(); ?>
        </div>
        <!-- /.post-contents -->

        <div class="prev-next">
          <div class="prev-next__item">
            <?php previous_post_link(); ?>
          </div>
          <!-- /.prev-next__item -->

          <div class="prev-next__item">
            <?php next_post_link(); ?>
          </div>
          <!-- /.prev-next__item -->
        </div>
        <!-- /.prev-next -->
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-contents -->
  </article>
</main>

<?php get_footer(); ?>