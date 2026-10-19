<?php get_header(); ?>

<main class="main">
  <article>
    <div class="page-header">
      <div class="wrap">
        <h1>RECRUIT<span>採用情報</span></h1>
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-header -->

    <section class="recruit-message wow fadeInUp" data-wow-offset="300">
      <div class="wrap">
        <div class="img-col">
          <div class="img-col__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/message.jpg" alt="代表写真" loading="lazy">
          </div>
          <!-- /.img-col__img -->

          <div class="img-col__txt">
            <h3 class="img-col__ttl">「愛」と「イケてる」を<br class="sp">持って<br class="pc">未来をつくる<br class="sp">仲間へ</h3>
            <p>私たちの会社は、ただ物やサービスを売るためだけに存在しているわけではありません。世の中には、まだ十分に発揮されていない価値や可能性がたくさんあります。<br>それは事業かもしれませんし、製品やサービス、そして何より「人」そのものかもしれません。私たちの仕事は、それらを見つけ出し、形にして、成果に結びつけることです。</p>

            <p>そのために大切にしているのが、二つの軸です。<br>ひとつは、相手を思いやり、誠実に向き合う 「愛」。<br>もうひとつは、たとえ困難があっても、自分の信じた価値や方法をやり抜く 「信念（イケてる）」。<br>営業という仕事は数字の世界でもありますが、この二つがなければ、短期的な成果しか残せません。<br>そして、この二つを持ち続けることで、ビジネスは再び息を吹き返し、長く続く価値を生み出せると信じています。</p>

            <p>私たちの仕事は、簡単な道ではありません。<br>けれど、その分だけ、人や企業の変化を目の当たりにし、自分自身も成長できる大きなやりがいがあります。</p>

            <p>もしあなたが、愛を持って人や社会に向き合い、イケてる（信念）を貫く勇気を持ちたいと思うなら、<br>この会社はきっと、あなたの挑戦にふさわしい場所になるでしょう。<br>私たちと一緒に、誇りを持って未来をつくりませんか。</p>

            <span class="img-col__name"><span>代表取締役</span><img src="<?php echo get_template_directory_uri(); ?>/images/common/president-name.svg" alt="高谷 凌斗" loading="lazy"></span>
          </div>
          <!-- /.img-col__txt -->
        </div>
        <!-- /.img-col -->
      </div>
      <!-- /.wrap -->
    </section>


    <section class="recruit-mission wow fadeInUp" data-wow-offset="300">
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


    <section class="entry wow fadeInUp" data-wow-offset="300">
      <div class="entry-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/entry.jpg" alt="写真" loading="lazy">
      </div>
      <!-- /.entry-img -->

      <div class="wrap">
        <h2 class="common-ttl common-ttl--center">ENTRY<span>お問い合わせ</span></h2>
        <div class="entry-txt">
          <p>LINEまたはお電話にてご相談ください。<br>カジュアル面談でも大丈夫です。まずはお気軽にお問い合わせください。</p>
        </div>
        <!-- /.entry-txt -->

        <div class="entry-btn">
          <div class="entry-btn__item entry-btn__item--line">
            <a href="#">
              <span>LINE</span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_bubble.svg" alt="アイコン" loading="lazy">
            </a>
          </div>
          <!-- /.entry-btn__item -->

          <div class="entry-btn__item">
            <a href="#">
              <span>TEL</span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_tel.svg" alt="アイコン" loading="lazy">
            </a>
          </div>
          <!-- /.entry-btn__item -->
        </div>
        <!-- /.entry-btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>

<?php get_footer(); ?>