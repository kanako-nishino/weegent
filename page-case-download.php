<?php get_header('plain'); ?>

<main class="form-page form-page--case section-wave">
    <div class="form-page__inner inner inner--content">
      <a class="form-page__logo" href="<?php echo esc_url( home_url('/') ); ?>" aria-label="Weegent トップページへ">
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Weegent">
      </a>

      <div class="form-page__layout">
        <section class="form-intro" aria-labelledby="form-page-title">
          <p class="form-intro__eyebrow">支援内容や導入事例が分かる</p>
          <h1 class="form-intro__title" id="form-page-title">事例集をダウンロード<small>（無料）</small></h1>
          <div class="form-trust">
            <p class="form-trust__lead">業界を問わず150社以上にご利用いただいています。</p>
            <ul class="form-trust__logos" aria-label="導入企業例">
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-jr-west.png" alt="JR西日本グループ"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-asahi.png" alt="アサヒグループ"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-tencent.png" alt="Tencent"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-macromill.png" alt="MACROMILL"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-japan-ai.png" alt="JAPAN AI"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-meetsmore.png" alt="ミツモア"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-avepoint.png" alt="AvePoint"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-shikoku-kasei.png" alt="四国化成"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-flier.png" alt="flier"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-tbm.png" alt="TBM"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-geniee.png" alt="GENIEE"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-daiko-xtech.png" alt="DAIKO XTECH"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-nextpro.png" alt="ネクプロ"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-digital-grid.png" alt="DIGITAL GRID"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-value-creation.png" alt="VALUE CREATION"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/common/client-logo-loov.png" alt="LOOV"></li>
            </ul>
          </div>
        </section>

        <?php weegent_contact_form('case-download', 'form-panel form-panel--short'); ?>
      </div>
      <section class="form-call" aria-label="電話でのお問い合わせ">
        <div class="form-call__message">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/icon-tel-white.svg" alt="">
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
