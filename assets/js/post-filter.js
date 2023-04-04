class PostFilter {
  constructor(options) {
    this.options = options;
    this.action = "loadmore";
    this.current_page = options.current_page;
    this.container = $("#postsMedia");
    this.activeCategory = null;

    this.init();
  }
  init() {
    const postsNumber = document.querySelectorAll(".posts-number");
    postsNumber.forEach((element, index) => {
      element.innerText += `(${postParams.max_posts[index]})`;
    });
  }
  getAllPosts(cont) {
    this.activeClassDistribution(cont);
    this.container.empty();
    this.current_page = this.options.current_page;
    this.activeCategory = this.options.true_posts_all;
    this.get({
      action: "loadmore",
      query: this.options.true_posts_all,
      page: this.current_page,
    });
  }
  armyPosts(cont) {
    this.activeClassDistribution(cont);
    this.container.empty();
    this.current_page = this.options.current_page;
    this.activeCategory = this.options.true_posts_army;
    this.get({
      action: "loadmore",
      query: this.options.true_posts_army,
      page: this.current_page,
    });
  }
  healthPosts(cont) {
    this.activeClassDistribution(cont);
    this.container.empty();
    this.current_page = this.options.current_page;
    this.activeCategory = this.options.true_posts_health;
    this.get({
      action: "loadmore",
      query: this.options.true_posts_health,
      page: this.current_page,
    });
  }
  socialPosts(cont) {
    this.activeClassDistribution(cont);
    this.container.empty();
    this.current_page = this.options.current_page;
    this.activeCategory = this.options.true_posts_social;
    this.get({
      action: "loadmore",
      query: this.options.true_posts_social,
      page: this.current_page,
    });
  }
  morePost() {
    this.current_page++;
    const data = {
      action: "loadmore",
      query: this.activeCategory,
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
  activeClassDistribution(cont) {
    const elements = document.querySelectorAll(".navigation-tab__item");

    elements.forEach((element) => {
      element.classList.remove("navigation-tab__item--active");
    });
    const activeElement = document.querySelector(cont);
    activeElement.classList.add("navigation-tab__item--active");
  }
}
