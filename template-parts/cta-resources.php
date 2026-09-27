<?php
/**
 * 資料3点セット・相談・事例集DLの3枚カードCTA。
 * index.html / inbound.html / out-bound-smb.html / out-bound-enterprise.html /
 * test-marketing.html で同一マークアップが各2回(通常配置・単独配置)使われている。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/cta-resources', null, ['standalone' => true]);
 */
$standalone = ! empty($args['standalone']);
?>
<ul class="resource-list<?php echo $standalone ? ' resource-list--standalone' : ''; ?>" aria-label="Weegentの資料とお問い合わせ">
  <li class="resource-list__item">
    <div class="resource-card">
      <div class="resource-card__preview resource-card__preview--stacked">
        <img src="<?php echo get_template_directory_uri(); ?>/img/support/document-set.png" alt="資料3点セットの表紙">
      </div>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/document-download/')); ?>">
        <span>資料3点セットを見る</span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
  <li class="resource-list__item">
    <div class="resource-card">
      <div class="resource-card__preview">
        <img src="<?php echo get_template_directory_uri(); ?>/img/support/contact-preview.png" alt="お問い合わせページの画面">
      </div>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
        <span>相談する <small>無料</small></span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
  <li class="resource-list__item">
    <div class="resource-card">
      <div class="resource-card__preview">
        <img src="<?php echo get_template_directory_uri(); ?>/img/support/case-study-cover.png" alt="導入事例集の表紙">
      </div>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/case-download/')); ?>">
        <span>事例集をDLする <small>無料</small></span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
</ul>
