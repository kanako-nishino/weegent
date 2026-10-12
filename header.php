<?php get_template_part('template-parts/head'); ?>
<?php
// 「サービス紹介」のドロップダウン(PC)・アコーディオン(SP)に並べる項目
$service_menu = [
    ['label' => 'インバウンド対応', 'url' => home_url('/inbound/')],
    ['label' => 'エンタープライズ開拓', 'url' => home_url('/outbound-enterprise/')],
    ['label' => 'テストマーケティング', 'url' => home_url('/test-marketing/')],
    ['label' => '営業戦略／組織立ち上げプラン', 'url' => home_url('/outbound-smb/')],
];
$service_menu_all = ['label' => '主な支援プランを見る', 'url' => weegent_home_anchor('#support-service')];
?>

<body <?php body_class(); ?>>
  <?php get_template_part('template-parts/gatag/parts-body-gatag'); ?>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Weegent トップページへ">
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Weegent">
      </a>

      <div class="header__pc pc">
        <div class="header__contact">
          <a class="header__tel" href="tel:0368247902">
            <span class="header__tel-number">Tel. 03-6824-7902</span>
            <span class="header__tel-hours">24時間365日対応します</span>
          </a>
          <a class="header__button header__button--white" href="<?php echo esc_url(home_url('/document-download/')); ?>">3点セットを見る<span>無料</span></a>
          <a class="header__button header__button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">相談する<span>無料</span></a>
        </div>
        <nav class="header__nav" aria-label="グローバルナビゲーション">
          <div class="header__nav-dropdown js-nav-dropdown">
            <button class="header__nav-trigger js-nav-dropdown-trigger" type="button" aria-expanded="false" aria-controls="header-service-menu">サービス紹介<img class="header__nav-icon" src="<?php echo get_template_directory_uri(); ?>/img/common/nav-dropdown-white.svg" alt=""></button>
            <div class="header__dropdown" id="header-service-menu">
              <ul class="header__dropdown-list">
                <?php foreach ($service_menu as $item) : ?>
                  <li><a class="header__dropdown-link" href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a></li>
                <?php endforeach; ?>
                <li><a class="header__dropdown-link header__dropdown-link--all" href="<?php echo esc_url($service_menu_all['url']); ?>"><?php echo esc_html($service_menu_all['label']); ?></a></li>
              </ul>
            </div>
          </div>
          <a href="<?php echo esc_url(weegent_work_archive_link()); ?>">ご支援実績</a>
          <a href="<?php echo esc_url(weegent_document_archive_link()); ?>">ナレッジ<img class="header__nav-icon" src="<?php echo get_template_directory_uri(); ?>/img/common/nav-dropdown-white.svg" alt=""></a>
          <a href="<?php echo esc_url(home_url('/company/')); ?>">会社情報</a>
          <a href="<?php echo esc_url(weegent_home_anchor('#flow')); ?>">ご利用の流れ</a>
          <a href="<?php echo esc_url(weegent_home_anchor('#faq')); ?>">よくある質問</a>
          <a href="https://recruit.weegent.jp/" target="_blank" rel="noopener noreferrer">採用情報</a>
        </nav>
      </div>

      <button class="header__hamburger js-hamburger sp" type="button" aria-label="メニューを開く"
        aria-controls="global-drawer" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

    <div class="drawer js-drawer" id="global-drawer" aria-hidden="true">
      <button class="drawer__backdrop js-drawer-close" type="button" aria-label="メニューを閉じる"></button>
      <div class="drawer__panel" role="dialog" aria-modal="true" aria-label="メニュー">
        <div class="drawer__header">
          <a class="drawer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Weegent トップページへ">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="Weegent">
          </a>
          <button class="drawer__close js-drawer-close" type="button" aria-label="メニューを閉じる">
            <span></span>
            <span></span>
          </button>
        </div>

        <nav class="drawer-nav" aria-label="スマートフォン用グローバルナビゲーション">
          <ul class="drawer-nav__list">
            <li>
              <button class="drawer-nav__link drawer-nav__trigger js-drawer-accordion" type="button" aria-expanded="false" aria-controls="drawer-service-menu">サービス紹介</button>
              <ul class="drawer-nav__sub" id="drawer-service-menu">
                <?php foreach ($service_menu as $item) : ?>
                  <li><a class="drawer-nav__sub-link" href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a></li>
                <?php endforeach; ?>
                <li><a class="drawer-nav__sub-link" href="<?php echo esc_url($service_menu_all['url']); ?>"><?php echo esc_html($service_menu_all['label']); ?></a></li>
              </ul>
            </li>
            <li><a class="drawer-nav__link" href="<?php echo esc_url(weegent_work_archive_link()); ?>">ご支援実績</a></li>
            <li><a class="drawer-nav__link" href="<?php echo esc_url(weegent_home_anchor('#strength')); ?>">Weegentの強み</a></li>
            <li><a class="drawer-nav__link" href="<?php echo esc_url(weegent_document_archive_link()); ?>">お役立ち資料</a></li>
            <li><a class="drawer-nav__link" href="<?php echo esc_url(home_url('/company/')); ?>">会社情報</a></li>
            <li><a class="drawer-nav__link" href="<?php echo esc_url(weegent_home_anchor('#flow')); ?>">ご利用の流れ</a></li>
            <li><a class="drawer-nav__link" href="<?php echo esc_url(weegent_home_anchor('#faq')); ?>">よくある質問</a></li>
            <li><a class="drawer-nav__link" href="https://recruit.weegent.jp/" target="_blank" rel="noopener noreferrer">採用情報</a></li>
          </ul>
        </nav>

        <div class="drawer-contact">
          <a class="drawer-contact__tel" href="tel:0368247902">
            <span>Tel. 03-6824-7902</span>
            <small>24時間365日対応します</small>
          </a>
          <a class="drawer-contact__button c-button c-button--white" href="<?php echo esc_url(home_url('/document-download/')); ?>">
            <span>3点セットを見る <small>無料</small></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-navy.svg" alt="">
          </a>
          <a class="drawer-contact__button c-button c-button--brown" href="<?php echo esc_url(home_url('/contact/')); ?>">
            <span>相談する <small>無料</small></span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/button-icon-white.svg" alt="">
          </a>
        </div>
      </div>
    </div>
  </header>
