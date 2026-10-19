<?php get_header(); ?>

<main class="main">
  <article>
    <section class="sales-header">
      <div class="wrap">
        <h1 class="sales-header__ttl">SALES<br>DEVELOPMENT<span>セールスデベロップメント事業</span></h1>

        <div class="sales-header__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sales/header.jpg" alt="写真" loading="lazy">
        </div>
        <!-- /.sales-header__img -->

        <div class="sales-header__txt">
          <h2 class="sales-header__subttl">G.WORTHについて</h2>
          <p>私たちは、スマートハウス事業、OA機器ソリューション事業を行うセールスデベロップメント事業の他、SNS採用マーケティング事業・Mobility Box情報を行うセールスマーケティング企業です。<br>セールスを強化したいけど、リソースが足りない、関西圏のセールスを強化したいけどローカルフィットが難しいなど、マーケティングにおける販売戦略をトータルで支援しております。</p>
        </div>
        <!-- /.sales-header__txt -->
      </div>
      <!-- /.wrap -->
    </section>
    <!-- /.sales-header -->

    <?php include('include/about-sales.php'); ?>
  </article>
</main>

<?php get_footer(); ?>