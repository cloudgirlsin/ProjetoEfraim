<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contato@cloudgirls.com.br';

  if (isset($_POST['submit'])) {
     
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $mailFrom = $_POST['email']; 
    $message = $_POST['message'];
    $subject= $_POST['subject'];

    $mailTo="contato@cloudgirls.com.br";
    $headers="From: ".$mailFrom;
    $subject="".$subject;
    $txt="Nome:" .$name. ".\nTel:" .$phone. ".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");

}

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
