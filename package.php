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
  LayoutHelper::displayBanner("banner-business.png");
?>

            <div id="arrows">
                <img src="img/blank-arrow.png" />
                <a href="invitation.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/myb-cards2.png" />
                        <img src="img/myb-full.png" />
                        <img src="img/myb-services.png" />
                    </div><!-- end div id="images" -->
                    <p class="first">Here's a full business package I provided for an accounting/bookkeeping firm in Portland, Maine. It includes a logo, business cards, letterhead, and website.</p>
                    <p>My client wanted something soft and feminine, while still evoking professionalism. I focused on her love for antique bicycles and poppies.</p>
                    <p class="last">Check out <a href="http://mindingyourbusinessinc.com" target="_blank">mindingyourbusiness.com</a>.</p>
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