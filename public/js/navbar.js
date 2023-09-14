let isNavbarOpen = false;
const menuIconTop = $("#nav-icon-top");
const menuIconMid = $("#nav-icon-mid");
const menuIconBot = $("#nav-icon-bottom");
// const mobileBackground = $("#mobile-background");

function toggleNavbar() {
    if (!isNavbarOpen) {
        menuIconTop.addClass("rotate-45 translate-y-[6px]");
        menuIconBot.addClass("-rotate-45 -translate-y-[8px]");
        menuIconMid.addClass("opacity-0");
        $("#mobile-nav-links").slideDown();
        // mobileBackground.fadeIn();
        isNavbarOpen = true;
    } else {
        menuIconTop.removeClass("rotate-45 translate-y-[6px]");
        menuIconBot.removeClass("-rotate-45 -translate-y-[8px]");
        menuIconMid.removeClass("opacity-0");
        $("#mobile-nav-links").slideUp();
        // mobileBackground.fadeOut();
        isNavbarOpen = false;
    }
}

window.addEventListener(
    "resize",
    function (event) {
        var windowWidth =
            window.innerWidth || document.documentElement.clientWidth;

        if (windowWidth >= 1280) {
            $("#nav-icon-top").removeClass("rotate-45 translate-y-[6px]");
            $("#nav-icon-bottom").removeClass("-rotate-45 -translate-y-[8px]");
            $("#nav-icon-mid").removeClass("opacity-0");
            $("#mobile-nav-links").slideUp();
            // mobileBackground.fadeOut();
            isNavbarOpen = false;
        }
    },
    true
);
