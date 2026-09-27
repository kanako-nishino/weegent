<?php
/**
 * サンクスページ共通テンプレート。
 * 「お問い合わせ(contact)」「資料3点セット(document-download)」「事例集(case-download)」
 * 「お役立ち資料(resource-download)」
 * それぞれの子ページ(スラッグ: thanks / 親ページ/thanks/ のURLになる想定)に対して
 * 本ファイル1つが page-thanks.php の命名規則で自動適用される。
 * 親ページのスラッグで中身を出し分ける。
 */
get_header('plain');

$parent_id = wp_get_post_parent_id(get_the_ID());
$parent_slug = $parent_id ? get_post_field('post_name', $parent_id) : '';
$is_download_variant = in_array($parent_slug, ['document-download', 'case-download', 'resource-download'], true);
$show_contact_thanks_resources = (bool) apply_filters('weegent_show_contact_thanks_resources', false);
$dir = get_template_directory_uri();
?>

<main class="thanks-page<?php echo $is_download_variant ? '' : ' thanks-page--contact'; ?> section-wave">
    <div class="thanks-page__inner inner inner--content">
      <a class="form-page__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Weegent トップページへ">
        <img src="<?php echo $dir; ?>/img/common/logo.png" alt="Weegent">
      </a>

      <?php if ($is_download_variant) : ?>

        <section class="thanks-hero" aria-labelledby="thanks-title">
          <h1 id="thanks-title">資料のご請求<br class="sp">ありがとうございました</h1>
          <p>弊社の資料に興味を持っていただきありがとうございます。<br class="pc">ご入力いただいたメールアドレス宛に、資料のご案内をお送りします。</p>
        </section>

        <div class="thanks-divider" aria-hidden="true"></div>

        <section class="thanks-consult" aria-labelledby="thanks-consult-title">
          <div class="thanks-consult__content">
            <h2 id="thanks-consult-title">営業の専門家に<br>お悩みを無料で相談しませんか？</h2>
            <h3>ご相談・お問い合わせできること</h3>
            <ul>
              <li>テストコール300件からのスモールスタートのご相談</li>
              <li>貴社の課題に合わせた営業体制のご提案</li>
              <li>支援実績120社以上の事例のご紹介</li>
              <li>費用やスケジュールのご確認</li>
              <li>現在の営業代行会社からの乗り換えのご相談</li>
            </ul>
            <figure class="thanks-consult__image">
              <img src="<?php echo $dir; ?>/img/form/consulting-img.jpg" alt="営業施策について打ち合わせをする様子">
            </figure>
            <div class="form-trust thanks-consult__trust">
              <p class="form-trust__lead">業界を問わず1500社以上にご利用いただいています。</p>
              <ul class="form-trust__logos" aria-label="導入企業例">
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-hinomori.png" alt="株式会社ヒノモリ"></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-avepoint.png" alt="AvePoint"></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-asahi.png" alt="アサヒグループ"></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-gcstory.png" alt="GCストーリー株式会社"></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-tep.png" alt="TeP."></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-macromill.png" alt="MACROMILL"></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-shikoku-kasei.png" alt="四国化成"></li>
                <li><img src="<?php echo $dir; ?>/img/common/client-logo-nextpro.png" alt="ネクプロ"></li>
              </ul>
            </div>
          </div>

          <?php weegent_contact_form('contact', 'form-panel thanks-consult__form'); ?>
        </section>

        <section class="form-call" aria-label="電話でのお問い合わせ">
          <div class="form-call__message">
            <img src="<?php echo $dir; ?>/img/common/icon-tel-white.svg" alt="">
            <p>お電話からも承っておりますのでご連絡ください。</p>
          </div>
          <div class="form-call__tel-wrapper">
          <a class="form-call__tel" href="tel:0368247902">
            <span><span class="form-call__tel--en">Tel.</span> 03-6824-7902</span>
          </a>
          <p class="form-call__note">24時間365日対応します</p>
        </div>
        </section>

      <?php else : ?>

        <section class="thanks-hero" aria-labelledby="thanks-title">
          <h1 id="thanks-title">お問い合わせ<br class="sp">ありがとうございます</h1>
          <p>お問い合わせいただきありがとうございます。<br>2〜3営業日以内に、担当よりメールにて返信させていただきます。</p>
        </section>

        <?php
        // 再表示する場合は functions.php などで以下を追加する。
        // add_filter('weegent_show_contact_thanks_resources', '__return_true');
        ?>
        <?php if ($show_contact_thanks_resources) : ?>
          <div class="thanks-divider" aria-hidden="true"></div>

          <section class="thanks-resources">
          <h2>営業活動に役立つ資料もご用意しています。<span class="thanks-resources__subline">専用フォームへのご入力後にダウンロードいただけます。</span></h2>

          <ul class="thanks-resource-list">
            <?php for ($i = 0; $i < 3; $i++) : ?>
              <li>
                <article class="document-card thanks-resource-card">
                  <div class="document-card__image thanks-resource-card__image">
                    <div class="document-card__image-inner">
                    <img src="<?php echo $dir; ?>/img/document/document-client-work-01.jpg" alt="クライアントワークにおける電話について解説する資料の表紙">
                  </div>
                  </div>
                  <div class="thanks-resource-card__body">
                    <p class="document-card__category">カテゴリ</p>
                    <h3 class="document-card__title">3分でわかる〇〇〇〇紹介資料</h3>
                    <p class="document-card__description">〇〇〇〇に関するすべての情報を1冊にまとめた資料です。まずはこちらからご確認ください。</p>
                    <ul class="document-card__points">
                      <li>〇〇〇〇って何ができるの？</li>
                      <li>〇〇〇〇の費用やサポート体制</li>
                      <li>実際の導入効果やお客様の声</li>
                    </ul>
                    <a class="document-card__button c-button c-button--brown" href="<?php echo esc_url(weegent_resource_download_url()); ?>">
                      <span>資料を見る</span><img src="<?php echo $dir; ?>/img/common/button-icon-white.svg" alt="">
                    </a>
                  </div>
                </article>
              </li>
            <?php endfor; ?>
          </ul>
          </section>
        <?php endif; ?>

      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>
