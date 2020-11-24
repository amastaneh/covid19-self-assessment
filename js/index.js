var updateLanguage = function() {
    var lang = url('?hl');
    if (lang) {
        $.i18n().locale = lang;
    }
    $('html').i18n();
    $('a[data-i18n-href]').each(function() {
        var hrefValue = $(this).data('i18n-href')
        $(this).attr("href", $.i18n(hrefValue));
    });
};

$(document).ready(function($) {
    'use strict';
    $.i18n({
        locale: 'en'
    }).load({
        en: 'js/i18n/en.json',
        fr: 'js/i18n/fr.json'
    }).done(function() {
        updateLanguage();
        History.Adapter.bind(window, 'statechange', function() {
            updateLanguage();
        });
        // Language combobox
        $('select.language-alt').on('change', function(e) {
            e.preventDefault();
            History.pushState(null, null, "?hl=" + this.value);
        });
    });
});