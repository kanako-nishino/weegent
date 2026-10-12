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

  // ヘッダーの「サービス紹介」ドロップダウン(PC)
  // マウス操作ではホバーで開き、クリック・タップ・キーボードでは開閉を切り替える
  var $navDropdowns = $(".js-nav-dropdown");
  var canHover = window.matchMedia("(hover: hover)").matches;

  function setNavDropdown($dropdown, isOpen) {
    $dropdown.toggleClass("is-open", isOpen);
    $dropdown.find(".js-nav-dropdown-trigger").attr("aria-expanded", String(isOpen));
  }

  $navDropdowns.each(function () {
    var $dropdown = $(this);

    $dropdown.find(".js-nav-dropdown-trigger").on("click", function (event) {
      // マウスではホバーで既に開いているため、クリックで閉じないようにする
      // (キーボード操作のクリックは event.detail が0)
      if (canHover && event.detail > 0) {
        setNavDropdown($dropdown, true);
        return;
      }
      setNavDropdown($dropdown, !$dropdown.hasClass("is-open"));
    });

    $dropdown.on("mouseenter", function () {
      if (canHover) setNavDropdown($dropdown, true);
    });

    $dropdown.on("mouseleave", function () {
      if (canHover) setNavDropdown($dropdown, false);
    });

    // フォーカスがメニューの外に出たら閉じる
    $dropdown.on("focusout", function (event) {
      if (!event.relatedTarget || !$.contains(this, event.relatedTarget)) {
        setNavDropdown($dropdown, false);
      }
    });

    $dropdown.find("a[href]").on("click", function () {
      setNavDropdown($dropdown, false);
    });
  });

  // メニューの外をクリック・タップしたら閉じる
  $(document).on("click", function (event) {
    $navDropdowns.each(function () {
      if (!$.contains(this, event.target)) {
        setNavDropdown($(this), false);
      }
    });
  });

  // Escキーでドロップダウンを閉じ、トリガーにフォーカスを戻す
  $(document).on("keydown", function (event) {
    if (event.key !== "Escape") return;

    $navDropdowns.filter(".is-open").each(function () {
      setNavDropdown($(this), false);
      $(this).find(".js-nav-dropdown-trigger").trigger("focus");
    });
  });

  // ドロワー内の「サービス紹介」アコーディオン
  $(".js-drawer-accordion").on("click", function () {
    var $trigger = $(this);
    var isOpen = $trigger.attr("aria-expanded") !== "true";
    var $panel = $("#" + $trigger.attr("aria-controls"));

    $trigger.attr("aria-expanded", String(isOpen));
    if (isOpen) {
      $panel.stop(true).slideDown(250);
    } else {
      $panel.stop(true).slideUp(250);
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

  // 事例詳細ページ：目次(Table of Contents Plus)の開閉
  // プラグインの開閉ボタンはデザインと形が異なるため、プラグイン側の設定
  // 「目次の表示/非表示の切り替えを許可」はオフにし、デザインのボタンをここで追加する。
  var $toc = $("#toc_container");
  if ($toc.length) {
    // プラグイン側の設定がオンのままだった場合の保険(ボタンの二重表示と閉じた状態を解除)
    $toc.find(".toc_toggle").remove();
    $toc.removeClass("contracted").css({ width: "", display: "" });
    $toc.find(".toc_list").show();

    var $tocToggle = $(
      '<span class="toc_toggle"><a href="#" role="button" aria-expanded="true">' +
        '<span class="toc_toggle_label">閉じる</span>' +
        '<span class="toc_toggle_box"><span class="toc_toggle_indicator" aria-hidden="true"></span></span>' +
      "</a></span>"
    );
    $toc.find(".toc_title").append($tocToggle);

    $tocToggle.find("a").on("click", function (event) {
      event.preventDefault();
      var willContract = !$toc.hasClass("contracted");

      $(this).attr("aria-expanded", String(!willContract));
      $(this).find(".toc_toggle_label").text(willContract ? "開く" : "閉じる");
      $toc.toggleClass("contracted", willContract);
      $toc.find(".toc_list").toggle(!willContract);
    });
  }

  // トップページ：実績の数字(.js-counter)のカウントアップ
  // 一覧が画面に少しでも入ったら、3つ同時に0から約2.5秒かけて最終的な数字まで増やし、最後に少し減速して止める。
  // HTMLには最終的な数字をそのまま書いておき(読み上げ・検索エンジン・JS無効時用)、JSで動きだけを付ける。
  var counterGroups = document.querySelectorAll(".js-counter-group");
  var reduceMotion = window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (counterGroups.length && !reduceMotion && "IntersectionObserver" in window) {
    var COUNTER_DURATION = 2500;

    // カウントアップ：0から最終的な数字まで数を増やす(小数点以下の桁数は元の数字に合わせる)
    var setupCount = function (el) {
      var value = el.textContent.trim();
      var target = parseFloat(value);
      var decimals = (value.split(".")[1] || "").length;

      el.setAttribute("aria-label", value);
      el.style.display = "inline-block";
      // 桁が増えても横の文字がずれないように、最終的な数字の幅を確保しておく(文字サイズに対する比率で指定)
      el.style.minWidth = el.getBoundingClientRect().width / parseFloat(window.getComputedStyle(el).fontSize) + "em";
      el.style.textAlign = "right";
      el.textContent = (0).toFixed(decimals);

      return function () {
        var start = null;
        var step = function (time) {
          if (start === null) {
            start = time;
          }
          var progress = Math.min((time - start) / COUNTER_DURATION, 1);
          var eased = 1 - Math.pow(1 - progress, 3); // 最後に減速
          el.textContent = (target * eased).toFixed(decimals);
          if (progress < 1) {
            window.requestAnimationFrame(step);
          } else {
            el.textContent = value;
          }
        };
        window.requestAnimationFrame(step);
      };
    };

    // 数字の幅を測って確保するため、Webフォントの読み込みが終わってから組み立てる
    // (読み込み前に測ると代わりのフォントの幅になり、表示がずれる)
    var fontsReady = document.fonts && document.fonts.ready ? document.fonts.ready : Promise.resolve();

    counterGroups.forEach(function (group) {
      fontsReady.then(function () {
        observeCounterGroup(group);
      });
    });

    function observeCounterGroup(group) {
      var starters = Array.prototype.map.call(group.querySelectorAll(".js-counter"), function (el) {
        return setupCount(el);
      });

      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) {
            return;
          }
          observer.disconnect();
          // 初期状態の描画を確定させてから動かす
          window.requestAnimationFrame(function () {
            window.requestAnimationFrame(function () {
              starters.forEach(function (start) { start(); });
            });
          });
        });
      }, { threshold: 0 }); // 一覧が画面に少しでも入ったら開始する

      observer.observe(group);
    }
  }

});
