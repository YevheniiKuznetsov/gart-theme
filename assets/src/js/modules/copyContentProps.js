const copyContentProps = (selectBtnsCopu) => {
    const btnsCopy = document.querySelectorAll(selectBtnsCopu);

    btnsCopy.forEach(btnItem => {
        btnItem.addEventListener('click', function () {
            let textContent = btnItem.previousSibling.previousElementSibling.textContent;

            if (textContent) {
                navigator.clipboard.writeText(textContent);
            }
        })
    })
}


export default copyContentProps;