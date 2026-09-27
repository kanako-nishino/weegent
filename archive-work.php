<?php get_header(); ?>

<main>
    <section class="sub-hero section-wave">
      <?php get_template_part('template-parts/breadcrumb', null, [
        'items' => [
            ['label' => 'TOP', 'url' => home_url('/')],
            ['label' => '事例'],
        ],
      ]); ?>

      <div class="inner inner--content sub-hero__inner">
        <h1 class="sub-hero__title">事例</h1>
        <div class="sub-hero__actions">
          <a class="c-button c-button--white sub-hero__action" href="<?php echo esc_url(home_url('/case-download/')); ?>">
            <span>事例集をダウンロードする <small>無料</small></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
          </a>
          <a class="c-button c-button--brown sub-hero__action" href="<?php echo esc_url(home_url('/contact/')); ?>">
            <span>ご相談・お問い合わせ <small>無料</small></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
          </a>
        </div>
      </div>
    </section>

    <section class="work-archive-section">
      <div class="inner inner--content">
        <?php if (have_posts()) : ?>
          <ul class="case-list work-archive-list">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('template-parts/case-card', null, ['work' => get_post()]); ?>
            <?php endwhile; ?>
          </ul>

          <?php get_template_part('template-parts/pagination'); ?>
        <?php else : ?>
          <p>現在公開中の事例はありません。</p>
        <?php endif; ?>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
