<?php
if (isset ($_POST['submit'])) {
  $name = $_POST['name'];
    $subject = $_POST['subject'];
      $mailFrom = $_POST['mail'];
        $message = $_POST['message'];


        $mailTo = ""
        $whenReceived ="From: ".$mailFrom;
        $txt ="Emaile from ".$name.".\n\n".$message;

        mail ($mailTo, $subject, $txt, $whenReceived);
        header ("Location: contactform.php?mailsened");
}



 ?>
