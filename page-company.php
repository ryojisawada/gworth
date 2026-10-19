<?php get_header(); ?>

<main class="main">
  <article>
    <div class="page-header">
      <div class="wrap">
        <h1>COMPANY<span>会社概要</span></h1>
      </div>
      <!-- /.wrap -->
    </div>
    <!-- /.page-header -->

    <div class="wrap">
      <section class="company-data wow fadeInUp" data-wow-offset="300">
        <div class="company-data__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/company/data.jpg" alt="写真" loading="lazy">
        </div>
        <!-- /.company-data__img -->

        <table>
          <tbody>
            <tr>
              <th>会社名</th>
              <td>G.WORTH株式会社</td>
            </tr>
            <tr>
              <th>本社</th>
              <td>〒550-0014<br>大阪府大阪市西区北堀江1-1-4 長堀新興産ビル6F</td>
            </tr>
            <tr>
              <th>電話番号</th>
              <td>06-6537-9558</td>
            </tr>
            <tr>
              <th>設立</th>
              <td>2020年8月</td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>5,000,000円</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>高谷 凌斗</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>・セールスマーケティング<br>・SNSコンサルティング<br>・飲食店及び小売店特化型コンサルティング</td>
            </tr>
          </tbody>
        </table>
      </section>


      <div class="company-bottom wow fadeInUp" data-wow-offset="300">
        <img src="<?php echo get_template_directory_uri(); ?>/images/company/bottom.jpg" alt="写真" loading="lazy">
      </div>
      <!-- /.company-bottom -->
    </div>
    <!-- /.wrap -->
  </article>
</main>

<?php get_footer(); ?>