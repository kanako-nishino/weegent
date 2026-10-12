<?php get_header(); ?>

<main>
    <section class="sub-hero section-wave">
      <?php get_template_part('template-parts/breadcrumb', null, [
        'items' => [
            ['label' => 'TOP', 'url' => home_url('/')],
            ['label' => 'お知らせ'],
        ],
      ]); ?>

      <div class="inner inner--content sub-hero__inner">
        <h1 class="sub-hero__title">お知らせ</h1>
      </div>
    </section>

    <section class="news-archive-section" aria-labelledby="news-archive-heading">
      <div class="inner inner--content">

        <?php get_template_part('template-parts/news-list'); ?>
      </div>
    </section>

    <section class="sub-footer-cta" aria-labelledby="sub-footer-cta-heading">
      <div class="inner inner--content sub-footer-cta__inner">
        <h2 class="sub-footer-cta__heading" id="sub-footer-cta-heading">
          営業に関してご不明な点が<br class="sp">ございましたら、<br>お気軽にお問い合わせください。
        </h2>

        <ul class="sub-footer-cta__cards">
          <li class="sub-footer-cta__cards-item">
            <article class="sub-footer-card">
              <div class="sub-footer-card__content">
                <div class="sub-footer-card__header">
                  <img class="sub-footer-card__icon" src="<?php echo get_template_directory_uri(); ?>/img/service/service-email-marketing.svg" alt="">
                  <p class="sub-footer-card__title">ご相談・問い合わせ</p>
                </div>
                <p class="sub-footer-card__description">営業の専門家が<br class="pc">ご不安な点をお伺いします。</p>
              </div>
              <a class="c-button c-button--brown sub-footer-card__button" href="<?php echo esc_url(home_url('/contact/')); ?>">
                <span>相談する</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
              </a>
            </article>
          </li>

          <li class="sub-footer-cta__cards-item">
            <article class="sub-footer-card">
              <div class="sub-footer-card__content">
                <div class="sub-footer-card__header">
                  <img class="sub-footer-card__icon" src="<?php echo get_template_directory_uri(); ?>/img/common/icon-estimate.svg" alt="">
                  <p class="sub-footer-card__title">お見積り</p>
                </div>
                <p class="sub-footer-card__description">貴社の状況に合わせ<br class="pc">最適案プランをご提案します。</p>
              </div>
              <a class="c-button c-button--brown sub-footer-card__button" href="<?php echo esc_url(home_url('/contact/')); ?>">
                <span><span class="sp">相談する</span><span class="pc">見積りを依頼する</span></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
              </a>
            </article>
          </li>

          <li class="sub-footer-cta__cards-item">
            <article class="sub-footer-card">
              <div class="sub-footer-card__content">
                <div class="sub-footer-card__header">
                  <img class="sub-footer-card__icon" src="<?php echo get_template_directory_uri(); ?>/img/service/service-sales-material.svg" alt="">
                  <p class="sub-footer-card__title">
                    資料請求
                  </p>
                </div>
                <p class="sub-footer-card__description">機能の詳細や料金体系を<br class="pc">図解でわかりやすく紹介しています。</p>
              </div>
              <a class="c-button c-button--brown sub-footer-card__button" href="<?php echo esc_url(home_url('/document-download/')); ?>">
                <span>資料をダウンロードする</span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
              </a>
            </article>
          </li>
        </ul>

        <div class="sub-footer-phone">
          <div class="sub-footer-phone__heading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-outbound-call.svg" alt="">
            <p>お電話でのお問い合わせ</p>
          </div>
          <a class="sub-footer-phone__tel" href="tel:0368247902">
            <span><span class="sub-footer-phone__tel--en">Tel.</span> 03-6824-7902</span>
            <small>24時間365日対応します</small>
          </a>
          <a class="sub-footer-phone__faq" href="<?php echo esc_url(weegent_home_anchor('#faq')); ?>">
            <span>よくあるご質問</span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
          </a>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
