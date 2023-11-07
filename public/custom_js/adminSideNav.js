function dropdownUser() {
    const userSubmenu = document.querySelector("#adminRegisterSubmenu");
    const userArrow = document.querySelector("#adminRegisterArrow");

    if (userSubmenu && userArrow) {
        userSubmenu.classList.toggle("hidden");
        userArrow.classList.toggle("rotate-90");
    }
}
dropdownUser();

