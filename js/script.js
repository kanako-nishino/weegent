jQuery(function ($) { // この中であればWordPressでも「$」が使用可能になる
  // SHAREボタン：現在ページのURL・タイトルで各SNSのシェアURLを組み立てる
  $(".js-share").each(function () {
    var pageUrl = encodeURIComponent(window.location.href);
    var pageTitle = encodeURIComponent(document.title);
    var shareUrls = {
      x: "https://twitter.com/intent/tweet?url=" + pageUrl + "&text=" + pageTitle,
      facebook: "https://www.facebook.com/sharer/sharer.php?u=" + pageUrl,
      hatena: "https://b.hatena.ne.jp/entry/panel/?url=" + pageUrl + "&title=" + pageTitle,
      line: "https://social-plugins.line.me/lineit/share?url=" + pageUrl
    };
    var network = $(this).data("share");

    if (shareUrls[network]) {
      $(this).attr("href", shareUrls[network]);
    }
  });

  // 導入企業ロゴの無限ループ用複製
  $(".js-logo-track").each(function () {
    var $track = $(this);
    var $logoList = $track.find(".client-logos__list").first();

    if (!$logoList.length) return;

    var $clone = $logoList.clone();
    $clone.attr("aria-hidden", "true");
    $clone.find("img").attr("alt", "");
    $track.append($clone);
  });

  var topBtn = $(".pagetop");
  topBtn.hide();

  var $header = $(".header");

  // ボタンの表示設定・ヘッダーの背景切り替え
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
      $header.addClass("is-scrolled");
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
      $header.removeClass("is-scrolled");
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 300, "swing");
    return false;
  });

  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });

  // スムーススクロール（絶対パスのリンク先が現在のページであった場合でも作動）
  $(document).on("click", 'a[href*="#"]', function () {
    var time = 400;
    var header = $("header").innerHeight() || 0;
    var target = $(this.hash);

    if (!target.length) return;

    var targetY = target.offset().top - header;
    $("html,body").animate({
      scrollTop: targetY
    }, time, "swing");
    return false;
  });

  var $hamburger = $(".js-hamburger");
  var $drawer = $(".js-drawer");
  var $drawerPanel = $drawer.find(".drawer__panel");

  function setDrawerState(isOpen, returnFocus) {
    $hamburger.toggleClass("is-open", isOpen);
    $hamburger.attr({
      "aria-expanded": String(isOpen),
      "aria-label": isOpen ? "メニューを閉じる" : "メニューを開く"
    });
    $drawer.toggleClass("is-open", isOpen);
    $drawer.attr("aria-hidden", String(!isOpen));
    $("html").toggleClass("is-fixed", isOpen);

    if (isOpen) {
      $drawer.find(".drawer__close").first().trigger("focus");
    } else if (returnFocus) {
      $hamburger.trigger("focus");
    }
  }

  function openDrawer() {
    setDrawerState(true, false);
  }

  function closeDrawer(returnFocus) {
    setDrawerState(false, Boolean(returnFocus));
  }

  // ハンバーガーメニュー
  $(function () {
    $hamburger.click(function () {
      if ($(this).attr("aria-expanded") !== "true") {
        openDrawer();
      } else {
        closeDrawer();
      }
    });

    // background・閉じるボタン・ページ内リンクをクリックすると閉じる
    $drawer.find("a[href]").on("click", function () {
      closeDrawer();
    });

    $(".js-drawer-close").on("click", function () {
      closeDrawer(true);
    });

    // resizeイベント
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
      }
    });
  });

  // ドロワー内のフォーカスを循環させる
  $drawerPanel.on("keydown", function (event) {
    if (event.key !== "Tab") return;

    var $focusableElements = $drawerPanel.find('a[href], button:not([disabled])');
    var firstElement = $focusableElements.get(0);
    var lastElement = $focusableElements.get($focusableElements.length - 1);

    if (event.shiftKey && document.activeElement === firstElement) {
      event.preventDefault();
      if (lastElement) lastElement.focus();
    } else if (!event.shiftKey && document.activeElement === lastElement) {
      event.preventDefault();
      if (firstElement) firstElement.focus();
    }
  });

  // Escキーでドロワーを閉じる
  $(document).on("keydown", function (event) {
    if (event.key === "Escape" && $hamburger.attr("aria-expanded") === "true") {
      closeDrawer(true);
    }
  });

  // modal
  $(".js-modal-open").each(function () {
    $(this).on("click", function (event) {
      event.preventDefault();
      var target = $(this).data("target");
      var modal = document.getElementById(target);

      if (!modal) return;

      $(modal).prop("hidden", false).fadeIn();
      $("html,body").css("overflow", "hidden");
    });
  });

  $(".js-modal-close").on("click", function () {
    $(".js-modal").fadeOut(function () {
      $(this).prop("hidden", true);
    });
    $("html,body").css("overflow", "initial");
  });

  // 対応可能サービス モーダル
  var $serviceModal = $(".js-service-modal");
  var $serviceModalDialog = $serviceModal.find(".service-modal__dialog");
  var $serviceModalTitle = $serviceModal.find(".js-service-modal-title");
  var $serviceModalIcon = $serviceModal.find(".js-service-modal-icon");
  var $serviceModalBody = $serviceModal.find(".js-service-modal-body");
  var $serviceModalTrigger = $();
  var serviceModalCloseTimer;

  function openServiceModal($trigger) {
    var source = $trigger.closest(".available-service-list__item").find(".js-service-modal-source").get(0);
    var $cardIcon = $trigger.find(".available-service-card__icon img").first();
    var cardTitle = $trigger.find(".available-service-card__title").text().replace(/\s+/g, " ").trim();
    var modalTitle = $trigger.data("modal-title") || cardTitle + "とは？";

    if (!$serviceModal.length || !source) return;

    window.clearTimeout(serviceModalCloseTimer);
    $serviceModalTrigger = $trigger;
    $serviceModalTitle.text(modalTitle);
    $serviceModalIcon.attr("src", $cardIcon.attr("src") || "");
    $serviceModalBody.empty().append(source.content.cloneNode(true));
    $serviceModal.prop("hidden", false).attr("aria-hidden", "false");
    $("html").addClass("is-fixed");

    window.requestAnimationFrame(function () {
      $serviceModal.addClass("is-open");
      $serviceModalDialog.trigger("focus");
    });
  }

  function closeServiceModal() {
    if (!$serviceModal.hasClass("is-open")) return;

    $serviceModal.removeClass("is-open").attr("aria-hidden", "true");
    $("html").removeClass("is-fixed");

    serviceModalCloseTimer = window.setTimeout(function () {
      $serviceModal.prop("hidden", true);
      $serviceModalBody.empty();

      if ($serviceModalTrigger.length) {
        $serviceModalTrigger.trigger("focus");
      }
    }, 200);
  }

  $(".js-service-modal-open").on("click", function () {
    openServiceModal($(this));
  });

  $(".js-service-modal-close").on("click", closeServiceModal);

  $serviceModalDialog.on("keydown", function (event) {
    if (event.key !== "Tab") return;

    var $focusableElements = $serviceModalDialog.find('a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])');
    var firstElement = $focusableElements.get(0);
    var lastElement = $focusableElements.get($focusableElements.length - 1);

    if (!firstElement || !lastElement) return;

    if (event.shiftKey && document.activeElement === firstElement) {
      event.preventDefault();
      lastElement.focus();
    } else if (!event.shiftKey && document.activeElement === lastElement) {
      event.preventDefault();
      firstElement.focus();
    }
  });

  $(document).on("keydown", function (event) {
    if (event.key === "Escape" && $serviceModal.hasClass("is-open")) {
      closeServiceModal();
    }
  });

  // お役立ち資料スライダー
  $(".js-document-slider").each(function () {
    var slider = this;
    var $slider = $(slider);
    var $slides = $slider.find(".js-document-slide");
    var $pagination = $slider.parent().find(".js-document-pagination").first();

    if (!$slides.length || !$pagination.length) return;

    var $bullets = $slides.map(function (index) {
      var slide = this;
      var $bullet = $("<button>", {
        type: "button",
        class: "document-pagination__bullet",
        "aria-label": (index + 1) + "枚目の資料を表示"
      });

      $bullet.on("click", function () {
        slide.scrollIntoView({
          behavior: "smooth",
          block: "nearest",
          inline: "start"
        });
      });

      $pagination.append($bullet);
      return $bullet.get(0);
    });

    function updatePagination() {
      var sliderLeft = slider.getBoundingClientRect().left;
      var activeIndex = 0;
      var closestDistance = Infinity;

      $slides.each(function (index) {
        var distance = Math.abs(this.getBoundingClientRect().left - sliderLeft);

        if (distance < closestDistance) {
          closestDistance = distance;
          activeIndex = index;
        }
      });

      $bullets.each(function (index) {
        var isActive = index === activeIndex;
        $(this).toggleClass("is-active", isActive);
        $(this).attr("aria-current", isActive ? "true" : "false");
      });
    }

    $slider.on("scroll", updatePagination);
    updatePagination();
  });

  // よくある質問
  $(".js-faq-trigger").on("click", function () {
    var $trigger = $(this);
    var answerId = $trigger.attr("aria-controls");
    var $answer = answerId ? $("#" + answerId) : $();
    var $faqItem = $trigger.closest(".faq-item");

    if (!$answer.length || !$faqItem.length) return;

    var isOpen = $trigger.attr("aria-expanded") === "true";
    $trigger.attr("aria-expanded", String(!isOpen));
    $answer.prop("hidden", isOpen);
    $faqItem.toggleClass("is-open", !isOpen);
  });

  // 事例詳細ページ：目次の開閉
  // ※Table of Contents Plus導入後は本体のfront.jsが同じ処理を行うため、
  //   プラグイン差し替え時にこのハンドラは削除すること。
  $("#toc_container .toc_toggle a").on("click", function (event) {
    event.preventDefault();
    var $toggle = $(this);
    var $container = $toggle.closest("#toc_container");
    var willContract = !$container.hasClass("contracted");

    $toggle.attr("aria-label", willContract ? "show" : "hide");
    $toggle.find(".toc_toggle_label").text(willContract ? "開く" : "閉じる");
    $container.toggleClass("contracted", willContract);
    $container.find(".toc_list").toggle(!willContract);
  });
});
