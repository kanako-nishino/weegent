<?php
/**
 * ファーストビュー内の「継続率90%以上」バッジ。index.html / inbound.html /
 * out-bound-smb.html / out-bound-enterprise.html / test-marketing.html で同一マークアップ。
 */
$dir = get_template_directory_uri();
?>
<div class="fv__achievement achievement-card">
  <p class="achievement-card__rate">
    <span class="achievement-card__label">継続率</span>
    <strong>90<small>%</small><span>以上</span></strong>
  </p>
  <div class="achievement-card__badge">
    <img src="<?php echo $dir; ?>/img/common/logo-salesforce-partner.png" alt="Salesforce Partner">
  </div>
  <div class="achievement-card__badge">
    <img src="<?php echo $dir; ?>/img/common/logo-hubspot-partner.png" alt="HubSpot Partner">
  </div>
</div>
