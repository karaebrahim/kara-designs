<?php
  require_once "util/layout_helper.php";

  LayoutHelper::displayHeadTag();
?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">

<?php
  LayoutHelper::displayNavigationBar();
  LayoutHelper::displayBanner("banner-cards.png");
?>

            <div id="arrows">
                <a href="poster2.php"><img src="img/left-arrow.png" /></a>
                <a href="std.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/my-cards.png" />
                        <img src="img/myb-cards2.png" />
                        <img src="img/aleka-cards.png" />
                        <img src="img/jonathan.png" />
                    </div><!-- end div id="images" -->
                    <p class="first last">Here are various business cards created for myself, an accountant, a photographer, a personal trainer, and a Brooklyn-based actor.</p>
                </div><!-- end div id="portfolio" -->
            </div><!-- end div id="main" -->

<?php
  LayoutHelper::displayFooter();
?>

        </div><!-- end div id="wrapper" -->

<?php
  LayoutHelper::loadCommonJavascriptMethods();
?>

    </body>
</html>
</html>