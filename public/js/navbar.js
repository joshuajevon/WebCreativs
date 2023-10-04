let isNavbarOpen = false;
const menuIconTop = $("#nav-icon-top");
const menuIconMid = $("#nav-icon-mid");
const menuIconBot = $("#nav-icon-bottom");

function toggleNavbar() {
    if (!isNavbarOpen) {
        menuIconTop.removeClass("inset-x-0 mx-auto top-0.5");
        menuIconTop.addClass("inset-0 m-auto rotate-45");
        menuIconBot.removeClass("inset-x-0 mx-auto bottom-0.5");
        menuIconBot.addClass("inset-0 m-auto -rotate-45");
        menuIconMid.addClass("opacity-0");
        $("#mobile-nav-links").slideDown();
        isNavbarOpen = true;
    } else {
        menuIconTop.removeClass("inset-0 m-auto rotate-45");
        menuIconTop.addClass("inset-x-0 mx-auto top-0.5");
        menuIconBot.removeClass("inset-0 m-auto -rotate-45");
        menuIconBot.addClass("inset-x-0 mx-auto bottom-0.5");
        menuIconMid.removeClass("opacity-0");
        $("#mobile-nav-links").slideUp();
        isNavbarOpen = false;
    }
}

window.addEventListener(
    "resize",
    function (event) {
        var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;

        if (windowWidth >= 1280) {
            menuIconTop.removeClass("inset-0 m-auto rotate-45");
            menuIconTop.addClass("inset-x-0 mx-auto top-0.5");
            menuIconBot.removeClass("inset-0 m-auto -rotate-45");
            menuIconBot.addClass("inset-x-0 mx-auto bottom-0.5");
            $("#nav-icon-mid").removeClass("opacity-0");
            $("#mobile-nav-links").slideUp();
            $("#language-dropdown-arrow-web").removeClass("rotate-180");
            $("#language-dropdown-web").slideUp();
            $("#language-dropdown-arrow-mobile").removeClass("rotate-180");
            $("#language-dropdown-mobile").slideUp();
            isNavbarOpen = false;
        }
    },
    true
);

// LANGUAGE DROPDOWN WEB
function toggleWebLanguageDropdown() {
    $("#language-dropdown-arrow-web").toggleClass("rotate-180");
    $("#language-dropdown-web").slideToggle();
}

// LANGUAGE DROPDOWN MOBILE
function toggleMobileLanguageDropdown() {
    $("#language-dropdown-arrow-mobile").toggleClass("rotate-180");
    $("#language-dropdown-mobile").slideToggle();
}
