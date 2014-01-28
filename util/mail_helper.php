<?php

  /**
   * Handles automatic e-mailing functionality
   */
  class MailHelper {
    const KARA_EMAIL = "kara@karaebrahim.com";

    /**
     * Sends the specified message w/ the specified subject to the specified set of users.
     */
    public static function sendContactMail($fromName, $fromEmail, $message) {
      $to = MailHelper::KARA_EMAIL;
      $subject = "Contact from " . $fromName . " (" . $fromEmail . ") via karaebrahim.com";

      // set headers
      $headers  = "From: KaraEbrahim.com <noreply@karaebrahim.com>\r\n";
      $headers .= "Reply-To: " . $fromName . " <" . $fromEmail . ">\r\n";
      $headers .= "Return-Path: " . $fromName . " <" . $fromEmail . ">\r\n";
      $headers .= "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

      return mail($to, $subject, $message, $headers);

      // Used for testing what will be mailed.
      // return MailHelper::displayMail($to, $subject, $message, $headers);
    }

    /**
     * Utility method to display what will be mailed.
     */
    private static function displayMail($to, $subject, $message, $headers) {
      echo "<h1>To</h1>
        <p>" . htmlentities($to) . "</p>
        <h1>Subject</h1>
        <p>" . htmlentities($subject) . "</p>
        <h1>Message</h1>
        <p>" . htmlentities($message) . "</p>
        <h1>Headers</h1>
        <p>" . htmlentities($headers) . "</p>";
      return true;
    }
  }
?>
