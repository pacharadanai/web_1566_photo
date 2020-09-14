<?php
// Check for empty fields
if(empty($_POST['comment']) ) {
  http_response_code(500);
  exit();
}


$comment = strip_tags(htmlspecialchars($_POST['Comment']));

// Create the email and send the message
$to = "pachardanaitapkeaw1@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Website Contact Form:  $comment";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nComment: $comment\n\n";
$header = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.


if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
