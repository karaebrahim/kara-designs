<?php
  require_once "mail_helper.php";

  class ContactHelper {

    /**
     * Displays a modal allowing the user to confirm the email they'd like to send. Note that the
     * modal is initialized as hidden.
     */
    public static function displayEmailModal() {
      echo "<div id='emailModal' class='modal hide fade' tabindex='-1' role='dialog'
                 aria-labelledby='myModalLabel' aria-hidden='false' style='display:none;'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal'
                        aria-hidden='true'>&times;</button>
                <h3 id='myModalLabel' class='center'>Confirm Email</h3>
            </div>
            <div class='modal-body'>
                <p>Please confirm that you'd like to send the following email to Kara Designs:</p>";
      if (isset($_POST["originalEmailSubmit"])) {
        // If user tries to send contact email, modal will show what will be emailed.
        $servicesString = array_key_exists("services", $_POST) ? $_POST["services"] : null;
        $commentsString = array_key_exists("comments", $_POST) ? $_POST["comments"] : null;
        $name = stripslashes(trim($_POST["name"]));
        $email = stripslashes(trim($_POST["email"]));

        echo "<strong>From:</strong> " . $name . " &lt;" . $email . "&gt;<br/><br/>" .
             ContactHelper::getMessage($servicesString, $commentsString);

        // Store form values in session to be used if user confirms.
        ContactHelper::storeInSession("name");
        ContactHelper::storeInSession("email");
        ContactHelper::storeInSession("services");
        ContactHelper::storeInSession("comments");
      }
      echo "</div>
            <div class='modal-footer'>
                <button class='btn' data-dismiss='modal' aria-hidden='true'>Cancel</button>
                <input id=\"emailButton\" class=\"btn btn-primary\" type=\"submit\"
                       name=\"confirmEmailSubmit\" value=\"Send email\" />
            </div>
        </div>";
    }

    /**
     * If user tries to send contact email, show modal and remove form validation.
     */
    public static function showModalIfUserSubmits() {
      if (isset($_POST["originalEmailSubmit"])) {
        echo "<script>
                $('#name').removeAttr('required');
                $('#email').removeAttr('required');
                $('#emailModal').modal('toggle');
              </script>";
      }
    }

    /**
     * If user confirms email, send email and display confirmation message if successful.
     */
    public static function sendMailIfUserConfirms() {
      if (isset($_POST["confirmEmailSubmit"])) {
        // Load form values from session and send email.
        $fromName = ContactHelper::loadFromSession("name");
        $fromEmail = ContactHelper::loadFromSession("email");
        $services = ContactHelper::loadFromSession("services");
        $comments = ContactHelper::loadFromSession("comments");
        $mailMessage = ContactHelper::getMessage($services, $comments);

        if (MailHelper::sendContactMail($fromName, $fromEmail, $mailMessage)) {
          echo "<div id='emailMessageDiv' class='alert alert-success center'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <strong>Email sent successfully! Thanks!</strong>
                </div>";
        } else {
          // If mail fails, display error message.
          echo "<div id='emailMessageDiv' class='alert alert-error center'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <strong>An error occurred while sending the email. Please try again.</strong>
                </div>";
        }
      }
    }

    /**
     * Returns the email message based on the user-specified services and comments.
     */
    private static function getMessage($serviceArray, $commentsString) {
      $message = "";
      if (isset($serviceArray)) {
        $message .= "<strong>Type of service:</strong><br/><ul>";
        foreach ($serviceArray as $service) {
          $message .= "<li>". $service ."</li>";
        }
        $message .= "</ul>";
      }

      if (isset($commentsString) && $commentsString !== '') {
        $message .= "<strong>Questions/Comments:</strong><br/>" .
            nl2br(stripslashes($commentsString));
      }
      return $message;
    }

    /**
     * Stores the value in _POST associated with the specified key into the session, with the same
     * key.
     */
    private static function storeInSession($key) {
      $_SESSION[$key] = array_key_exists($key, $_POST) ? $_POST[$key] : null;
    }

    /**
     * Returns the value from session associated with the specified key (or null if none exists),
     * and unsets the session for that key.
     */
    private static function loadFromSession($key) {
      $value = null;
      if (array_key_exists($key, $_SESSION)) {
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);
      }
      return $value;
    }
  }
?>
