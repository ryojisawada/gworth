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
        <div class="topics-list">
          <ul>
            <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post();
            ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <time><?php the_time('Y.m.d') ?></time>
                    <?php the_title(); ?>
                  </a>
                </li>
            <?php endwhile;
            endif;
            wp_reset_query(); ?>
          </ul>
        </div>
        <!-- /.topics-list -->


        <?php wp_pagenavi(); ?>
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-contents -->
  </article>
</main>

<?php get_footer(); ?>