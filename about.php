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
  LayoutHelper::displayBanner("banner-about2.png");
?>

            <div id="main">
                <div id="about" class="clearfix">
                    <div id="text">
                        <div class="gray-bar">
                            <h1>KARA EBRAHIM</h1>
                        </div>
                        <p>I’m a Boston-based designer with a passion for graphic and print design, a strong interest in coding and typography, a day job for typesetting and illustration, and a background in unrelated nonsense (publishing, medieval literature, writing, and copyediting).</p>
                        <p>I love simple modern design, all things outdoors, sad music, dark beer, and cute dresses.</p>
                        <p><a href="contact.php">Contact me.</a> Let’s work together.</p>
                    </div><!-- end div id="text" -->
                <div class="about-pic">    
                    <img src="img/me3.jpg" />
                    <small>photo by Aleka Dimos</small>
                </div>
                </div><!-- end div id="about" -->
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