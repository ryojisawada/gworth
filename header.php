<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php global $page, $paged;
          wp_title('|', true, 'right');
          bloginfo('name');
          $site_description = get_bloginfo('description', 'display');
          if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
          ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php if (has_post_thumbnail()) : ?>
    <meta name="thumbnail" content="<?php the_post_thumbnail_url('full'); ?>">
  <?php endif; ?>

  <meta name="description" content="">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

  <?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>

  <header id="header">
    <div class="header-link">
      <div class="header-link__wrap">
        <div class="header-contact">
          <a href="<?php echo home_url('contact'); ?>">
            <span>CONTACT</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_mail.svg" alt="アイコン" loading="lazy">
          </a>
        </div>
        <!-- /.header-contact -->

        <div class="header-sns">
          <ul>
            <!--
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_x.svg" alt="X" loading="lazy">
              </a>
            </li>-->
            <li>
              <a href="https://www.instagram.com/g.worth.co/" target=”_blank”>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_instagram.svg" alt="instagram" loading="lazy">
              </a>
            </li>
            <!--
            <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_facebook.svg" alt="facebook" loading="lazy">
              </a>
            </li>-->
          </ul>
        </div>
        <!-- /.header-sns -->
      </div>
      <!-- /.header-link__wrap -->
    </div>
    <!-- /.header-link -->

    <div class="header-contents">
      <div class="wrap">
        <div class="header-contents__wrap">
          <?php if (is_home() || is_front_page()) : ?>
            <h1 class="header-logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" width="189" height="32" alt="<?php bloginfo('name'); ?>" loading="lazy">
              </a>
            </h1>
            <!-- /.header-logo -->
          <?php else : ?>
            <div class="header-logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" width="189" height="32" alt="<?php bloginfo('name'); ?>" loading="lazy">
              </a>
            </div>
            <!-- /.header-logo -->
          <?php endif; ?>

          <nav class="global-nav">
            <div class="global-nav__wrap">
              <ul>
                <li>
                  <a href="<?php echo home_url('mission'); ?>">MISSION</a>
                </li>
                <li class="has-submenu">
                  <a href="<?php echo home_url('sales'); ?>">SALES DEVELOPMENT</a>
                  <ul class="submenu">
                    <li><a href="<?php echo home_url('oa-biz'); ?>">OA機器ソリューション事業</a></li>
                    <li><a href="<?php echo home_url('smart-house'); ?>">スマートハウス事業</a></li>
                  </ul>
                </li>
                <li>
                  <a href="<?php echo home_url('sns-marketing'); ?>">SNS MARKETING</a>
                </li>
                <li>
                  <a href="<?php echo home_url('company'); ?>">COMPANY</a>
                </li>
                <li>
                  <a href="<?php echo home_url('recruit'); ?>">RECRUIT</a>
                </li>
              </ul>
            </div>
            <!-- /.global-nav__wrap -->
          </nav>


          <div class="drawer-trigger">
            <div><span></span><span></span><span></span></div>
          </div>
          <!-- /.drawer-trigger -->
        </div>
        <!-- /.header-contents__wrap -->
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.header-contents -->
  </header>