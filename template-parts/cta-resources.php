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
// サムネ(資料の表紙など)の表示切り替え。現在は非表示で、代わりに
// アイコン＋タイトル＋説明＋ボタンのカード(下層ページ下部のCTAに近い構成)を表示する。
// 再表示する場合は functions.php などで以下を追加する。
// add_filter('weegent_show_resource_previews', '__return_true');
$show_preview = (bool) apply_filters('weegent_show_resource_previews', false);
$dir = get_template_directory_uri();
?>
<?php if ($show_preview) : ?>
<ul class="resource-list<?php echo $standalone ? ' resource-list--standalone' : ''; ?>" aria-label="Weegentの資料とお問い合わせ">
  <li class="resource-list__item">
    <div class="resource-card">
      <div class="resource-card__preview resource-card__preview--stacked">
        <img src="<?php echo $dir; ?>/img/support/document-set.png" alt="資料3点セットの表紙">
      </div>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/document-download/')); ?>">
        <span>資料3点セットを見る</span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
  <li class="resource-list__item">
    <div class="resource-card">
      <div class="resource-card__preview">
        <img src="<?php echo $dir; ?>/img/support/contact-preview.png" alt="お問い合わせページの画面">
      </div>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
        <span>相談する <small>無料</small></span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
  <li class="resource-list__item">
    <div class="resource-card">
      <div class="resource-card__preview">
        <img src="<?php echo $dir; ?>/img/support/case-study-cover.png" alt="導入事例集の表紙">
      </div>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/case-download/')); ?>">
        <span>事例集をDLする <small>無料</small></span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
</ul>
<?php else : ?>
<ul class="resource-list resource-list--no-preview<?php echo $standalone ? ' resource-list--standalone' : ''; ?>" aria-label="Weegentの資料とお問い合わせ">
  <li class="resource-list__item">
    <div class="resource-card resource-card--no-preview">
      <div class="resource-card__header">
        <span class="resource-card__icon"><img src="<?php echo $dir; ?>/img/service/service-sales-material.svg" alt=""></span>
        <p class="resource-card__title">資料3点セット</p>
      </div>
      <p class="resource-card__description">Weegentの支援内容がわかる</p>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/document-download/')); ?>">
        <span>資料3点セットを見る</span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
  <li class="resource-list__item">
    <div class="resource-card resource-card--no-preview">
      <div class="resource-card__header">
        <span class="resource-card__icon"><img src="<?php echo $dir; ?>/img/service/service-email-marketing.svg" alt=""></span>
        <p class="resource-card__title">無料相談</p>
      </div>
      <p class="resource-card__description">営業の専門家に無料で相談</p>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
        <span>相談する <small>無料</small></span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
  <li class="resource-list__item">
    <div class="resource-card resource-card--no-preview">
      <div class="resource-card__header">
        <span class="resource-card__icon"><img src="<?php echo $dir; ?>/img/service/service-sfa.svg" alt=""></span>
        <p class="resource-card__title">導入事例集</p>
      </div>
      <p class="resource-card__description">実際の支援事例をまとめて紹介</p>
      <a class="resource-card__button c-button c-button--brown" href="<?php echo esc_url(home_url('/case-download/')); ?>">
        <span>事例集をDLする <small>無料</small></span>
        <img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
      </a>
    </div>
  </li>
</ul>
<?php endif; ?>
