<?php
/**
 * 導入企業ロゴの無限スクロール。index.html / inbound.html / out-bound-smb.html /
 * out-bound-enterprise.html / test-marketing.html で同一マークアップ、
 * ページごとのモディファイアクラス(例: client-logos--inbound)のみ異なる。
 *
 * 呼び出し例:
 *   get_template_part('template-parts/client-logos', null, ['modifier' => 'inbound']);
 */
$modifier = ! empty($args['modifier']) ? ' client-logos--' . $args['modifier'] : '';
$dir = get_template_directory_uri();
?>
<section class="client-logos<?php echo esc_attr($modifier); ?>" aria-label="導入企業">
  <div class="client-logos__row client-logos__row--left">
    <div class="client-logos__track js-logo-track">
      <ul class="client-logos__list">
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-jr-west.png" alt="JR西日本グループ"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-whomor.png" alt="WHOMOR"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-avepoint.png" alt="AvePoint"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-japan-ai.png" alt="JAPAN AI"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-asahi.png" alt="アサヒグループ"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-gcstory.png" alt="GCストーリー株式会社"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-meetsmore.png" alt="ミツモア"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-tep.png" alt="TeP."></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-macromill.png" alt="MACROMILL"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-flier.png" alt="flier"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-shikoku-kasei.png" alt="四国化成"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-nextpro.png" alt="ネクプロ"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-tbm.png" alt="TBM"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-snp.png" alt="SNP"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-kycc.png" alt="KYCC"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-otsunagi.png" alt="OTSUNAGI"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-mieta.png" alt="MIETA+"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-being.png" alt="being"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-kasanari.png" alt="kasanari"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-adinte.png" alt="AdInte"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-green-monster.png" alt="GREEN MONSTER GROUP"></li>
      </ul>
    </div>
  </div>
  <div class="client-logos__row client-logos__row--right">
    <div class="client-logos__track js-logo-track">
      <ul class="client-logos__list">
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-geniee.png" alt="GENIEE"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-loov.png" alt="LOOV"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-leadpad.png" alt="LEADPAD"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-daiko-xtech.png" alt="DAIKO XTECH"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-tencent.png" alt="Tencent"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-wechat-pay.png" alt="WeChat Pay"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-digital-grid.png" alt="DIGITAL GRID"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-am.png" alt="A&amp;M"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-value-creation.png" alt="VALUE CREATION"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-cam.png" alt="CAM CORPORATION"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-fp.png" alt="FP"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-logly.png" alt="LOGLY"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-shaneport.png" alt="SHANEPORT"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-standard.png" alt="STANDARD"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-transmit.png" alt="Transmit"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-ytgate.png" alt="YTGATE"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-ewm-japan.png" alt="EWM Japan"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-fuso-dentsu.png" alt="扶桑電通"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-kimura-info-tech.png" alt="木村情報技術"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-giken-shoji.png" alt="技研商事インターナショナル"></li>
        <li class="client-logos__item"><img src="<?php echo $dir; ?>/img/common/client-logo-colony-interactive.png" alt="Colony Interactive"></li>
      </ul>
    </div>
  </div>
</section>
