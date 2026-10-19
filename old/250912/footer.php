<footer id="footer" class="footer">

  <?php if (!is_page(array('company', 'recruit'))) : ?>
    <div class="footer-contact">
      <h2 class="common-ttl common-ttl--center">CONTACT<span>お問い合わせ</span></h2>

      <div class="footer-contact__wrap">
        <div class="footer-contact__txt">
          <p>当社やサービスに関するお問い合わせは、こちらからお気軽にお問い合わせください。</p>
        </div>
        <!-- /.footer-contact__txt -->

        <div class="footer-contact__btn">
          <a href="<?php echo home_url('contact'); ?>">
            <span>CONTACT US</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.svg" alt="アイコン" loading="lazy">
          </a>
        </div>
        <!-- /.footer-contact__btn -->
      </div>
      <!-- /.footer-contact__wrap -->
    </div>
    <!-- /.footer-contact -->
  <?php endif; ?>

  <div class="footer__wrap">
    <div class="wrap">
      <div class="footer-logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_white.svg" width="189" height="32" alt="" loading="lazy">
        </a>
      </div>
      <!-- /.footer-logo -->

      <div class="footer-contents">
        <div class="footer-address">
          <p>〒550-0014<br>大阪府大阪市西区北堀江1-1-4<br>長堀新興産ビル6F<br>TEL:06-6537-9558（代表）</p>
        </div>
        <!-- /.footer-address -->

        <nav class="footer-nav">
          <dl>
            <dt>ABOUT</dt>
            <dd>
              <a href="<?php echo home_url('mission'); ?>">ミッション</a>
            </dd>
            <dd>
              <a href="<?php echo home_url('company'); ?>">会社概要</a>
            </dd>
            <dd>
              <a href="<?php echo home_url('recruit'); ?>">採用情報</a>
            </dd>
            <dd>
              <a href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
            </dd>
          </dl>

          <dl>
            <dt>SERVICE</dt>
            <dd>
              <a href="<?php echo home_url('sales'); ?>">セールスデベロップメント事業</a>
            </dd>
            <dd>
              <a href="<?php echo home_url('sns-marketing'); ?>">SNSマーケティング</a>
            </dd>
            <dd>
              <a href="#">Mobility Box事業</a>
            </dd>
          </dl>
        </nav>

        <div class="footer-bnr">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer-bnr.jpg" alt="プレミアム洗車" loading="lazy">
          </a>
        </div>
        <!-- /.footer-bnr -->
      </div>
      <!-- /.footer-contents -->

      <div class="copyright">
        <small>© 2025 G.WORTH</small>
      </div>
      <!-- /.copyright -->
    </div>
    <!-- /.wrap -->
  </div>
  <!-- /.footer__wrap -->
</footer>

<?php wp_footer(); ?>
</body>

</html>