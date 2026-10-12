<?php get_template_part('template-parts/service-modal'); ?>

  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer__main">
        <div class="footer__brand">
          <a class="footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Weegent トップページへ">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Weegent">
          </a>
          <ul class="footer-social" aria-label="公式SNS">
            <li class="footer-social__item">
              <a href="<?php echo esc_url(weegent_youtube_channel_url()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Weegent公式YouTube">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-youtube.svg" alt="">
              </a>
            </li>
            <li class="footer-social__item">
              <a href="https://note.com/weegent01" target="_blank" rel="noopener noreferrer" aria-label="Weegent公式note">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-note.svg" alt="">
              </a>
            </li>
            <li class="footer-social__item">
              <a href="https://x.com/yutaman_matsu" target="_blank" rel="noopener noreferrer" aria-label="代表取締役 松下雄太のX">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-x.svg" alt="">
              </a>
            </li>
          </ul>
        </div>

        <div class="footer-company">
          <p class="footer-company__name">株式会社Weegent</p>
          <address class="footer-company__addresses">
            <div class="footer-company__address">
              <p class="footer-company__office">本社</p>
              <p>〒150-0011<br>東京都渋谷区東3丁目24-13<br>Sreed EBISU+L 8階</p>
            </div>
            <div class="footer-company__address">
              <p class="footer-company__office">大阪オフィス</p>
              <p>〒530-0001<br>大阪府大阪市北区梅田1丁目3-1<br>大阪駅前第一ビル 6階</p>
            </div>
          </address>
        </div>

        <nav class="footer-nav" aria-label="フッターナビゲーション">
          <div class="footer-nav__group footer-nav__group--top">
            <p class="footer-nav__heading"><a href="<?php echo esc_url(home_url('/')); ?>">TOPページ</a></p>
          </div>
          <div class="footer-nav__group footer-nav__group--company">
            <p class="footer-nav__heading">会社情報</p>
            <ul class="footer-nav__list">
              <li><a class="footer-nav__link" href="<?php echo esc_url(home_url('/company/#about')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">当社について</a></li>
              <li><a class="footer-nav__link" href="<?php echo esc_url(home_url('/company/#overview')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">会社概要</a></li>
              <li><a class="footer-nav__link" href="<?php echo esc_url(weegent_news_archive_link()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">お知らせ</a></li>
              <li><a class="footer-nav__link" href="https://recruit.weegent.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">採用情報</a></li>
            </ul>
          </div>
          <div class="footer-nav__group footer-nav__group--service">
            <p class="footer-nav__heading">サービス情報</p>
            <ul class="footer-nav__list">
              <li><a class="footer-nav__link" href="<?php echo esc_url(weegent_home_anchor('#support-service')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">サービス一覧</a></li>
              <li><a class="footer-nav__link" href="<?php echo esc_url(weegent_work_archive_link()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">ご支援実績</a></li>
            </ul>
          </div>
          <div class="footer-nav__group footer-nav__group--knowledge">
            <p class="footer-nav__heading">お役立ち情報</p>
            <ul class="footer-nav__list">
              <li><a class="footer-nav__link" href="<?php echo esc_url(weegent_document_archive_link()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">お役立ち資料</a></li>
            </ul>
          </div>
        </nav>

        <div class="footer-contact">
          <a class="footer-contact__tel" href="tel:0368247902">
            <span>Tel. <strong>03-6824-7902</strong></span>
            <small>24時間365日対応します</small>
          </a>
          <div class="footer-contact__actions">
            <a class="footer-contact__button c-button c-button--white" href="<?php echo esc_url(home_url('/document-download/')); ?>">
              <span>3点セットを見る <small>無料</small></span>
            </a>
            <a class="footer-contact__button c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
              <span>相談する <small>無料</small></span>
            </a>
          </div>
        </div>

        <ul class="footer-badges" aria-label="認定パートナー">
          <li class="footer-badges__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo-salesforce-partner.png" alt="Salesforce Partner">
          </li>
          <li class="footer-badges__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo-hubspot-partner.png" alt="HubSpot Partner">
          </li>
        </ul>
      </div>

      <div class="footer__bottom">
        <small>&copy; <time datetime="<?php echo esc_attr(date('Y')); ?>"><?php echo esc_html(date('Y')); ?></time> Weegent Inc.</small>
        <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">プライバシーポリシー</a>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>
