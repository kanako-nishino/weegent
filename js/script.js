document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".js-logo-track").forEach((track) => {
    const logoList = track.querySelector(".client-logos__list");

    if (!logoList) return;

    const clone = logoList.cloneNode(true);
    clone.setAttribute("aria-hidden", "true");
    clone.querySelectorAll("img").forEach((image) => image.setAttribute("alt", ""));
    track.appendChild(clone);
  });

  const pageTop = document.querySelector(".pagetop");

  if (pageTop) {
    pageTop.hidden = true;

    window.addEventListener("scroll", () => {
      pageTop.hidden = window.scrollY <= 70;
    });

    pageTop.addEventListener("click", (event) => {
      event.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const drawerPanel = drawer?.querySelector(".drawer__panel");

  const setDrawerState = (isOpen, returnFocus = false) => {
    hamburger?.classList.toggle("is-open", isOpen);
    hamburger?.setAttribute("aria-expanded", String(isOpen));
    hamburger?.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
    drawer?.classList.toggle("is-open", isOpen);
    drawer?.setAttribute("aria-hidden", String(!isOpen));
    document.documentElement.classList.toggle("is-fixed", isOpen);

    if (isOpen) {
      drawer?.querySelector(".drawer__close")?.focus();
    } else if (returnFocus) {
      hamburger?.focus();
    }
  };

  const closeDrawer = (returnFocus = false) => setDrawerState(false, returnFocus);

  hamburger?.addEventListener("click", () => {
    const isOpen = hamburger.getAttribute("aria-expanded") !== "true";
    setDrawerState(isOpen);
  });

  drawer?.querySelectorAll("a[href]").forEach((link) => {
    link.addEventListener("click", () => closeDrawer());
  });

  drawer?.querySelectorAll(".js-drawer-close").forEach((button) => {
    button.addEventListener("click", () => closeDrawer(true));
  });

  drawerPanel?.addEventListener("keydown", (event) => {
    if (event.key !== "Tab") return;

    const focusableElements = [...drawerPanel.querySelectorAll('a[href], button:not([disabled])')];
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];

    if (event.shiftKey && document.activeElement === firstElement) {
      event.preventDefault();
      lastElement?.focus();
    } else if (!event.shiftKey && document.activeElement === lastElement) {
      event.preventDefault();
      firstElement?.focus();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && hamburger?.getAttribute("aria-expanded") === "true") {
      closeDrawer(true);
    }
  });

  window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  document.querySelectorAll('a[href*="#"]').forEach((link) => {
    link.addEventListener("click", (event) => {
      const hash = new URL(link.href, window.location.href).hash;
      const target = hash ? document.querySelector(hash) : null;

      if (!target) return;

      event.preventDefault();
      const headerHeight = document.querySelector("header")?.offsetHeight ?? 0;
      const targetY = target.getBoundingClientRect().top + window.scrollY - headerHeight;
      window.scrollTo({ top: targetY, behavior: "smooth" });
    });
  });

  document.querySelectorAll(".js-modal-open").forEach((button) => {
    button.addEventListener("click", (event) => {
      event.preventDefault();
      const modal = document.getElementById(button.dataset.target);

      if (!modal) return;

      modal.hidden = false;
      document.documentElement.classList.add("is-fixed");
    });
  });

  document.querySelectorAll(".js-modal-close").forEach((button) => {
    button.addEventListener("click", () => {
      document.querySelectorAll(".js-modal").forEach((modal) => {
        modal.hidden = true;
      });
      document.documentElement.classList.remove("is-fixed");
    });
  });

  document.querySelectorAll(".js-document-slider").forEach((slider) => {
    const slides = [...slider.querySelectorAll(".js-document-slide")];
    const pagination = slider.parentElement?.querySelector(".js-document-pagination");

    if (!slides.length || !pagination) return;

    const bullets = slides.map((_, index) => {
      const bullet = document.createElement("button");
      bullet.type = "button";
      bullet.className = "document-pagination__bullet";
      bullet.setAttribute("aria-label", `${index + 1}枚目の資料を表示`);
      bullet.addEventListener("click", () => {
        slides[index].scrollIntoView({ behavior: "smooth", block: "nearest", inline: "start" });
      });
      pagination.appendChild(bullet);
      return bullet;
    });

    const updatePagination = () => {
      const sliderLeft = slider.getBoundingClientRect().left;
      const activeIndex = slides.reduce((closestIndex, slide, index) => {
        const currentDistance = Math.abs(slides[closestIndex].getBoundingClientRect().left - sliderLeft);
        const distance = Math.abs(slide.getBoundingClientRect().left - sliderLeft);
        return distance < currentDistance ? index : closestIndex;
      }, 0);

      bullets.forEach((bullet, index) => {
        const isActive = index === activeIndex;
        bullet.classList.toggle("is-active", isActive);
        bullet.setAttribute("aria-current", isActive ? "true" : "false");
      });
    };

    slider.addEventListener("scroll", updatePagination, { passive: true });
    updatePagination();
  });

  document.querySelectorAll(".js-faq-trigger").forEach((trigger) => {
    trigger.addEventListener("click", () => {
      const answerId = trigger.getAttribute("aria-controls");
      const answer = answerId ? document.getElementById(answerId) : null;
      const faqItem = trigger.closest(".faq-item");

      if (!answer || !faqItem) return;

      const isOpen = trigger.getAttribute("aria-expanded") === "true";
      trigger.setAttribute("aria-expanded", String(!isOpen));
      answer.hidden = isOpen;
      faqItem.classList.toggle("is-open", !isOpen);
    });
  });
});
