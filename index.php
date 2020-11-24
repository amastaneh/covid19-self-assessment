<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.messagestore.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.fallbacks.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.language.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.parser.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.emitter.js"></script>
    <script src="/js/lib/jquery.i18n/jquery.i18n.emitter.bidi.js"></script>
    <script src="js/lib/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>
    <script src="js/lib/js-url-2.6.3/dist/jquery-url.min.js"></script>

    <script src="js/index.js"></script>
    <link rel="stylesheet" href="./style/main.min.css">
</head>

<body>
    <span id="language-alt">
        <a target="_self" data-i18n="language-alt" data-i18n-href="language-alt-url"></a>
        <select class="language-alt" data-placeholder="Choose a Language...">
		    <option value="en">English</option>
		    <option value="fr">français</option>
        </select>
        <?php echo '<p>Hello World</p>'; ?> 
    </span>

    <section class="container">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <div class="shadow"></div>
                    </div>
                    <div class="blog-slider__content">
                        <div class="blog-slider__title" data-i18n="header-title"></div>
                        <div class="blog-slider__text">
                            <p data-i18n="header-body-1"></p>
                            <p>
                                <span data-i18n="header-body-2"></span>
                                <a target="_blank" data-i18n="header-body-3" data-i18n-href="header-body-3-url"></a>
                            </p>
                        </div>
                        <a target="_self" href="" class="blog-slider__button" data-i18n="header-button-title" data-i18n-href="header-button-url"></a>
                    </div>
                </div>
            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </section>

    <section class="container scroll">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </section>

    <div id="questionnaire" class="container questionnaire">
        <div class="questionnaire__box">
            <div class="questionnaire__item">
                <div class="questionnaire__content">
                    <div class="questionnaire__title">Are you experiencing any of the following:</div>
                    <div class="questionnaire__text">
                        <ul>
                            <li>Severe difficulty breathing (e.g. struggling to breathe or speaking in single words)</li>
                            <li>Severe chest pain</li>
                            <li>Having a very hard time waking up</li>
                            <li>Feeling confused</li>
                            <li>Losing consciousness</li>
                        </ul>
                    </div>
                    <center>
                        <a target="_blank" href="#" class="questionnaire__button active">YES</a>
                        <a target="_blank" href="#" class="questionnaire__button">No</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="questionnaire__box">
            <div class="questionnaire__item">
                <div class="questionnaire__content">
                    <div class="questionnaire__title">Are you experiencing any of the following:</div>
                    <div class="questionnaire__text">
                        <ul>
                            <li>Mild to moderate shortness of breath</li>
                            <li>Inability to lie down because of difficulty breathing</li>
                            <li>Chronic health conditions that you are having difficulty managing because of difficulty breathing</li>
                        </ul>
                    </div>
                    <center>
                        <a target="_blank" href="#" class="questionnaire__button">YES</a>
                        <a target="_blank" href="#" class="questionnaire__button active">No</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="questionnaire__box">
            <div class="questionnaire__item">
                <div class="questionnaire__content">
                    <div class="questionnaire__title">Are you experiencing any of the following:</div>
                    <div class="questionnaire__text">
                        <ul>
                            <li>new or worsening cough</li>
                            <li>shortness of breath or difficulty breathing</li>
                            <li>temperature equal to or over 38°C</li>
                            <li>feeling feverish</li>
                            <li>chills</li>
                            <li>fatigue or weakness</li>
                            <li>muscle or body aches</li>
                            <li>new loss of smell or taste</li>
                            <li>headache</li>
                            <li>gastrointestinal symptoms (abdominal pain, diarrhea, vomiting)</li>
                            <li>feeling very unwell</li>
                        </ul>
                    </div>
                    <center>
                        <a target="_blank" href="#" class="questionnaire__button">YES</a>
                        <a target="_blank" href="#" class="questionnaire__button">No</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="questionnaire__box">
            <div class="questionnaire__item">
                <div class="questionnaire__content">
                    <div class="questionnaire__title">Have you travelled to any countries outside Canada (including the United States) within the last 14 days?</div>
                    <div class="questionnaire__text">

                    </div>
                    <center>
                        <a target="_blank" href="#" class="questionnaire__button">YES</a>
                        <a target="_blank" href="#" class="questionnaire__button active">No</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="questionnaire__box">
            <div class="questionnaire__item">
                <div class="questionnaire__content">
                    <div class="questionnaire__title"> Within the last 14 days have you provided care or have close contact with a symptomatic person known or suspected to have COVID-19?</div>
                    <div class="questionnaire__text">
                        <p>A close contact is defined as a person who:</p>
                        <ul>
                            <li>
                                Provided care for the individual, including healthcare workers, family members or other caregivers, or who had other similar close physical contact without consistent and appropriate use of personal protective equipment; or
                            </li>
                            <li>
                                Lived with or otherwise had close prolonged contact (within 2 metres) with the person while they were infectious; or
                            </li>
                            <li>
                                Had direct contact with infectious bodily fluids of the person (e.g. was coughed or sneezed on) while not wearing recommended personal protective equipment.
                            </li>

                        </ul>
                    </div>
                    <center>
                        <a target="_blank" href="#" class="questionnaire__button">YES</a>
                        <a target="_blank" href="#" class="questionnaire__button">No</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="questionnaire__box">
            <div class="questionnaire__item">
                <div class="questionnaire__content">
                    <div class="questionnaire__title">
                        Have you had close contact with a person who travelled outside of Canada in the last 14 days who has become ill or experienced the following conditions?
                    </div>
                    <div class="questionnaire__text">
                        <ul>
                            <li>New or worsening cough; shortness of breath or difficulty breathing; temperature equal to or over 38°C</li>
                            <li>Feeling feverish</li>
                            <li>Chills; fatigue or weakness</li>
                            <li>Muscle or body aches; new loss of smell or taste</li>
                            <li>Headache</li>
                            <li>Gastrointestinal symptoms such as abdominal pain, diarrhea, vomiting</li>
                            <li>Feeling very unwell</li>
                        </ul>
                    </div>
                    <center>
                        <a target="_blank" href="#" class="questionnaire__button active">YES</a>
                        <a target="_blank" href="#" class="questionnaire__button">No</a>
                    </center>
                </div>
            </div>
        </div>
        <center>
            <hr/>
            <input type="submit" value="Submit"></input>
        </center>
    </div>
    <p><br/></p>
</body>

</html>