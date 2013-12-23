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
  LayoutHelper::displayBanner("banner-layout.png");
?>

            <div id="arrows">
                <a href="invitation2.php"><img src="img/left-arrow.png" /></a>
                <a href="covers.php"><img src="img/right-arrow.png" /></a>
                <a href="index.php"><img src="img/x.png" /></a>
            </div>

            <div id="main">
                <div id="portfolio">
                    <div id="images" class="clearfix">
                        <img src="img/cookbook-big.jpg" />
                        <img src="img/cookbook-left.jpg" />
                        <img src="img/cookbook-right.jpg" />
                    </div><!-- end div id="images" -->
                    <p class="first last">Here's a magazine layout I created for school. This photograph was taken by Aleka Dimos.</p>
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