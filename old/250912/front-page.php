<?php get_header(); ?>

<main class="main">
  <article>
    <section class="mv">
      <div class="mv__img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/top/sp/mv.png">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv.png" alt="IS THIS LIVE? IS THIS COOL?" loading="lazy">
        </picture>
      </div>
      <!-- /.mv__img -->

      <div class="mv__txt">
        <div class="mv__txt__wrap">
          <p>
            G.WORTHは<br class="pc">「愛」と「イケてる」を<br>探求、実践することで<br class="pc">ビジネスの再生と<br>サスティナビリティの<br class="pc">向上を目指す会社です。
          </p>
        </div>
        <!-- /.mv__txt__wrap -->
      </div>
      <!-- /.mv__txt -->
    </section>


    <section class="topics wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <h2 class="topics__ttl">TOPICS</h2>
      </div>
      <!-- /.wrap -->

      <div class="topics-top">
        <div class="wrap">
          <div class="topics-list">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
            );
            $wp_query = new WP_Query($args); ?>
            <?php if ($wp_query->have_posts()) : ?>
              <ul>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <time><?php the_time('Y.m.d') ?></time>
                      <p><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
          </div>
          <!-- /.topics-list -->

          <div class="topics-top__link">
            <a href="<?php echo home_url('topics'); ?>">TOPICS一覧へ</a>
          </div>
          <!-- /.topics-top__link -->
        </div>
        <!-- /.wrap -->
      </div>
      <!-- /.topics-top -->
    </section>

    <section class="message wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <h2 class="common-ttl">MESSAGE<span>代表メッセージ</span></h2>

        <div class="img-col">
          <div class="img-col__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/message.jpg" alt="代表写真" loading="lazy">
          </div>
          <!-- /.img-col__img -->

          <div class="img-col__txt">
            <h3 class="img-col__ttl">商売人（あきない）の<br>可能性を信じる</h3>
            <p>若い会社だからこそ、古い物を大切にしたい。<br>私の父・祖父・祖母はそれぞれ会社を経営しており、代々事業家の家系でした。イメージとしては現代のようなビジネスというより、まさに「地元の商売人」という感じです。</p>

            <p>そんな父の影響や物が少かったころから自然に大切にしてきた思いが「人のつながりを大切する」ということでした。</p>

            <p>熾烈な営業業界、利益のみを優先し取引先を乗り換えることは当たり前の中で私たちはクライアントとの関係性を最優先で考え、目先の利益ではなく「クライアントの事業成長にいかにコミットできるか」にこだわり実績を積み上げてきました。その甲斐もあり、様々な企業様からリピートをいただき、会社を成長させることができました。<br>今思えば、幼少期から自然にあった「人のつながりを大切にする」という思いが「理念」となり、会社作りに良い影響を与えていたのかもしれません。</p>

            <p>まだまだ若輩者では御座いますが、今後もこの「商売人」としてマインドを忘れることなく、皆様からのご支援に励まされ、更なる成長を目指していきます。<br>今後とも当社を何卒よろしくお願い申し上げます。</p>

            <span class="img-col__name"><span>代表取締役</span><img src="<?php echo get_template_directory_uri(); ?>/images/common/president-name.svg" alt="高谷 凌斗" loading="lazy"></span>
          </div>
          <!-- /.img-col__txt -->
        </div>
        <!-- /.img-col -->
      </div>
      <!-- /.wrap -->
    </section>


    <section class="mission wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <h2 class="common-ttl common-ttl--right">MISSION<span>ミッション</span></h2>

        <div class="img-col img-col--reverse">
          <div class="img-col__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/mission.jpg" alt="写真" loading="lazy">
          </div>
          <!-- /.img-col__img -->

          <div class="img-col__txt">
            <h3 class="img-col__ttl">想いを守り伝える</h3>
            <p>たくさんのものがあふれるこの世の中ではどんなに素晴らしくても広がらないものがあります。<br>でも、本当に愛を持って生まれたものであれば、それは必ず誰かが、守り遺さないと信じています。<br>私たちは愛のある商品・サービスを見つけ、広げ、そして次の世代に託し残していくことをミッションに掲げます。</p>

            <div class="view-more-btn">
              <a href="<?php echo home_url('mission'); ?>">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow_diagonal.svg" alt="矢印" loading="lazy">
              </a>
            </div>
            <!-- /.view-more-btn -->
          </div>
          <!-- /.img-col__txt -->
        </div>
        <!-- /.img-col -->
      </div>
      <!-- /.wrap -->
    </section>


    <section class="about wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <h2 class="common-ttl">ABOUT US<span>私たちについて</span></h2>

        <div class="img-col">
          <div class="img-col__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/about.jpg" alt="写真" loading="lazy">
          </div>
          <!-- /.img-col__img -->

          <div class="img-col__txt">
            <h3 class="img-col__ttl">G.WORTHについて</h3>
            <p>私たちは、エコ住宅設備販売支援、OA機器販売支援を行うセールスデベロップメント事業の他、SNS採用マーケティング事業・Mobility Box情報を行うセールスマーケティング企業です。<br>セールスを強化したいけど、リソースが足りない、関西圏のセールスを強化したいけどローカルフィットが難しいなど、マーケティングにおける販売戦略をトータルで支援しております。</p>

            <div class="view-more-btn">
              <a href="#">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow_diagonal.svg" alt="矢印" loading="lazy">
              </a>
            </div>
            <!-- /.view-more-btn -->
          </div>
          <!-- /.img-col__txt -->
        </div>
        <!-- /.img-col -->
      </div>
      <!-- /.wrap -->
    </section>


    <section class="service wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <h2 class="common-ttl common-ttl--center">SERVICE<span>セールスデベロップメント事業</span></h2>

        <div class="img-list">
          <div class="img-list__item">
            <div class="img-list__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/service_01.jpg" alt="写真" loading="lazy">
            </div>
            <!-- /.img-list__img -->

            <div class="img-list__txt">
              <p>エコ住宅設備販売支援</p>
            </div>
            <!-- /.img-list__txt -->
          </div>
          <!-- /.img-list__item -->

          <div class="img-list__item">
            <div class="img-list__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/service_02.jpg" alt="写真" loading="lazy">
            </div>
            <!-- /.img-list__img -->

            <div class="img-list__txt">
              <p>OA機器販売支援</p>
            </div>
            <!-- /.img-list__txt -->
          </div>
          <!-- /.img-list__item -->
        </div>
        <!-- /.img-list -->

        <div class="view-more-btn view-more-btn--center">
          <a href="<?php echo home_url('sales'); ?>">
            <span>VIEW MORE</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow_diagonal.svg" alt="矢印" loading="lazy">
          </a>
        </div>
        <!-- /.view-more-btn -->
      </div>
      <!-- /.wrap -->
    </section>


    <section class="product wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <h2 class="common-ttl common-ttl--center">PRODUCT<span>自社サービス</span></h2>

        <div class="img-list">
          <div class="img-list__item">
            <div class="img-list__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product_01.jpg" alt="写真" loading="lazy">
            </div>
            <!-- /.img-list__img -->

            <div class="img-list__txt">
              <p>採用SNSマーケティング事業</p>
            </div>
            <!-- /.img-list__txt -->

            <div class="view-more-btn view-more-btn--center">
              <a href="<?php echo home_url('sns-recruiting'); ?>">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow_diagonal.svg" alt="矢印" loading="lazy">
              </a>
            </div>
            <!-- /.view-more-btn -->
          </div>
          <!-- /.img-list__item -->

          <div class="img-list__item">
            <div class="img-list__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/product_02.jpg" alt="写真" loading="lazy">
            </div>
            <!-- /.img-list__img -->

            <div class="img-list__txt">
              <p>プレミアム洗車 Mobility Box事業</p>
            </div>
            <!-- /.img-list__txt -->

            <div class="view-more-btn view-more-btn--center">
              <a href="#">
                <span>VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow_diagonal.svg" alt="矢印" loading="lazy">
              </a>
            </div>
            <!-- /.view-more-btn -->
          </div>
          <!-- /.img-list__item -->
        </div>
        <!-- /.img-list -->
      </div>
      <!-- /.wrap -->
    </section>


    <?php include('include/about-sales.php'); ?>
  </article>
</main>

<?php get_footer(); ?>