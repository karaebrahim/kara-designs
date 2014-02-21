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
  LayoutHelper::displayBanner("banner-portfolio2.png");
?>

            <div id="main">
                <div id="wrap">
                    <div class="imgContainer image1">
                        <a href="package.php"><img src="img/myb2.jpg" /></a>
                        <p class="caption">BUSINESS PACKAGE</p>
                    </div>
                    <div class="imgContainer image2">
                        <a href="invitation.php"><img src="img/kelly-invite.png" /></a>
                        <p class="caption">WEDDING PACKAGE</p>
                    </div>
                    <div class="imgContainer image3">
                        <a href="invitation3.html"><img src="img/gaynes-wedding-small.png" /></a>
                        <p class="caption">INVITATIONS</p>
                    </div>
                    <div class="imgContainer image3">
                        <a href="poster.php"><img src="img/arrested2.png" /></a>
                        <p class="caption">POSTER</p>
                    </div>
                    <div class="imgContainer image2">
                        <a href="illustration.php"><img src="img/animals.png" /></a>
                        <p class="caption">ILLUSTRATION</p>
                    </div>
                    <div class="imgContainer image1">
                        <a href="infographic.php"><img src="img/tattoo-small.png" /></a>
                        <p class="caption">INFOGRAPHIC</p>
                    </div>
                    <div class="imgContainer image1">
                        <a href="invitation2.php"><img src="img/wedding2.png" /></a>
                        <p class="caption">INVITATIONS</p>
                    </div>
                    <div class="imgContainer image2">
                        <a href="layout.php"><img src="img/cookbook.png" /></a>
                        <p class="caption">MAGAZINE LAYOUT</p>
                    </div>
                    <div class="imgContainer image3">
                        <a href="covers.php"><img src="img/book.png" /></a>
                        <p class="caption">BOOK COVERS</p>
                    </div>
                    <div class="clearfix">
                        <div class="imgContainer image1">
                            <a href="poster2.php"><img src="img/records.png" /></a>
                            <p class="caption">POSTER</p>
                        </div>
                        <div class="imgContainer image2">
                            <a href="cards.php"><img src="img/aleka-card.png" /></a>
                            <p class="caption">BUSINESS CARDS</p>
                        </div>
                        <div class="imgContainer image3">
                            <a href="std.php"><img src="img/kristy-std.jpg" /></a>
                            <p class="caption">SAVE THE DATES</p>
                        </div>
                    </div><!-- end div class="clearfix" -->
                </div><!-- end div id="wrap" -->
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