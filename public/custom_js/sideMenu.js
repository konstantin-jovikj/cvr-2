function dropdownPodatoci() {
    const podatociSubmenu = document.querySelector("#podatociSubmenu");
    const podatociArrow = document.querySelector("#podatociArrow");

    if (podatociSubmenu && podatociArrow) {
        podatociSubmenu.classList.toggle("hidden");
        podatociArrow.classList.toggle("rotate-90");
    }
}
dropdownPodatoci();

function toggleSideNav(x) {
    x.classList.toggle("change");
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("mini-sidebar");
    sidebar.classList.toggle("md:min-w-[230px]");

    const logoSideNav = document.getElementById("logo");
    logoSideNav.classList.toggle("hidden");


    const mainSideNavigation = mainSideNav.querySelectorAll(':scope > *');
    mainSideNavigation.forEach(element => {
        element.classList.toggle('hidden');
    });

    const sideNavigationData = document.getElementById('sideNavData')
    sideNavigationData.classList.toggle('hidden');

}
