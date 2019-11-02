<?php
### VARIABLES SET ###
$gender = $_POST['gender'];
$firstname = $_POST['firstnamee'];
$lastname = $_POST['NomDeFam'];
$rasberry = $_POST['rasberrytype'];
$email = $_POST['cmoncontact'];
$countryy = $_POST['yourcountry'];
$msg = $_POST['msgyours'];
// $allinfo = 'first name:'.$firstname .'<br/>lastname:'. $lastname .'<br/>gender:' .$gender . '<br/>rasberry type:' . $rasberry . '<br/>country:' . $countryy . '<br/>message:' . $msg . '<br/>email:' . $email;
// ;
$filtermsg = htmlspecialchars(strip_tags($msg));
$submityou = $_POST['submit'];


### FUNCTIONS ###
function sanitize_validate_input($input) {
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	$input = ctype_alpha($input);
	return $input;
}

function error($message, $color){
	return "<small class='$color'> $message </small>";
}

?>