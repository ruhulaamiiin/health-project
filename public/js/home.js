$(document).ready(function () {
    const $menuBtn = $("#menu-btn");
    const $mobileMenuContainer = $("#mobile-menu-container");
    const $mobileMenu = $("#mobile-menu");
    const $closeMenuBtn = $("#close-menu-btn");
    const $mobileMenuOverlay = $("#mobile-menu-overlay");
    const $openSearchBtn = $("#open-search");
    const $openSearchMobileBtn = $("#open-search-mobile");
    const $closeSearchBtn = $("#close-search");
    const $searchModal = $("#search-modal");
    const $searchInput = $searchModal.find("input");

    const openMobileMenu = () => {
        $mobileMenuContainer.removeClass("hidden");
        setTimeout(() => {
            $mobileMenu.removeClass("-translate-x-full");
        }, 20);
    };

    const closeMobileMenu = () => {
        $mobileMenu.addClass("-translate-x-full");
        setTimeout(() => {
            $mobileMenuContainer.addClass("hidden");
        }, 300);
    };

    // Open mobile menu
    $menuBtn.on("click", openMobileMenu);

    // Close mobile menu
    $closeMenuBtn.on("click", closeMobileMenu);

    // Close mobile menu when overlay is clicked
    $mobileMenuOverlay.on("click", closeMobileMenu);

    // Close mobile menu when a nav link is clicked
    const $navLinks = $mobileMenu.find("a");
    $navLinks.each(function () {
        $(this).on("click", function (e) {
            const $link = $(this);
            // Prevent default if it's a hash link to the same page
            if ($link.attr("href").startsWith("#")) {
                e.preventDefault();
            }
            closeMobileMenu();
            // If it's a link to another page, it will navigate after closing.
            // For same-page hash links, we handle it.
            if (
                $link.attr("href").startsWith("#") &&
                $link.attr("href").length > 1
            ) {
                const targetElement = $($link.attr("href"));
                if (targetElement.length) {
                    // Wait for menu to close before scrolling
                    setTimeout(() => {
                        $("html, body").animate(
                            {
                                scrollTop: targetElement.offset().top,
                            },
                            300
                        );
                    }, 300);
                }
            } else if (!$link.attr("href").startsWith("#")) {
                setTimeout(() => {
                    window.location.href = $link.attr("href");
                }, 300);
            }
        });
    });

    // Open search modal (desktop)
    $openSearchBtn.on("click", () => {
        $searchModal.addClass("active");
        $searchInput.trigger("focus");
    });

    // Open search modal (mobile)
    $openSearchMobileBtn.on("click", () => {
        $searchModal.addClass("active");
        $searchInput.trigger("focus");
    });

    // Close search modal (click ESC button)
    $closeSearchBtn.on("click", () => {
        $searchModal.removeClass("active");
    });

    // Close modal when clicking outside
    $searchModal.on("click", function (e) {
        if (e.target === this) {
            $(this).removeClass("active");
        }
    });

    // Close modal with Escape key
    $(document).on("keydown", function (e) {
        if (e.key === "Escape" && $searchModal.hasClass("active")) {
            $searchModal.removeClass("active");
        }
    });

    // Focus the input when modal opens (for better accessibility)
    $searchModal.on("transitionend", function () {
        if ($(this).hasClass("active")) {
            $searchInput.trigger("focus");
        }
    });
});
