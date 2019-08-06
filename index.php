<?
include 'lib/https.php';
include 'lib/header.php';
// include 'lib/media-query-debugging.php';  // uncomment for local debugging
?>
<body>
<div
        class="parallax-image-wrapper parallax-image-wrapper-100"
        data-anchor-target="#trigger-1 + .gap"
        data-bottom-top="transform:translate3d(0px, 200%, 0px)"
        data-top-bottom="transform:translate3d(0px, 0%, 0px)">
    <div
            class="parallax-image parallax-image-100"
            style="background-image:url(images/bg1.jpg)"
            data-anchor-target="#trigger-1 + .gap"
            data-bottom-top="transform: translate3d(0px, -80%, 0px);"
            data-top-bottom="transform: translate3d(0px, 80%, 0px);"
    ></div>
</div>

<div
        class="parallax-image-wrapper parallax-image-wrapper-100"
        data-anchor-target="#trigger-2 + .gap"
        data-bottom-top="transform:translate3d(0px, 200%, 0px)"
        data-top-bottom="transform:translate3d(0px, 0%, 0px)">
    <div
            class="parallax-image parallax-image-100"
            style="background-image:url(images/bg2.jpg)"
            data-anchor-target="#trigger-2 + .gap"
            data-bottom-top="transform: translate3d(0px, -80%, 0px);"
            data-top-bottom="transform: translate3d(0px, 80%, 0px);"
    ></div>
</div>

<div
        class="parallax-image-wrapper parallax-image-wrapper-50"
        data-anchor-target="#trigger-4 + .gap"
        data-bottom-top="transform:translate3d(0px, 300%, 0px)"
        data-top-bottom="transform:translate3d(0px, 0%, 0px)">
    <div
            class="parallax-image parallax-image-50"
            style="background-image:url(images/bg4.jpg)"
            data-anchor-target="#trigger-4 + .gap"
            data-bottom-top="transform: translate3d(0px, -60%, 0px);"
            data-top-bottom="transform: translate3d(0px, 60%, 0px);"
    ></div>
</div>

<div class="header" id="trigger-1"></div>

<div class="gap gap-fixed-height-large"
     style="background-image:url(images/bg1.jpg);">

    <div id="intro" data-0="opacity: 1" data-380="opacity: 0">
        <div class="container">
            <div class="intro-line"></div>
            <h1><span class="big-h1">Hi There.</span><br/>
                My Name Is Marc.</h1>
            <div class="intro-line"></div>
            <p class="dm_shadow1">
                    <span class="row">
                        I am a backend Python/Django developer and all around fun person.
                    </span>
            </p>
        </div> <!-- end container -->
    </div> <!-- end intro -->
</div> <!-- end parallax background -->

<? include 'lib/nav.php'; ?>

