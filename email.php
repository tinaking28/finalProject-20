<?php
// Get data from the form
$name = $_POST["theName"];
$email = $_POST["theEmail"];
$score = $_POST["theScore"];

// echo "$name <br /> $email <br /> $score";

$to = $email;
$subject = "Your Game Results";

// Email body
$message = 
"<p>Greetings, $name!</p>
<p>Here are the results from your Who Wants To Be A Millonaire Game:</p>
<p><strong>Score: </strong>$score</p>
<p>Please play again soon,</p>
<p>Comp20 Webmaster</p>";

// Headers
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=iso-8859-1";

// Additional headers
$headers[] = "From: Who Wants To Be A Millionaire <comp20webmaster@gmail.com>";
$headers[] = "Reply-To: samuel.berman@tufts.edu";
$headers[] = "Bcc: comp20webmaster@gmail.com";

// Send it
mail($to, $subject, $message, implode("\r\n", $headers));
echo "Email Sent Successfully.";
?>