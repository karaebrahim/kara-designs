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
  LayoutHelper::displayBanner("banner-wedding.png");
?>

            <div id="arrows">
                <a href="package.php"><img src="img/left-arrow.png" /></a>
                <a href="invitation3.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/kelly-main2.png" />
                        <img src="img/kelly-rsvp.png" />
                        <img src="img/kelly-program.png" />
                    </div><!-- end div id="images" -->
                    <p class="first">Here's a wedding package for a client in Maine. It includes a Save the Date card, a wedding shower invitation, the main wedding invitation and accoutrement, a ceremony program, and seating placecards.</p>
                    <p class="last">The bride and groom were interested in a woodsy Maine theme, so we opted for forest creatures and a wicker texture.</p>
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