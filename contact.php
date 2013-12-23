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
  LayoutHelper::displayBanner("banner-contact2.png");
?>

            <div id="main">
                <div id="form">
                    <div class="gray-bar-long">
                        <h1>LET'S WORK TOGETHER</h1>
                    </div>
                    <form action="mailto:kara.ebrahim@gmail.com" method="post" enctype="text/plain">
                        <fieldset class="personal-info">
                            <label for="name">Name </label><input type="text" name="name" id="name" />
                            <label for="email">Email </label><input type="email" name="email" id="email" />
                        </fieldset>
                        <fieldset class="checkbox">
                            <label>Type of service (select all that apply)</label></br>
                            <input type="checkbox" name="web-design"> Web design</br>
                            <input type="checkbox" name="graphic-design"> Graphic design</br>
                            <input type="checkbox" name="print-design"> Print design</br>
                            <input type="checkbox" name="branding"> Branding</br>
                            <input type="checkbox" name="print-design"> Invitations
                        </fieldset>
                        <fieldset class="comment-info">
                            <label class="column">Questions/Comments </label>
                            <textarea class="comments"></textarea>
                            <input type="submit" value="Submit" />
                        </fieldset>
                    </form>
                </div><!-- end div id="form" -->
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