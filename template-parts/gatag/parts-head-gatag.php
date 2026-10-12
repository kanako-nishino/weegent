<?php
/**
 * headテンプレート　GTMタグなどの設置場所
 * コメントアウトしているGTMは遅延読み込み用です。{GTMキーを入力}を書き換えればOK。
 * テスト環境のアクセスやテスト送信が本番のGA4に記録されないよう、本番ドメインでのみ出力する。
 */
if (wp_parse_url(home_url(), PHP_URL_HOST) !== 'weegent.jp') {
    return;
}
?>

<script>var flag_gtag=false;function ywsgtag(){if(flag_gtag==false){(function(w,d,s,l,i){
w[l]=w[l]||[];
w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
j.async=true;
j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-54H6MBW6');};flag_gtag=true;};["resize","scroll"].forEach(function(evt){window.addEventListener(evt,function(){if(10<window.scrollY){ywsgtag()}});});window.addEventListener("load",function(){if(10<window.scrollY){ywsgtag()}});setTimeout(function(){ywsgtag()},5000)</script>

