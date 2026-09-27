<?php
/**
 * サービス一覧の「+」ボタン(.js-service-modal-open)から開くモーダルの外枠。
 * 中身(タイトル・本文)は各ボタンに紐づく <template class="js-service-modal-source"> から
 * js/script.js が動的に差し込む。
 */
?>
<div class="service-modal js-service-modal" hidden aria-hidden="true">
  <div class="service-modal__backdrop js-service-modal-close"></div>
  <section class="service-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="service-modal-title" tabindex="-1">
    <button class="service-modal__close js-service-modal-close" type="button" aria-label="モーダルを閉じる">
      <span></span>
      <span></span>
    </button>
    <header class="service-modal__header">
      <div class="service-modal__icon"><img class="js-service-modal-icon" src="" alt=""></div>
      <h3 class="service-modal__title js-service-modal-title" id="service-modal-title"></h3>
    </header>
    <div class="service-modal__body js-service-modal-body"></div>
  </section>
</div>
