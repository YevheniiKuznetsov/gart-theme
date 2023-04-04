const tabsReport = () => {
    const btnText = document.querySelector('[data-text]');
    const btnReport = document.querySelector('[data-report]');

    const contentText = document.querySelector('.content-tabs__text');
    const contentReport = document.querySelector('.content-tabs__report');

    const perentContent = document.querySelector('.main-content');

    if (btnText && btnReport) {
        btnText.addEventListener('click', () => {
            btnText.classList.add('tabs__item--active');
            btnReport.classList.remove('tabs__item--active');

            perentContent.style.maxWidth = '';

            perentContent.classList.remove('active');


            contentText.style.display = '';
            contentReport.style.display = 'none';
        });

        btnReport.addEventListener('click', () => {
            btnText.classList.remove('tabs__item--active');
            btnReport.classList.add('tabs__item--active');

            perentContent.style.maxWidth = '100%'

            perentContent.classList.add('active');

            contentText.style.display = 'none';
            contentReport.style.display = 'block';
        });
    }
}


const tabsPayments = () => {
    const btns = document.querySelectorAll('.boxs-payment__navigation-btn');
    const contents = document.querySelectorAll('.content-payment');



    btns.forEach((btnItem, i) => {
        btnItem.addEventListener('click', function () {
            hiddenContent(i);
            showContent(i);
        });
    });


    function showContent(i = 0) {
        if (contents[i] && btns[i]) {
            contents[i].style.display = 'block';
            btns[i].classList.add('boxs-payment__navigation-btn--active');
        }
    }

    function hiddenContent(i = 0) {
        contents.forEach(contentItem => {
            contentItem.style.display = 'none';

            btns.forEach(btnItem => btnItem.classList.remove('boxs-payment__navigation-btn--active'));
        })
    }

    hiddenContent();
    showContent();
}

export {
    tabsReport,
    tabsPayments
};