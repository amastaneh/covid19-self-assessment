var questionnaire_max_question_visited = 0;

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
var ShowSubmit = function() {
    $("#question-box-submit").show();
}
var HideSubmit = function() {
    if (questionnaire_max_question_visited < 6) {
        $("#question-box-submit").hide();
    }
}
var ShowQuestionBox = function(index) {
    if (index > questionnaire_max_question_visited) questionnaire_max_question_visited = index;
    for (var i = 1; i <= questionnaire_max_question_visited; i++) {
        $("fieldset#question-box-" + i).show();
    }
    $('html, body').animate({ scrollTop: $("fieldset#question-box-" + questionnaire_max_question_visited).offset().top - 50 }, 'slow');
}
var HideQuestionBoxFrom = function(index) {
    for (var i = 6; i > index; i--) {
        $("fieldset#question-box-" + i).hide();
    }
}

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
        // Change radio buttons
        $('input[type=radio]').change(function() {
            var Value = this.value;
            var Question = $(this).data('question');
            if ((Question == 1 || Question == 2) && Value == 1) {
                HideQuestionBoxFrom(Question);
                ShowSubmit();
            } else if (Question == 6) {
                ShowSubmit();
            } else {
                ShowQuestionBox(Question + 1);
                HideSubmit();
            }
        });
        // Press Start
        $('a#questionnaire-start').click(function() {
            $('#questionnaire').show();
            ShowQuestionBox(1);
        });
        // Press Submit
        $("form").submit(function(event) {
            event.preventDefault();
            let Result = new Array(6);
            $('input[type=radio]:checked').each(function() {
                debugger;
                var Value = this.value;
                var Question = $(this).data('question');
                Result[Question - 1] = Value;
            });
            alert("Data for save: " + Result)
        });

        $('a#questionnaire-start').click(function() {
            $('#questionnaire').show();
            ShowQuestionBox(1);
        });
    });
});