const toogleClassName = (selectorTriger, eventBox) => {
  const triger = document.querySelectorAll(selectorTriger);

  triger.forEach((elem) => {
    elem.addEventListener("click", () => {
      elem.classList.toggle("active");
      elem.querySelector(eventBox).classList.toggle("active");
    });
  });
};

export default toogleClassName;
