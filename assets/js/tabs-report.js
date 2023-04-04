$(function () {
  const tabNumber = getQueryParam("tab") ? Number(getQueryParam("tab")) - 1 : 0;

  function getQueryParam(key) {
    const params = new URLSearchParams(window.location.search);

    for (const param of params) {
      if (param.includes(key)) {
        return param[1];
      } else {
        return false;
      }
    }
  }

  const tabsPayments = () => {
    const btns = document.querySelectorAll(".boxs-payment__navigation-btn");
    const contents = document.querySelectorAll(".content-payment");

    btns.forEach((btnItem, i) => {
      btnItem.addEventListener("click", function () {
        hiddenContent(i);
        showContent(i);
      });
    });

    function showContent(i = tabNumber) {
      if (contents[i] && btns[i]) {
        contents[i].style.display = "block";
        btns[i].classList.add("boxs-payment__navigation-btn--active");
      }
    }

    function hiddenContent(i = tabNumber) {
      contents.forEach((contentItem) => {
        contentItem.style.display = "none";

        btns.forEach((btnItem) =>
          btnItem.classList.remove("boxs-payment__navigation-btn--active")
        );
      });
    }

    hiddenContent();
    showContent();
  };

  {
    if (postId) {
      const contents_inner = $("#page_payment");

      function get(data) {
        $.ajax({
          url: paymentParams.ajaxurl,
          data: data,
          type: "POST",

          success: (data) => {
            if (data) {
              contents_inner.append(data);
            }
            tabsPayments();
          },
        });
      }

      get({
        action: "payment",
        query: paymentParams.true_posts_all,
        page: paymentParams.current_page,
      });
    } else {
      tabsPayments();
    }
  }
});
