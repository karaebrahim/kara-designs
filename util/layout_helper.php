<?php

  /**
   * Handles all of the layout-related methods, including common headers.
   */
  class LayoutHelper {

    /**
     * Displays <head> tag, loading stylesheets.
     */
    public static function displayHeadTag() {
      echo "
        <!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
        <!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
        <!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
        <!--[if gt IE 8]>      <html class=\"no-js\"> <![endif]-->

        <head>
          <meta charset=\"utf-8\">
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
          <title>KARA DESIGNS</title>
          <meta name=\"description\" content=\"\">
          <meta name=\"viewport\" content=\"width=device-width\">
          <link href='http://fonts.googleapis.com/css?family=Quicksand|Muli'
                rel='stylesheet' type='text/css'>
          <link href='img/arrows.png' rel='shortcut icon' />
          <link rel=\"stylesheet\" href=\"css/normalize.css\">
          <link rel=\"stylesheet\" href=\"css/main.css\">
          <script src=\"js/vendor/modernizr-2.6.2.min.js\"></script>
        </head>";
    }

    /**
     * Displays navigation bar with links, logo and contact info.
     */
    public static function displayNavigationBar() {
      echo "<div id=\"header\">
                <a href=\"index.php\"><img src=\"img/logo4.png\" /></a>
                <nav class=\"clearfix\">
                    <ul>
                        <li><a href=\"index.php\">PORTFOLIO</a></li>
                        <li><a href=\"about.php\">ABOUT</a></li>
                        <li><a href=\"contact.php\">CONTACT</a></li>
                    </ul>
                </nav>
            </div>";
    }

    /**
     * Displays the banner div with the image file containing the specified filename.
     */
    public static function displayBanner($bannerFilename) {
      echo "<div id=\"banner\">
              <img src=\"img/" . $bannerFilename . "\" />
            </div>";
    }

    /**
     * Displays footer with email address.
     */
    public static function displayFooter() {
      echo "<footer>
              <p>
                <a href=\"mailto:kara@karaebrahim.com\" target=\"_blank\">kara@karaebrahim.com</a>
              </p>
            </footer>";
    }

    /**
     * Loads all external JS files.
     */
    public static function loadCommonJavascriptMethods() {
      echo "
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.9.1.min.js\"><\/script>')</script>
        <script src=\"js/plugins.js\"></script>
        <script src=\"js/main.js\"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>";
    }
  }

?>
