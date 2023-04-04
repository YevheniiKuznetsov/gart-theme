class CustomSelect {
  constructor(options) {
    this.$select = document.querySelector(options.select);
    this.selectOptions = this.$select.querySelectorAll("option");
    this.$customSelect = document.querySelector(options.custom);
    this.$customSelectHeader = null;
    this.$customSelectOptionItem = null;

    this.init();
  }

  init() {
    this.create();
    this.$customSelectHeader = this.$customSelect.querySelector(
      ".custom-select-header"
    );
    this.$customSelectOptionItem = this.$customSelect.querySelectorAll(
      ".custom-select-option"
    );
    this.$customSelectHeader.addEventListener("click", () => {
      this.toggle();
    });

    this.$customSelectOptionItem.forEach((optionItem) => {
      optionItem.addEventListener("click", () => {
        this.selected(optionItem);
      });
    });

    this.$select.style.visibility = "hidden";
    this.$select.style.position = "absolute";
    this.$select.style.zIndex = -999;
  }

  create() {
    const customSelectHeader = document.createElement("div");
    customSelectHeader.className = "custom-select-header form__input";

    const customSelectOptions = document.createElement("div");
    customSelectOptions.className = "custom-select-option-container";

    this.selectOptions.forEach((item) => {
      const optionItem = document.createElement("div");
      const optinText = document.createTextNode(item.innerText);
      optionItem.setAttribute("data", item.value);

      customSelectOptions.appendChild(optionItem);

      if (this.$select.value === item.value) {
        const text = document.createTextNode(item.innerText);
        customSelectHeader.appendChild(text);
        optionItem.className =
          "custom-select-option custom-select-option-active";
      } else {
        optionItem.className = "custom-select-option";
      }

      optionItem.appendChild(optinText);
    });

    this.$customSelect.appendChild(customSelectHeader);
    this.$customSelect.appendChild(customSelectOptions);
  }

  toggle() {
    this.$customSelect.classList.toggle("custom-select-active");
  }

  selected(optionItem) {
    this.$select.value = optionItem.getAttribute("data");
	this.$select.click();
    this.$customSelectHeader.innerText = optionItem.getAttribute("data");
    this.$customSelectOptionItem.forEach((item) => {
      item.classList.remove("custom-select-option-active");
    });
    optionItem.classList.add("custom-select-option-active");
    this.toggle();
  }
}

const customSelect = new CustomSelect({
  select: "#for_whom",
  custom: "#for_whom_custom",
});

const customSelectLocation = new CustomSelect({
  select: "#form_location",
  custom: "#form_location_custom",
});

const customSelectPechatka = new CustomSelect({
  select: "#pechatka",
  custom: "#pechatka_custom",
});

toogleClassName(".form-question__item", ".form-question__body");
