var questionnaire_max_question_visited = 0;
var questionnaire_first_yes = 0;

/**
 * Upadte and re-fill strings with current localization
 */
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

/**
 * @param {int} index - Show quistion boxes with index of them started from 1
 */
var ShowQuestionBox = function(index) {
    if (index > questionnaire_max_question_visited) questionnaire_max_question_visited = index;
    for (var i = 1; i <= questionnaire_max_question_visited; i++) {
        $("fieldset#question-box-" + i).show();
    }
    $('html, body').animate({ scrollTop: $("fieldset#question-box-" + questionnaire_max_question_visited).offset().top - 50 }, 'slow');
}

/**
 * 
 * @param {*} index 
 */
var HideQuestionBoxFrom = function(index) {
    for (var i = 6; i > index; i--) {
        $("fieldset#question-box-" + i).hide();
    }
}

/**
 * jQuery show modal result box
 */
var ShowSubmitPopup = function() {
    var ResultComment = (questionnaire_first_yes > 0) ? "result-yes" : "result-no";
    $("#modal-text").text($.i18n(ResultComment));
    $("#modal-result").modal({
        escapeClose: false,
        clickClose: false,
        showClose: false
    });

}

/**
 * jQuery modal fade-in animation
 */
$("#fade").modal({
    fadeDuration: 100
});

/**
 * The page Document Object Model (DOM) is ready for JavaScript code
 */
$(document).ready(function($) {
    'use strict';
    $.i18n({
        locale: 'en'
    }).load({
        en: 'js/i18n/en.json',
        fr: 'js/i18n/fr.json'
    }).done(function() {
        updateLanguage();
        // Click on langauge link
        History.Adapter.bind(window, 'statechange', function() {
            updateLanguage();
        });
        // Change radio buttons
        $('input[type=radio]').change(function() {
            var Value = this.value;
            var Question = $(this).data('question');
            if (Value == 1) {
                questionnaire_first_yes = Question
                HideQuestionBoxFrom(Question);
                ShowSubmitPopup();
            } else if (Question == 6) {
                ShowSubmitPopup();
            } else {
                ShowQuestionBox(Question + 1);
            }
        });
        // Press Start
        $('a#questionnaire-start').click(function() {
            $('#questionnaire').show();
            ShowQuestionBox(1);
        });
        // Press Submit
        $("input[type=submit]").click(function(event) {
            event.preventDefault();
            $.post("https://pi.invendr.com/dev2/update.php", {
                    user: url('?user'),
                    results: questionnaire_first_yes,
                    flag: 'wellness_check'
                })
                .done(function(data) {
                    window.close();
                })
                .fail(function() {
                    alert("Server not working!");
                });
        });
    });
});