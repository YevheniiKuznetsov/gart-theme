  class Modal {
      constructor(selectBtn, selectModal, selectCloseBtn) {
          const btns = document.querySelectorAll(selectBtn);
          const modals = document.querySelectorAll(selectModal);
          const closeBtns = document.querySelectorAll(selectCloseBtn);


          if (btns && closeBtns) {
              btns.forEach(btn => {
                  btn.addEventListener('click', (e) => {
                      e.preventDefault();
                      showModal();
                  });
              });

              closeBtns.forEach(btn => btn.addEventListener('click', () => closeModal()));

              modals.forEach(itemModal => {
                  itemModal.addEventListener('click', (e) => {
                      if (e.target.classList.contains('popub__inner')) {
                          closeModal();
                      }
                  });
              });
          }

          function showModal() {
              modals.forEach((itemModal) => itemModal.style.display = 'block');
              document.body.style.overflow = 'hidden';
          }

          function closeModal() {
              modals.forEach((itemModal) => itemModal.style.display = 'none');
              document.body.style.overflow = '';
          }
      }
  }
  export default Modal;