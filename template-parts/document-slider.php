<?php
/**
 * 「お役立ち資料」スライダー。
 * 表示する資料は管理画面「お役立ち資料 > ページごとの表示設定」で、'page' 引数のページごとに選ぶ。
 * 未選択の場合は新着の document 投稿3件を自動表示する(weegent_get_featured_posts() 参照)。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/document-slider', null, ['page' => 'inbound', 'modifier' => 'inbound']);
 */
$modifier = ! empty($args['modifier']) ? ' document-section--' . $args['modifier'] : '';
$dir = get_template_directory_uri();
$documents = weegent_get_featured_posts('document', $args['page'] ?? 'top', 3);
?>
<section class="document-section<?php echo esc_attr($modifier); ?> section-space section-wave" id="knowledge">
  <div class="inner inner--content document-section__inner">
    <header class="document-heading">
      <h2 class="section-head__title">お役立ち資料</h2>
      <p class="section-head__description">Weegentのノウハウをぜひご覧ください。</p>
    </header>

    <div class="document-slider js-document-slider">
      <ul class="document-list js-document-track">
        <?php foreach ($documents as $document) : ?>
          <li class="document-list__item js-document-slide">
            <?php get_template_part('template-parts/document-card', null, ['post' => $document]); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="document-pagination js-document-pagination" aria-label="資料スライダーのページ"></div>

    <a class="document-section__more c-button" href="<?php echo esc_url(weegent_document_archive_link()); ?>">
      <span>お役立ち資料をすべて見る</span>
      <img src="<?php echo $dir; ?>/img/common/button-icon-navy.svg" alt="">
    </a>
  </div>
</section>
