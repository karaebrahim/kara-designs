<!DOCTYPE html>
<?php
  require_once "util/contact_helper.php";
  require_once "util/layout_helper.php";

  if (!isset($_SESSION)) {
    session_start();
  }

  LayoutHelper::displayHeadTag();
?>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form id="contactform" action="contact.php" method="post">
          <div id="wrapper">

<?php
  LayoutHelper::displayNavigationBar();
  LayoutHelper::displayBanner("banner-contact2.png");
?>
            <div id="main">
                <div id="form">
<?php
  ContactHelper::sendMailIfUserConfirms();
?>                
                    <div class="gray-bar-long">
                        <h1>LET'S WORK TOGETHER</h1>
                    </div>
                        <fieldset class="personal-info">
                            <label for="name">Name </label><input type="text" name="name" id="name" required />
                            <label for="email">Email </label><input type="email" name="email" id="email" required />
                        </fieldset>
                        <fieldset class="checkbox">
                            <label>Type of service (select all that apply)</label></br>
                            <input type="checkbox" name="services[]" value="Web design"> Web design</br>
                            <input type="checkbox" name="services[]" value="Graphic design"> Graphic design</br>
                            <input type="checkbox" name="services[]" value="Print design"> Print design</br>
                            <input type="checkbox" name="services[]" value="Branding"> Branding</br>
                            <input type="checkbox" name="services[]" value="Invitations"> Invitations
                        </fieldset>
                        <fieldset class="comment-info">
                            <label for="comments" class="column">Questions/Comments </label>
                            <textarea id="comments" name="comments" class="comments"></textarea>
                            <input type="submit" name="originalEmailSubmit" class="btn" value="Send email" />
                        </fieldset>
                </div><!-- end div id="form" -->
            </div><!-- end div id="main" -->

<?php
  LayoutHelper::displayFooter();
?>

        </div><!-- end div id="wrapper" -->
<?php
  ContactHelper::displayEmailModal();
?>
      </form>

<?php
  LayoutHelper::loadCommonJavascriptMethods();
  ContactHelper::showModalIfUserSubmits();
?>

    </body>
</html>