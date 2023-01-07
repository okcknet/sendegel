"use strict";

var main = {
    init: function () {
        /* Run Owl Carousel */
        if ($('.owl-carousel').length) {
            $('.owl-carousel').owlCarousel({
                items: 1,
                touchDrag: true,
                mouseDrag: true,
                nav: true,
                navText: ["<i class='icon-arrow-left'></i>", "<i class='icon-arrow-right'></i>"],
                responsiveClass: false
            });
        }

        if ($('#gotop').length) {
            $('#gotop').click(function () {
                $('body,html').animate({scrollTop: 0}, 800);
            });
        }

        /* Toggle Navbar */

        if ($(".navbar-nav-toggle").length) {
            $(".navbar-nav-toggle").click(function () {
                $("header").css('height', 'auto').height();
                $(".dropdown-toggle .icon").removeClass("icon-minus").addClass("icon-plus");
                $(".navbar-nav").toggle(300, function () {
                    $('.navbar-nav-toggle .icon').toggleClass('icon-menu icon-close');
                });
            });

            $(".dropdown-toggle").click(function () {
                $(this).find(".icon").toggleClass('icon-plus icon-minus');
            });

        }

    },
    isMobile: {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (main.isMobile.Android() || main.isMobile.BlackBerry() || main.isMobile.iOS() || main.isMobile.Opera() || main.isMobile.Windows());
        },
        init: function(){
            if(main.isMobile.any()){
                $("html").addClass("mobile");
            }
        }
    },
    fixedHeader: function () {
        var headerHeight = $("nav.navbar.navbar1").outerHeight(true),
            scrollTop = $(window).scrollTop();

        if (scrollTop > headerHeight) {
            $(".navbar1").addClass("sticky-header");
        } else {
            $(".navbar1").removeClass("sticky-header");
        }
    },
    pagination: function () {
        $(".pagination").each(function (index, pagination) {
            $("select", pagination).off(".pagination").on({
                "change.pagination": function () {
                    var prev = $("option:selected", this).prev("option");
                    var next = $("option:selected", this).next("option");

                    if (prev.length) {
                        $(".prev", pagination).removeClass("disabled");
                    } else {
                        $(".prev", pagination).addClass("disabled");
                    }

                    if (next.length) {
                        $(".next", pagination).removeClass("disabled");
                    } else {
                        $(".next", pagination).addClass("disabled");
                    }
                }
            }).trigger("change.pagination");

            $(".prev", pagination).off(".pagination").on({
                "click.pagination": function () {
                    var select = $("select", pagination);
                    var prev = $("option:selected", select).prev("option");

                    if (prev.length) {
                        prev.prop("selected", true);
                        select.trigger("change");
                    }
                }
            });

            $(".next", pagination).off(".pagination").on({
                "click.pagination": function () {
                    var select = $("select", pagination);
                    var next = $("option:selected", select).next("option");

                    if (next.length) {
                        next.prop("selected", true);
                        select.trigger("change");
                    }
                }
            });
        });
    },
    ajaxContent: {
        getContent: function (element, isPaging, isAppend) {
            var templateUrl = $(element).data("ajax-template");
            var dataUrl = $(element).data("ajax-json");
            var formData = $("[data-ajax-form] :input", element).serialize();
            var content = $("[data-ajax-content]", element);
            var more = $("[data-ajax-more]", element);
            var pagination = $("[data-ajax-pagination]", element);

            if (!isPaging) {
                $("select", pagination).val("1").data("value", "1");
                more.attr("data-page", 1);
            }

            if (isAppend) {
                $(element).addClass("ajax-loading-next");
            } else {
                $(element).addClass("ajax-loading-first");
            }

            var page = $("select", pagination).val() || more.attr("data-page");

            formData += "&page=" + page;

            $(element).data("ajax-deferred", $.Deferred());

            var deferredTemplate = $.ajax({
                url: templateUrl,
                type: "GET"
            });

            var deferredData = $.ajax({
                url: dataUrl,
                type: "POST",
                dataType: "json",
                data: formData
            });

            $.when(deferredTemplate, deferredData)
                .done(function (template, data) {
                    var output = Mustache.render(template[0], data[0]);

                    $(element).removeClass("ajax-loading-next ajax-loading-first").addClass("ajax-loaded");

                    if (data[0].more) {
                        $(element).removeClass("ajax-no-more");
                    } else {
                        $(element).addClass("ajax-no-more");
                    }

                    if (data[0].pages) {
                        $(element).removeClass("ajax-no-page");
                    } else {
                        $(element).addClass("ajax-no-page");
                    }

                    if (!isPaging) {
                        $("select", pagination).html("");

                        for (var i = 1; i <= data[0].pages; i++) {
                            $("select", pagination).append('<option value="' + i + '">' + i + '</option>');
                        }

                        $("select", pagination).trigger("change.select2");
                    }

                    $(output).waitForImages().done(function () {
                        if (isAppend) {
                            content.append(output);
                        } else {
                            content.html(output);

                            $("html, body").stop().animate({
                                scrollTop: $(element).offset().top - $("header .navbar").height()
                            }, 500);
                        }

                        $(element).data("ajax-deferred").resolve();
                    });
                })
                .fail(function () {
                    throw new Error("Page couldn't load.");
                });
        },
        init: function () {
            var _this = this;

            $("[data-ajax-template]").each(function (index, element) {
                _this.getContent(element);

                $(element).data("ajax-methods", {
                    getContent: function () {
                        _this.getContent(element);
                    }
                });

                var inputs = $("[data-ajax-form] :input", element);
                var more = $("[data-ajax-more]", element);
                var pagination = $("[data-ajax-pagination] select", element);

                inputs.off(".ajaxContent").on({
                    "change.ajaxContent": function () {
                        _this.getContent(element);
                    }
                });

                more.off(".ajaxContent").on({
                    "click.ajaxContent": function (event) {
                        var page = parseInt($(this).attr("data-page"));

                        page++;

                        $(this).attr("data-page", page);

                        _this.getContent(element, true, true);

                        event.preventDefault();
                    }
                });

                pagination.off(".ajaxContent").on({
                    "change.ajaxContent": function () {
                        _this.getContent(element, true, false);
                    }
                });
            });
        }
    },
    projects: function () {
        var container = $("#projects");
        //var filters = $(".filter-content .filter-item", container);
        //var tabs = $(".tab .item", container);
        //var input = $("input[type='hidden']", container);

        $("a", tabs).on({
            click: function (event) {
                var name = $(this).attr("data-name");
                var value = $(this).attr("data-value") || "";

                $("a", tabs).removeClass("selected");
                $(this).addClass("selected");

                input.attr("name", name).val(value).trigger("change");

                event.preventDefault();
            }
        });

        filters.on({
            click: function () {
                var index = $(this).index();
                var activeTab = tabs.eq(index);

                filters.removeClass("selected");
                tabs.removeClass("selected");

                $(this).addClass("selected");
                activeTab.addClass("selected");

                $("a[data-name]:not([data-value])", activeTab).trigger("click");
            }
        }).first().trigger("click");
    },
    fixedCta: function () {
        if($("html").hasClass("mobile")){
            $(document).scroll(function () {
                var y = $(this).scrollTop();
                var x = $(".navbar1").height();
                var q = $(".banner1").height();
                var b = $(".section5").height();
                if (y > x+q || y > b) {
                    $('.bottom-btn').addClass("active");
                } else {
                    $('.bottom-btn').removeClass("active");
                }
            });
        }
    },

}

$(function () {
    main.init();
    main.isMobile.init();
    main.fixedHeader();
    main.pagination();
    main.ajaxContent.init();
    main.projects();
    main.fixedCta();
});

$(window).on({
    "resize scroll": main.fixedHeader
});