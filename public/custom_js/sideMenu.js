function dropdownPodatoci() {
    const podatociSubmenu = document.querySelector("#podatociSubmenu");
    const podatociArrow = document.querySelector("#podatociArrow");

    if (podatociSubmenu && podatociArrow) {
        podatociSubmenu.classList.toggle("hidden");
        podatociArrow.classList.toggle("rotate-90");
    }
}
dropdownPodatoci();

