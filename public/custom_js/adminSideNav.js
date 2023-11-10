function dropdownUser() {
    const sektoriSubmenu = document.querySelector("#sektoriSubmenu");
    const sektoriArrow = document.querySelector("#sektoriArrow");

    if (sektoriSubmenu && sektoriArrow) {
        sektoriSubmenu.classList.toggle("hidden");
        sektoriArrow.classList.toggle("rotate-90");
    }
}
dropdownUser();



