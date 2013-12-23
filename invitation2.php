<!DOCTYPE html>
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
  LayoutHelper::displayBanner("banner-invitations.png");
?>

            <div id="arrows">
                <a href="infographic.php"><img src="img/left-arrow.png" /></a>
                <a href="layout.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/wedding5.png" />
                        <img src="img/kristy-program.png" />
                        <img src="img/casino2.jpg" />
                    </div><!-- end div id="images" -->
                    <p class="first">At the top are wedding invitations and a wedding program I made for a client from Maine. The bride and groom wanted hydrangeas to be a central theme.</p>
                    <p class="last">At the bottom are Casino Night invitations I made for a nonproft company from southern Pennyslvania for their annual fundraiser.</p>
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