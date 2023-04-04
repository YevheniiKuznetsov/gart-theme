class CustomSwitcher {
  constructor(descCustomSwitcherButtons, mobCustomSwitcherButtons) {
    this.descCustomSwitcherButtons = document.querySelectorAll(
      descCustomSwitcherButtons
    );
    this.mobCustomSwitcherButtons = document.querySelectorAll(
      mobCustomSwitcherButtons
    );
  }
  init() {
    const selectElement = document.querySelectorAll(
      ".wpm-language-switcher option"
    );
    selectElement.forEach((element, index) => {
      if (element.attributes.selected) {
        this.descCustomSwitcherButtons[index].classList.add(
          "language-switch__item--active"
        );
        this.mobCustomSwitcherButtons[index].classList.add(
          "language-switch__item--active"
        );
      }
      this.descCustomSwitcherButtons[index].addEventListener("click", () => {
        location = element.attributes.value.value;
      });
      this.mobCustomSwitcherButtons[index].addEventListener("click", () => {
        location = element.attributes.value.value;
      });
    });
  }
}

const toogleClassName = (selectorTriger, eventBox) => {
  const triger = document.querySelectorAll(selectorTriger);

  triger.forEach((elem) => {
    elem.addEventListener("click", () => {
      elem.classList.toggle("active");
      elem.querySelector(eventBox).classList.toggle("active");
    });
  });
};

const customSwitcher = new CustomSwitcher(
  ".desc-language-switch__item",
  ".mob-language-switch__item"
);
customSwitcher.init();

const dropMenu = (selectBtn, selectContent) => {
  const btn = document.querySelector(".mobail-menu"),
    content = document.querySelector(".mobail-content");

  btn.addEventListener("click", () => {
    btn.classList.toggle("active");
    content.classList.toggle("active");
  });
};

dropMenu();

const tabsReport = () => {
  const btnText = document.querySelector("[data-text]");
  const btnReport = document.querySelector("[data-report]");

  const contentText = document.querySelector(".content-tabs__text");
  const contentReport = document.querySelector(".content-tabs__report");

  const perentContent = document.querySelector(".main-content");

  if (btnText && btnReport) {
    btnText.addEventListener("click", () => {
      btnText.classList.add("tabs__item--active");
      btnReport.classList.remove("tabs__item--active");

      perentContent.style.maxWidth = "";

      perentContent.classList.remove("active");

      contentText.style.display = "";
      contentReport.style.display = "none";
    });

    btnReport.addEventListener("click", () => {
      btnText.classList.remove("tabs__item--active");
      btnReport.classList.add("tabs__item--active");

      perentContent.style.maxWidth = "100%";

      perentContent.classList.add("active");

      contentText.style.display = "none";
      contentReport.style.display = "block";
    });
  }
};

tabsReport();

//single post in post
try {
  const contents_inner = $("#contents_inner");

  function get(data) {
    $.ajax({
      url: postParams.ajaxurl,
      data: data,
      type: "POST",

      success: (data) => {
        if (data) {
          contents_inner.append(data);
        }
      },
    });
  }

  get({
    action: "loadmore",
    query: postParams.true_posts_all,
    page: postParams.current_page,
  });
} catch (e) {
  console.log(e);
}

class GetNews {
  constructor(options, container) {
    this.options = options;
    this.current_page = options.current_page;
    this.container = $(`#${container}`);
  }

  getAllPosts() {
    this.container.empty();
    this.get({
      action: this.options.action,
      query: this.options.true_posts_all,
      page: this.current_page,
    });
  }

  morePost() {
    this.current_page++;
    const data = {
      action: this.options.action,
      query: this.options.true_posts_all,
      page: this.current_page,
    };
    $.ajax({
      url: this.options.ajaxurl,
      data: data,
      type: "POST",

      success: (data) => {
        if (data) {
          this.container.append(data);

          // if (current_page >= max_pages) add_media.remove();
        } else {
          // add_media.remove();
        }
      },
    });
  }

  get(data) {
    $.ajax({
      url: this.options.ajaxurl,
      data: data,
      type: "POST",

      success: (data) => {
        if (data) {
          this.container.append(data);
          // this.current_page++;

          // if (current_page >= max_pages) add_media.remove();
        } else {
          // add_media.remove();
        }
      },
    });
  }
}

//sidebar posts
try {
  const getAsaidPosts = new GetNews(sidebarNewsParams, "main_sidebar_posts");
  getAsaidPosts.getAllPosts();
} catch (e) {
  console.log(e);
}

try {
  const donatPosts = new GetNews(allDonatPosts, "postsMedia");
  // donatPosts.getAllPosts();

  document.querySelector("#add_media").addEventListener("click", () => {
	  console.log("add-mesia")
    donatPosts.morePost();
  });

  // const newsProjectPosts = new GetNews(projectParams, "project_posts");
  // newsProjectPosts.getAllPosts();
} catch (e) {
  console.log(e);
}

// try {
//   const donatCompleat = new GetNews(donatCompleatParams, "donat_compleat");
//   donatCompleat.getAllPosts();
// } catch (e) {
//   console.log(e);
// }

class Modal {
  constructor(selectBtn, selectModal, selectCloseBtn) {
    const btns = document.querySelectorAll(selectBtn);
    const modals = document.querySelectorAll(selectModal);
    const closeBtns = document.querySelectorAll(selectCloseBtn);

    if (btns && closeBtns) {
      btns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          showModal();
        });
      });

      closeBtns.forEach((btn) =>
        btn.addEventListener("click", () => closeModal())
      );

      modals.forEach((itemModal) => {
        itemModal.addEventListener("click", (e) => {
          if (e.target.classList.contains("popub__inner")) {
            closeModal();
          }
        });
      });
    }

    function showModal() {
      modals.forEach((itemModal) => (itemModal.style.display = "block"));
      document.body.style.overflow = "hidden";
    }

    function closeModal() {
      modals.forEach((itemModal) => (itemModal.style.display = "none"));
      document.body.style.overflow = "";
    }
  }
}

new Modal(".popub-btn-info", ".popub-info", ".popub__close");
new Modal(".popub-btn-form", ".popub-form", ".popub__close");

class ShowFormInterval {
  constructor({ selectTrigers = "", selectForm = "" } = {}) {
    this.trigers = document.querySelectorAll(selectTrigers);
    this.formEvent = document.querySelector(selectForm);
  }

  triger() {
    let ttl = +this.formEvent.getAttribute("data-ttl") * 60 * 60 * 1000;

    this.trigers.forEach((btn) => {
      btn.addEventListener("click", () => {
        this.setWithExpiry("form-question", "backup-response", ttl);
        this.formEvent.style.display = "none";
      });
    });
  }

  setWithExpiry(key, value, ttl) {
    const dateNow = new Date();

    const item = {
      value: value,
      expiry: dateNow.getTime() + ttl,
    };

    localStorage.setItem(key, JSON.stringify(item));
  }

  getWithExpiry(key) {
    const elemStorage = localStorage.getItem(key);

    if (!elemStorage) {
      return null;
    }

    const item = JSON.parse(elemStorage);
    const now = new Date();

    if (now.getTime() > item.expiry) {
      localStorage.removeItem(key);
      return null;
    }

    return item.value;
  }

  init() {
    let statusForm = this.getWithExpiry("form-question");
    !statusForm ? (this.formEvent.style.display = "block") : null;
    this.formEvent ? this.triger() : null;
  }
}

new ShowFormInterval({
  selectTrigers: ".question-box__btn",
  selectForm: ".popub-question",
}).init();
