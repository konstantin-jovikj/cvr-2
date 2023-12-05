function dropdownUser() {
    const sektoriSubmenu = document.querySelector("#sektoriSubmenu");
    const sektoriArrow = document.querySelector("#sektoriArrow");

    if (sektoriSubmenu && sektoriArrow) {
        sektoriSubmenu.classList.toggle("hidden");
        sektoriArrow.classList.toggle("rotate-90");
    }
}
dropdownUser();


function dropdownPodatociSuperAdmin() {
    const podatociSubmenuSuperAdmin = document.querySelector("#podatociSubmenuSuperAdmin");
    const podatociArrowSuperAdmin = document.querySelector("#podatociArrowSuperAdmin");

    if (podatociSubmenuSuperAdmin && podatociArrowSuperAdmin) {
        podatociSubmenuSuperAdmin.classList.toggle("hidden");
        podatociArrowSuperAdmin.classList.toggle("rotate-90");
    }
}
dropdownPodatociSuperAdmin();



