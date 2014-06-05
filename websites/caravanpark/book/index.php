
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("book@sunpark.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for your enquiry. We will respond shortly!";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='contact.php'>
  Email:<br> <input name='email' type='text'><br>
  Booking Date:<br> <input name='subject' type='text'><br>
  Information:<br>
  <textarea name='message' rows='15' cols='30'>
  </textarea><br>
  <input type='submit' value='Send'>
  </form>";
  }
?>
    