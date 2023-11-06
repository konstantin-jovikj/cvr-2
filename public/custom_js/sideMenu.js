function dropdownUser() {
    const userSubmenu = document.querySelector("#userSubmenu");
    const userArrow = document.querySelector("#userArrow");

    if (userSubmenu && userArrow) {
        userSubmenu.classList.toggle("hidden");
        userArrow.classList.toggle("rotate-90");
    }
}
dropdownUser();

function dropdownSopstvenici() {
    document.querySelector("#submenuSopstvenici").classList.toggle("hidden");
    document.querySelector("#arrowSopstvenici").classList.toggle("rotate-90");
}
dropdownSopstvenici();


function dropdownBaranja() {
    document.querySelector("#baranjaSubmenu").classList.toggle("hidden");
    document.querySelector("#baranjaArrow").classList.toggle("rotate-90");
}
dropdownBaranja();

function dropdownOdobrenija() {
    document.querySelector("#odobrenijaSubmenu").classList.toggle("hidden");
    document.querySelector("#odobrenijaArrow").classList.toggle("rotate-90");
}
dropdownOdobrenija();

function dropdownPregledi() {
    document.querySelector("#preglediSubmenu").classList.toggle("hidden");
    document.querySelector("#preglediArrow").classList.toggle("rotate-90");
}
dropdownPregledi();

function dropdownOsnovniPodatoci() {
    document.querySelector("#osnovniPodatociSubmenu").classList.toggle("hidden");
    document.querySelector("#osnovniPodatociArrow").classList.toggle("rotate-90");
}
dropdownOsnovniPodatoci();

function dropdownBiroBaranja() {
    document.querySelector("#biroBaranjaSubmenu").classList.toggle("hidden");
    document.querySelector("#biroBaranjaArrow").classList.toggle("rotate-90");
}
dropdownBiroBaranja();

function dropdownFinansiskiPregledi() {
    document.querySelector("#finansiskiPreglediSubmenu").classList.toggle("hidden");
    document.querySelector("#finansiskiPreglediArrow").classList.toggle("rotate-90");
}
dropdownFinansiskiPregledi();
