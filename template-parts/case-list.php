<?php
/**
 * 「導入事例」カード一覧。
 * 表示する事例は管理画面「ご支援実績 > ページごとの表示設定」で、'page' 引数のページごとに選ぶ。
 * 未選択の場合は新着の work 投稿3件を自動表示する(weegent_get_featured_posts() 参照)。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/case-list', null, ['page' => 'inbound', 'modifier' => 'inbound']);
 */
$modifier = ! empty($args['modifier']) ? ' case-section--' . $args['modifier'] : '';
$dir = get_template_directory_uri();
$works = weegent_get_featured_posts('work', $args['page'] ?? 'top', 3);
?>
<section class="case-section<?php echo esc_attr($modifier); ?> section-space section-wave" id="case">
  <div class="inner inner--content">
    <div class="section-layout">
      <div class="section-head section-layout__head">
        <h2 class="section-head__title">導入事例</h2>
        <p class="section-head__description">業界を問わず数百社以上にご利用いただいています。</p>
      </div>

      <ul class="section-layout__body case-list">
        <?php foreach ($works as $work) : ?>
          <?php get_template_part('template-parts/case-card', null, ['work' => $work]); ?>
        <?php endforeach; ?>
      </ul>

      <a class="section-layout__button case-section__button c-button" href="<?php echo esc_url(weegent_work_archive_link()); ?>">
        <span>事例をすべて見る</span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-navy.svg" alt="">
      </a>
    </div>
  </div>
</section>
