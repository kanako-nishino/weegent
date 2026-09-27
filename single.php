<?php get_header(); ?>

<main>
    <?php while (have_posts()) : the_post(); ?>
      <?php
      $categories = get_the_category();
      $primary_category = ! empty($categories) ? $categories[0] : null;
      ?>
      <article class="news-single section-wave">
        <?php get_template_part('template-parts/breadcrumb', null, [
          'items' => [
              ['label' => 'TOP', 'url' => home_url('/')],
              ['label' => 'お知らせ', 'url' => weegent_news_archive_link()],
              ['label' => get_the_title()],
          ],
          'current_class' => 'news-single__breadcrumb-current',
        ]); ?>

        <div class="inner inner--content news-single__inner">
          <header class="news-single__header">
            <h1><?php the_title(); ?></h1>
            <div class="news-card__meta">
              <time datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y/m/d')); ?></time>
              <span class="news-card__weekday"><?php echo esc_html(get_the_date('D')); ?></span>
              <?php if ($primary_category) : ?>
                <a class="news-card__category" href="<?php echo esc_url(get_category_link($primary_category)); ?>"><?php echo esc_html($primary_category->name); ?></a>
              <?php endif; ?>
            </div>
          </header>

          <div class="entry-content wp-block-post-content">
            <?php the_content(); ?>
          </div>

          <div class="work-layout__share news-single__share">
            <div class="work-share">
              <p class="work-share__label">SHARE</p>
              <ul class="work-share__list">
                <li><a class="js-share" data-share="x" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank"
                    rel="noopener noreferrer" aria-label="Xでシェア"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-x.svg" alt=""></a></li>
                <li><a class="js-share" data-share="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                    target="_blank" rel="noopener noreferrer" aria-label="Facebookでシェア"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/common/icon-facebook.svg" alt=""></a></li>
                <li><a class="js-share" data-share="hatena" href="https://b.hatena.ne.jp/entry/panel/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"
                    rel="noopener noreferrer" aria-label="はてなブックマークに追加"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/common/icon-hatena.svg" alt=""></a></li>
                <li><a class="js-share" data-share="line" href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>"
                    target="_blank" rel="noopener noreferrer" aria-label="LINEでシェア"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/common/icon-line.svg" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    <?php endwhile; ?>

    <section class="sub-footer-cta" aria-labelledby="sub-footer-cta-heading">
      <div class="inner inner--content sub-footer-cta__inner">
        <h2 class="sub-footer-cta__heading" id="sub-footer-cta-heading">
          〇〇に関してご不明な点がございましたら、<br>お気軽にお問い合わせください。
        </h2>

        <ul class="sub-footer-cta__cards">
          <li class="sub-footer-cta__cards-item">
            <article class="sub-footer-card">
              <div class="sub-footer-card__content">
                <div class="sub-footer-card__header">
                  <img class="sub-footer-card__icon" src="<?php echo get_template_directory_uri(); ?>/img/service/service-email-marketing.svg" alt="">
                  <h3 class="sub-footer-card__title">ご相談・問い合わせ</h3>
                </div>
                <p class="sub-footer-card__description">〇〇の専門家が<br>ご不安な点をお伺いします。</p>
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
                  <h3 class="sub-footer-card__title">お見積り</h3>
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
                  <h3 class="sub-footer-card__title">
                    資料請求
                  </h3>
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
            <span>Tel. 03-6824-7902</span>
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
