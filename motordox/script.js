//форма настроек в аккаунте. Активность кнопки сохранения настроек

"use strict";
var $ = jQuery;
function checkParams() {
    $('#user_name' && '#user_email' && '#user_pass' && '#pass_repeat').on('input', function () {
        var code = $(this).val();
        if (code.length != 0) {
            $('.settings_save').removeAttr('disabled'),
                $('.settings_save').css("background", "#D71212");
        } else {
            $('.settings_save').attr('disabled', 'disabled'),
                $('.settings_save').css("background", "rgba(211, 40, 40, 0.76)");
        }
    });
}

// появление поиска в мобильной версии

$(document).ready(function () {
    $('.search-icon').on('click', function () {
        $('.search-block-home_mobile').css('display', 'flex');
    });
});

jQuery(function ($) {
    $(document).mouseup(function (e) { // событие клика по веб-документу
        var mobileSearch = $(".search-block-home_mobile"); // тут указываем ID элемента
        if (!mobileSearch.is(e.target) // если клик был не по нашему блоку
            && mobileSearch.has(e.target).length === 0) { // и не по его дочерним элементам
            mobileSearch.hide(); // скрываем его
        }
    });
});