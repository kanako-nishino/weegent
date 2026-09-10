jQuery(function ($) { // この中であればWordPressでも「$」が使用可能になる
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

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
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
  $(".js-toc-toggle").on("click", function () {
    var $trigger = $(this);
    var listId = $trigger.attr("aria-controls");
    var $list = listId ? $("#" + listId) : $();
    var $toc = $trigger.closest(".js-toc");

    if (!$list.length || !$toc.length) return;

    var isOpen = $trigger.attr("aria-expanded") === "true";
    $trigger.attr("aria-expanded", String(!isOpen));
    $list.prop("hidden", isOpen);
    $trigger.find("span").text(isOpen ? "開く" : "閉じる");
    $toc.toggleClass("is-open", !isOpen);
  });
});
