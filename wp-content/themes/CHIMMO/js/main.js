$(document).ready(function () {
    $(".menu-item a").on("click touchend", function () {
        $(".menu-item a").removeClass("active");
        $(this).addClass("active");
    });

    function setBackgroundPosition() {
        $(".header-container").css({
            'background-position-y': -(Math.max(document.body.scrollTop, document.documentElement.scrollTop) / 8) + "px"
        });
    }

    $(window).on({
        "resize load": function () {
            var windowWidth = $(window).width();
            if (windowWidth > 1024) {
                $(window).on("scroll", function () {
                    setBackgroundPosition();
                });
            } else if (windowWidth <= 1024) {
                $(window).off("scroll");
                $(".header-container").css({
                    'background-position': ""
                });
            }
        }
    });

    $(".show-menu-button").on("click", function () {

        if ($(".menu-container").hasClass("show-nav")) {
            $(".menu-container").removeClass("show-nav");
            $(".menu-container").addClass("hide-nav");
        } else if ($(".menu-container").hasClass("hide-nav")) {
            $(".menu-container").removeClass("hide-nav");
            $(".menu-container").addClass("show-nav");
        } else {
            $(".menu-container").removeClass("hide-nav");
            $(".menu-container").addClass("show-nav");
        }

        if ($(".menu-container").hasClass("show-nav")) {
            $("html,body").addClass("no-scroll");
        } else {
            $("html,body").removeClass("no-scroll");
        }
    });


    $(".scroll-down-button").on("click", function () {
        $("html,body").animate({
            scrollTop: $("#first-main").offset().top - 100
        }, 600);
    });

    $(document).on("click", function (e) {
        if (!$(e.target).closest(".menu-container, .show-menu-button").length) {
            $(".menu-container").removeClass("show-nav");
            $(".menu-container").addClass("hide-nav");

            if ($(".menu-container").hasClass("show-nav")) {
                $("html,body").addClass("no-scroll");
            } else {
                $("html,body").removeClass("no-scroll");
            }

        }
    });

});