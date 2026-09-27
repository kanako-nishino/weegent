<?php
/**
 * 404(ページが見つからない)ページ。
 * デザインカンプがないため、下層ページの見出しエリア(.sub-hero)とボタン(.sub-hero__actions)を流用している。
 */
get_header(); ?>

<main>
    <section class="sub-hero sub-hero--404 section-wave">
      <?php get_template_part('template-parts/breadcrumb', null, [
        'items' => [
            ['label' => 'TOP', 'url' => home_url('/')],
            ['label' => 'ページが見つかりません'],
        ],
      ]); ?>

      <div class="inner inner--content sub-hero__inner">
        <h1 class="sub-hero__title">ページが<br class="sp">見つかりません</h1>
        <p class="sub-hero__lead">
          お探しのページは、移動または削除された可能性があります。<br class="pc">
          お手数ですが、トップページからお探しください。
        </p>
        <div class="sub-hero__actions">
          <a class="c-button c-button--white sub-hero__action" href="<?php echo esc_url(home_url('/')); ?>">
            <span>トップページへ戻る</span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
          </a>
          <a class="c-button c-button--brown sub-hero__action" href="<?php echo esc_url(home_url('/contact/')); ?>">
            <span>ご相談・お問い合わせ <small>無料</small></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
          </a>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>
