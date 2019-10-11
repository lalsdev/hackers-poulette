<?php
$from ="no-reply@poulet.be";
$to = $sanitizeemail;
$messagesubject = "confirm request";
$message = "We confirm we have received your request";
$headers = "From:". $from;

mail($to, $messagesubject, $message, $headers);
?>