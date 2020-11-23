var updateLanguage = function(locale) {
    if (locale) {
        $.i18n().locale = this.value;
    }
    $('body').i18n();
};

$(document).ready(function($) {
    'use strict';
    $.i18n({
        //locale: 'en'
    }).load({
        en: 'js/i18n/en.json',
        fr: 'js/i18n/fr.json'
    }).done(function() {
        updateLanguage(url('?hl'));
        History.Adapter.bind(window, 'statechange', function() {
            updateLanguage(url('?hl'));
        });
        // Language combobox
        $('#switch-locale').on('change', function(e) {
            e.preventDefault();
            History.pushState(null, null, "?hl=" + this.value);
        });
        updateLanguage();
    });
});