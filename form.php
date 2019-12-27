<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: Your website';
  $to = 'mirjanasavic@yahoo.com';
  $subject = 'Somebody is using your contact form';

  $body = "from: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
  if (mail ($to, $subject, $body, $from)) {
    echo '<p>Thank you for your message!</p>';
  } else {
    echo '<p>Oops! Something went wrong, please try sending your message again.</p>'
  }
}
?>
