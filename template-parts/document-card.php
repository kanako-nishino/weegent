<?php
/**
 * お役立ち資料カード。スライダー(document-slider.php)と一覧(archive-document.php)で共通利用。
 * DLボタンは資料IDを付けてお役立ち資料フォームへ遷移させる。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/document-card', null, ['post' => $document, 'title_tag' => 'h3']);
 */
$document = $args['post'] ?? get_post();
$title_tag = ($args['title_tag'] ?? 'h3') === 'p' ? 'p' : 'h3';
$card = weegent_get_document_card($document);
$title = get_the_title($document);
?>
<article class="document-card">
  <div class="document-card__image">
    <div class="document-card__image-inner">
      <img src="<?php echo esc_url($card['thumbnail']); ?>" alt="<?php echo esc_attr($title); ?>">
    </div>
  </div>
  <?php if ($card['category']) : ?>
    <p class="document-card__category"><?php echo esc_html($card['category']); ?></p>
  <?php endif; ?>
  <<?php echo $title_tag; ?> class="document-card__title"><?php echo esc_html($title); ?></<?php echo $title_tag; ?>>
  <?php if ($card['description']) : ?>
    <p class="document-card__description"><?php echo nl2br(esc_html($card['description'])); ?></p>
  <?php endif; ?>
  <?php if ($card['points']) : ?>
    <ul class="document-card__points">
      <?php foreach ($card['points'] as $point) : ?>
        <li><?php echo esc_html($point); ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <a class="document-card__button c-button c-button--brown" href="<?php echo esc_url(weegent_resource_download_url($document->ID)); ?>">
    <span>資料をダウンロードする</span>
    <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
  </a>
</article>