<div id="skrollr-body">
    <? include 'lib/section_1.php'; ?>
    <div id="stopTwitchInMobile" class="gap gap-fixed-height-small"
         style="background-image:url(images/bg2.jpg);">
        <?
        include 'lib/sometimes.php';
        ?>
    </div> <!-- end parallax background -->

    <?
    //  include 'section_2.php';
    ?>
    <div id="trigger-4">
        <div id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2><span class="headline-lines">FAQ</span></h2>
                    </div> <!-- end col-lg-12 -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                            <em>Software development exists on the screen and in
                                real life...</em>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                What is the (current) perfect stack?
                            </span>
                            Currently Heroku, Postgres, Python 3.x, Django LTS
                            (current please),
                            RabbitMQ, Celery (as needed), JQ, HTML5, Django REST
                            Framework (as needed), Wagtail (CMS upgrade)
                            BASH deployment, Github (GitLab is just not ready
                            yet),
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p class="">
                            <span class="dm_faq_question">
                                What does your dev environment look like?
                            </span>
                            Working in office, remote, on location is usually
                            very similar. Current IDE is PyCharm.
                            PIPENV. OSX via 15" MBP. Postico (PGSQL), SequelPro
                            (MySQL), Studio3T (Mongo/DDB)
                            native terminal (no mods), GIT Tower (perform better
                            without command line), single laptop screen,
                            legacy Apple Bluetooth keyboard, Bluetooth
                            multi-touch track pad,
                            <a href="https://aiaiai.dk/headphones/tma-2"
                               target="_blank">AIAIAI TM-2 Headphones</a>.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div> <!-- end row -->
                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                Unicode thoughts?
                            </span>
                            Like it, fewer errors and reduced concern on
                            character based exceptions.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p class="">
                            <span class="dm_faq_question">
                                Do you have some code examples?
                            </span>
                            My best work is for other companies and is their
                            property. Some work is visible on <a target="_blank" href="https://github.com/datamafia">GitHub</a>,
                            but I would prefer to discuss a project or position's
                            needs and deliver selected examples from my archive.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div> <!-- end row -->

                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                Wagtail and Django REST (DRF), heard of it?
                            </span>
                            Very much! I have worked on Django REST Framework
                            multiple times and it is amazing, especially with
                            Swagger integration.
                            Wagtail has been on my radar forever and I jumped in
                            officially in 2019 once I saw a major Django shop
                            add to their core offerings. Wordpress is not looking
                            too good for the future and delivering content
                            is a problem that will never go away, I am betting
                            on Wagtail for sure!
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>

                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                Impostor syndrome, real or myth?
                            </span>
                            Very much real and a legitimate struggle for me and
                            most programmers I know.
                            Yet all the problems still get solved, code is
                            delivered, and life moves on...
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3><span class="headline-lines">IRL</span></h3>
                    </div> <!-- end col-lg-12 -->
                </div> <!-- end row -->
                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                Oxford comma?
                            </span>
                            Of course. Anything else conflicts with PEP8 and
                            occasionally adds semantic ambiguity.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p class="">
                            <span class="dm_faq_question">
                                What do you like to do away from the screen?
                            </span>
                            Spend time with my wife, electronic engineering,
                            build stuff, and
                            fetch with my <a
                                    href="https://www.instagram.com/lana.welsh.terrier/"
                                    target="_blank">Welsh</a> terrier.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div> <!-- end row -->
                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                What are your favorite books?
                            </span>
                            I mostly read programming books, but also enjoy
                            derivative works from Burroughs and Gysin
                            <a href="http://en.wikipedia.org/wiki/Cut-up_technique"
                               title="Burroughs and Gysin cut-up experiments"
                               target="_blank">cut-up experiments</a>. I will
                            never forget Anthony Bourdain's writing, he changed
                            my life and he is very missed.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                How do you feel about standardized tests?
                            </span>
                            Generally the single most painful part of my
                            professional work. I never tested well and found
                            that
                            these tests represented my potential in a negative
                            fashion. The picture painted is usually wrong,
                            I am not a comp-sci grad, they do well on these
                            tests, not me.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                What are your favorite movies?
                            </span>
                            The list is easy: Waking Life, Big Lebowski, and
                            Brazil.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p>
                            <span class="dm_faq_question">
                                What are your favorite albums?
                            </span>
                            All I need are three:
                            <em>Paul's Boutique</em> by Beastie Boys, <em>Little
                                Sunflower</em> by Milt Jackson, and <em>TNT</em>
                            by Tortoise.
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div>
                <div class="row">
                    <div>
                        <p class="">
                            <span class="dm_faq_question">
                                What is your favorite quote?
                            </span>
                            "When the going gets weird, the weird turn pro."
                            --Hunter S Thompson
                        </p>
                    </div> <!-- end col-lg-6 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end faq -->
    </div>
    <div class="gap gap-fixed-height-small"
         style="background-image:url(images/bg4.jpg);">
        <div class="container">
            <p class="quote-text center-block">
                <span class="dm_force_link_header dm_shadow1">
                    Simplicity and elegance are expensive up front but a better investment in the long run.
                </span>
            </p>
        </div>
    </div>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><span class="headline-lines">contact</span></h2>
                </div> <!-- end col-lg-12 -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p>
                        Communication occurs on many channels. Instant message,
                        phone, team platforms, project management software,
                        video services,
                        and email (the best place to begin).
                    </p>
                </div> <!-- end col-lg-6 -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-info">
                        <p><i class="fa fa-envelope"></i>marc [at] datamafia
                            [dot] com</p>
                    </div> <!-- end contact-info -->
                    <ul class="social-footer list-unstyled list-inline">
                        <li><a title="Visit me on GitHub" target="_blank"
                               href="https://github.com/datamafia"><i
                                        class="fa fa-github-square"></i></a>
                        </li>
                        <li><a title="Connect on LinkedIn" target="_blank"
                               href="https://www.linkedin.com/in/python-dev/"><i
                                        class="fa fa-linkedin-square"></i></a>
                        </li>
                        <li><a title="Stackoverflow profile" target="_blank"
                               href="https://stackoverflow.com/users/860715/marc"><i
                                        class="fa fa-stack-overflow"></i></a>
                        </li>
                        <li><a title="Personal Instagram" target="_blank"
                               href="https://www.instagram.com/irlmarc/"><i
                                        class="fa fa-instagram"></i></a></li>
                        <li><a title="Subscribe to emails on Substack"
                               target="_blank"
                               href="https://irlmarc.substack.com/"><img
                                        id='substacklogo'
                                        src="/images/substack.png"/></a></li>
                        <li><a title="Angel List"
                               target="_blank"
                               href="https://angel.co/python-dev"><img
                                        id='angelist'
                                        src="/images/angelist.png"/></a></li>
                    </ul>

                </div> <!-- end col-lg-6 -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <hr/>
                        <small>&copy; <?php echo date( "Y" ); ?> Data Mafia All
                            Rights Reserved.
                        </small>
                    </div> <!-- end copyright -->
                </div> <!-- end col-lg-12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end contact -->
</div> <!-- end skrollr-body -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/dm.js"></script>
<!-- smooth scroll -->

<!-- parallax -->
<script>
    $(window).load(function () {
        if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
            var s = skrollr.init({
                forceHeight: false,
                smoothScrolling: false,
                mobileDeceleration: 0.004
            });
        }
    });
</script>
<!-- sticky nav -->
<script>
    $(document).ready(function () {
        $("#nav").sticky({topSpacing: 0});
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2125542-16']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>