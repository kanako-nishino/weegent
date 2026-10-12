<?php
/**
 * お役立ち資料ダウンロード専用フォーム。
 * 資料カードから document_id を受け取り、選択中の資料名を表示する。
 * メールへの資料名の差し込みは CF7 側の [hidden document_id default:get] と
 * functions.php の特殊メールタグ [_document_title] で行う。
 */
get_header('plain');

$document_id = isset($_GET['document_id']) ? absint(wp_unslash($_GET['document_id'])) : 0;
$document = $document_id ? get_post($document_id) : null;

if (! $document || $document->post_type !== 'document' || $document->post_status !== 'publish') {
    $document_id = 0;
    $document = null;
}

$document_title = $document ? get_the_title($document) : 'お役立ち資料';
$dir = get_template_directory_uri();
?>

<main class="form-page form-page--resource section-wave">
  <div class="form-page__inner inner inner--content">
    <a class="form-page__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Weegent トップページへ">
      <img src="<?php echo esc_url($dir); ?>/img/common/logo.png" alt="Weegent">
    </a>

    <div class="form-page__layout">
      <section class="form-intro" aria-labelledby="form-page-title">
        <p class="form-intro__eyebrow">
          <?php echo $document ? '選択中の資料' : '営業ノウハウをまとめた'; ?>
        </p>
        <h1 class="form-intro__title" id="form-page-title">
          <?php if ($document) : ?>
            <?php echo esc_html($document_title); ?><small>（無料）</small>
          <?php else : ?>
            お役立ち資料を<br>ダウンロード<small>（無料）</small>
          <?php endif; ?>
        </h1>

        <div class="form-trust">
          <p class="form-trust__lead">業界を問わず150社以上にご利用いただいています。</p>
          <ul class="form-trust__logos" aria-label="導入企業例">
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-jr-west.png" alt="JR西日本グループ"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-asahi.png" alt="アサヒグループ"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-tencent.png" alt="Tencent"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-macromill.png" alt="MACROMILL"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-japan-ai.png" alt="JAPAN AI"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-meetsmore.png" alt="ミツモア"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-avepoint.png" alt="AvePoint"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-shikoku-kasei.png" alt="四国化成"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-flier.png" alt="flier"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-tbm.png" alt="TBM"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-geniee.png" alt="GENIEE"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-daiko-xtech.png" alt="DAIKO XTECH"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-nextpro.png" alt="ネクプロ"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-digital-grid.png" alt="DIGITAL GRID"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-value-creation.png" alt="VALUE CREATION"></li>
            <li><img src="<?php echo esc_url($dir); ?>/img/common/client-logo-loov.png" alt="LOOV"></li>
          </ul>
        </div>
      </section>

      <?php weegent_contact_form('resource-download', 'form-panel'); ?>
    </div>

    <section class="form-call" aria-label="電話でのお問い合わせ">
      <div class="form-call__message">
        <img src="<?php echo esc_url($dir); ?>/img/common/icon-tel-white.svg" alt="">
        <p>お電話からも承っておりますのでご連絡ください。</p>
      </div>
      <div class="form-call__tel-wrapper">
        <a class="form-call__tel" href="tel:0368247902">
          <span><span class="form-call__tel--en">Tel.</span> 03-6824-7902</span>
        </a>
        <p class="form-call__note">24時間365日対応します</p>
      </div>
    </section>
  </div>
</main>

<?php get_footer('form'); ?>
