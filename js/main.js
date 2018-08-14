$(function () {

    /*BASKET*/
    $('.count__down').on('click', function (e) {

        var $this = $(this),
            item = $this.closest('.basket__item'),
            countObj = item.find('.count__val'),
            count = parseInt(countObj.val());

        if (count > 0) {
            count--;
        } else {
            count = 0;
        }

        countObj.val(count);
        calcSum(item);
    });

    $('.count__up').on('click', function (e) {
        // e.preventDefault();

        var $this = $(this),
            item = $this.closest('.basket__item'),
            countObj = item.find('.count__val'),
            count = parseInt(countObj.val());


        count++;
        countObj.val(count);
        calcSum(item);
    });

    $('.count__val').on('change', function (e) {
        var $this = $(this),
            item = $this.closest('.basket__item');

        calcSum(item);
    });

    $('.count__val').on('input', function (e) {


        var val = $(this).val();
        // debugger;
        var result = val.replace(/[^\d]/g, '');
        $(this).val(result);

    });

    $('.jsDelete').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            item = button.closest('.basket__item'),
            id = item.data('id'),
            data = {
                action: 'deleteBasketItem',
                id: id
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    item.remove();
                    calcTotal();
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    function calcSum(item) {
        var count = parseInt(item.find('.count__val').val()),
            price = parseInt(item.data('price')),
            sum = count * price,
            sumObj = item.find('.basket__item-sum');

        sumObj.text(sum.toLocaleString() + ' руб');

        calcTotal();
    }

    function calcTotal() {
        var items = $('.basket__item'),
            totalObj = $('.basket__total-val'),
            total = 0;

        items.each(function (indx, elem) {
            var item = $(elem),
                price = parseInt(item.data('price')),
                count = parseInt(item.find('.count__val').val()),
                sum = price * count;
            total += sum;

        });

        totalObj.text(total.toLocaleString() + ' руб');
    }

    /*END BASKET*/

    $('body').on('click', function (e) {

        if($(e.target).closest('.search').length == 0) {
            $('.search__drop').removeClass('active');
        }
    });

    $('body').on('change', '.accept__check', function () {

        var check = $(this),
            checked = check.prop('checked'),
            form = check.closest('form'),
            button = form.find('[type=submit]');

        if (checked) {
            button.removeClass('disabled');
        } else {
            button.addClass('disabled');
        }

    });

    $('body').on('click', '.popup', function (e) {
        var popup = $(this);
        if ($(e.target).hasClass('popup')) {
            popup.removeClass('active');
        }
    });

    $('body').on('click', '.filters', function (e) {
        var popup = $(this);
        if ($(e.target).hasClass('filters')) {
            popup.removeClass('active');
        }
    });

    $('body').on('click', '.jsPopupOpen', function (e) {
        e.preventDefault();
        var popup = $('.popup'),
            action = $(this).data('action'),
            data = {
                action: action
            }

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    popup.addClass('active');
                    popup.html(result.html);
                    $('input[type=tel]').mask('+7 (999) 999-99-99');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    $('body').on('click', '.jsClosePopup', function () {
        var close = $(this),
            popup = close.closest('.popup');
        popup.removeClass('active');
    });

    $('.jsMoreItems').on('click', function (e) {
        var button = $(this),
            items = button.closest('.items'),
            hidden = items.find('.items-hidden');

        hidden.slideToggle(500);
        button.toggleClass('open');
    });

    $('.jsAdd').on('click', function (e) {
        e.preventDefault();
        var $this = $(this),
            item = $this.closest('.jsItem'),
            id = item.data('id'),
            add = item.find('.item__add'),
            textObj = add.find('.item__add-status'),
            data = {
                action: 'add',
                id: id
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    add.addClass('added');
                    textObj.text('В корзине');
                    $this.remove();
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    $('.jsAddFavorites').on('click', function (e) {
        e.preventDefault();
        var button = $(this),
            item = button.closest('.jsItem'),
            id = item.data('id'),
            data = {
                action: 'addFavorites',
                id: id
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    button.toggleClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    $('.jsAddCompare').on('click', function (e) {
        e.preventDefault();
        var button = $(this),
            item = button.closest('.jsItem'),
            id = item.data('id'),
            data = {
                action: 'addCompare',
                id: id
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    button.toggleClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    $('input[type=tel]').mask('+7 (999) 999-99-99');


    $('.catalog__items-list').mCustomScrollbar({
        mouseWheel: {preventDefault: true},
        theme: "dark",
        snapAmount: 91.5
    });

    $('.docs__items-list').mCustomScrollbar({
        mouseWheel: {preventDefault: true},
        theme: "dark",
    });

    $('.filter__title').on('click', function (e) {
        if ($(document).width() > 1199.99) {
            var $this = $(this),
                filter = $this.closest('.filter'),
                hidden = filter.find('.filter__hidden');


            $this.toggleClass('open');
            hidden.slideToggle(500);
        }
    });

    $('.filter__range-range').each(function (indx, elem) {
        var range = $(elem),
            filter = range.closest('.filter'),
            min = filter.data('from'),
            max = filter.data('to'),
            inputFrom = filter.find('.filter__input_from'),
            inputTo = filter.find('.filter__input_to');

        // debugger;

        range.slider({
            range: true,
            min: min,
            max: max,
            values: [min, max],
            slide: function (event, ui) {
                inputFrom.val(ui.values[0]);
                inputTo.val(ui.values[1]);
            }
        });
    });

    $('.filter__input_from').on('input', function (e) {

        var input = $(this),
            val = parseInt(input.val()),
            filter = input.closest('.filter'),
            valTo = parseInt(filter.find('.filter__input_to').val()),
            range = filter.find('.filter__range-range');


        range.slider("values", [val, valTo]);
    });

    $('.filter__input_to').on('input', function (e) {

        var input = $(this),
            val = parseInt(input.val()),
            filter = input.closest('.filter'),
            valFrom = parseInt(filter.find('.filter__input_from').val()),
            range = filter.find('.filter__range-range');


        range.slider("values", [valFrom, val]);
    });

    $('.filters-button').on('click', function (e) {
        var button = $(this),
            popup = $('.filters');

        popup.toggleClass('active');
    });

    $('.filters__title-svg').on('click', function (e) {
        var button = $(this),
            popup = $('.filters');

        popup.toggleClass('active');
    });

    $('.mmenu__button').on('click', function (e) {
        var button = $(this),
            mmenu = $('.mmenu');

        mmenu.addClass('open');
    });

    $('body').on('click', '.mmenu', function (e) {
        var mmenu = $(this);
        if ($(e.target).hasClass('mmenu')) {
            mmenu.removeClass('open');
        }
    });
    
    $('.mmenu__close').on('click', function () {
        var mmenu = $(this).closest('.mmenu');
        mmenu.removeClass('open');
    });
    
    $('.mmenu__item-link').on('click', function (e) {

        var link = $(this),
            href = link.attr('href'),
            item = link.closest('.mmenu__item'),
            drop = item.find('.mmenu-2');

        if (drop.length>0) {
            e.preventDefault();
            item.toggleClass('open');
            drop.slideToggle(300);
        }

    });

    $('.search__form').on('submit', function (e) {
        e.preventDefault();
        var $this = $(this),
            search = $this.closest('.search'),
            val = $this.find('.search__input').val(),
            drop = search.find('.search__drop'),
            data = {
                action: 'search',
                val: val
            };

        if(!val) {
            drop.removeClass('active');
            return;
        }

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    drop.html(result.html);
                    drop.addClass('active');
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    // $('.search__input').on('input', function (e) {
    //
    //     var $this = $(this),
    //         search = $this.closest('.search'),
    //         val = $this.val(),
    //         drop = search.find('.search__drop'),
    //         data = {
    //             action: 'search',
    //             val: val
    //         };
    //
    //     $.ajax({
    //         dataType: "json",
    //         type: "POST",
    //         url: 'ajax.php',
    //         data: data,
    //         success: function (result) {
    //             if (result.status) {
    //                 drop.html(result.html);
    //                 drop.addClass('active');
    //             } else {
    //                 alert('Что-то пошло не так, попробуйте еще раз!!!');
    //             }
    //         },
    //         error: function (result) {
    //             alert('Что-то пошло не так, попробуйте еще раз!!!');
    //         }
    //     });
    //
    // });


    /*CABINET*/
    $('.profile__svg').on('mouseover', function (e) {
        $(this).prev().attr('type', 'text');
    });
    $('.profile__svg').on('mouseleave', function (e) {
        $(this).prev().attr('type', 'password');
    });

    $('.switch').on('click', function (e) {
        e.preventDefault();

        var button = $(this),
            id = button.attr('href'),
            buttons = $('.switch').not(button),
            tab = $(id),
            tabs = $('.tab').not(tab);


        buttons.removeClass('active');
        tabs.removeClass('active');
        button.addClass('active');
        tab.addClass('active');

    });


    function findHeigh() {
        var maxHeight = 0;
        $('.tab').each(function (indx, elem) {
            var tab = $(elem),
                height = tab.find('.tab__content').outerHeight() + 80;

            if (maxHeight <= height) {
                maxHeight = height;

            }
        });

        $('.tabs').css({
            minHeight: maxHeight
        }).addClass('active');
    }

    findHeigh();

    $('.history__number').on('click', function (e) {
        var $this = $(this),
            item = $this.closest('.history__item'),
            hidden = item.find('.history__hidden');

        item.toggleClass('open');
        hidden.slideToggle(300);
    });
    /*END CABINET*/


    /*SLIDERS*/
    var sliderSwiper = new Swiper('.slider__container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'fade',
        speed: 500,
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.slider__next',
            prevEl: '.slider__prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: 'true'
        },
    });

    var productSwiper = new Swiper('.snaps__container', {
        slidesPerView: 4,
        loop: true,
        slideToClickedSlide: true,
        navigation: {
            nextEl: '.snaps__next',
            prevEl: '.snaps__prev',
        },
        on: {
            slideChange: function (e) {

                var currentImg = $(this.imagesToLoad[this.activeIndex]).attr('src'),
                    imgObj = $('.product__img');

                imgObj.find('a').attr('href', currentImg);
                imgObj.find('img').attr('src', currentImg);
            }
        }

    })

    $('.related__container').slick({
        speed: 300,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '.related__prev .related__button',
        nextArrow: '.related__next .related__button',

        responsive: [
            {
                breakpoint: 1199.99,
                settings: {
                    // theme: 'dark',
                    // speed: 300,
                    // infinite: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    // prevArrow: '.related__prev .related__button',
                    // nextArrow: '.related__next .related__button',
                }
            },
            {
                breakpoint: 767.99,
                settings: {
                    speed: 300,
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '.related__prev .related__button',
                    nextArrow: '.related__next .related__button',
                }
            },
        ]
    });
    /*END SLIDERS*/
})
;

/*YANDEX*/
$(function () {
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {

        if ($('#map').length) {
            var center = [55.720105610873475, 37.71844732368926];
            // if ($(window).width() < 576) {
            //     center = [55.609501798660396, 37.61325538360591];
            // }

            myMap = new ymaps.Map("map", {
                center: center,
                zoom: 15,
                controls: []
            });


            myMap.behaviors.disable(['scrollZoom']);
            // myMap.controls.remove('geolocationControl')
            //     .remove('searchControl')
            //     .remove('trafficControl')
            //     .remove('typeSelector')
            //     .remove('fullscreenControl')
            //     .remove('zoomControl')
            //     .remove('rulerControl');

            myPin = new ymaps.GeoObjectCollection({}, {
                // iconLayout: 'default#image',
                // iconImageHref: '/img/icons/map-marker.svg',
                // iconImageSize: [46, 57],
                // iconImageOffset: [-15, -55]
            });


            myPlacemark1 = new ymaps.Placemark([55.7210620690067, 37.72593599999998], {
                    balloonContentHeader: "Robert Bosch GmbH",
                    balloonContentBody: "немецкая группа компаний, ведущий мировой \n" +
                    "поставщик технологий и услуг в области автомобильных и  \n" +
                    "промышленных технологий, потребительских товаров !\n",
                    balloonContentFooter: "г. Москва, 1-й Грайвороновский проезд, д.20 стр.36",
                    hintContent: "BoshProfi.ru"
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: '../images/icons/pin.png',
                    iconImageSize: [45, 45],
                    // preset: 'islands#redGlyphIcon'
                });


            myPin.add(myPlacemark1);
            myMap.geoObjects.add(myPin);
        }
    }
});
/*END YANDEX*/