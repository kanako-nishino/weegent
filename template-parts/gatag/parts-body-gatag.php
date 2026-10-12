<?php
/**
 * bodyタグ直後に配置するGTMタグ
 * テスト環境のアクセスやテスト送信が本番のGA4に記録されないよう、本番ドメインでのみ出力する。
 */
if (wp_parse_url(home_url(), PHP_URL_HOST) !== 'weegent.jp') {
    return;
}
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54H6MBW6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

