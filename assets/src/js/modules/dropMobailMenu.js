const dropMobailMenu = (selectBtn, selectContent) => {
    const btn = document.querySelector(selectBtn),
        content = document.querySelector(selectContent);

    btn.addEventListener('click', () => {
        btn.classList.toggle('active');
        content.classList.toggle('active');
    });
}

export default dropMobailMenu;