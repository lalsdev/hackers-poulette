<?php
$gender = $_POST['gender'];
$firstname = $_POST['firstnamee'];
$lastname = $_POST['lastnamee'];
$rasberry = $_POST['rasberrytype'];
$email = $_POST['mail'];
$countryy = $_POST['yourcountry'];
$msg = $_POST['msgyours'];
$filtermsg = htmlspecialchars(strip_tags($msg));
$sanitizeemail = filter_var($email, FILTER_SANITIZE_EMAIL);
$submityou = $_POST['submit'];

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

function specialchar($string){
	return ctype_alpha($string);
}

function error($message, $color){
	return "<small class='$color'> $message </small>";
}

// function sendemail(){
// 	if (isset($oklastname) && isset($okfirstname) && isset($gender) && isset($sanitizeemail) && isset($countryy) && isset($filtermsg)){
// 		mail();
// 	}


?>

<!DOCTYPE HTML>
<html>
<html lang="en">
	<head>
		<title>Contact form</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="Rasberry Pi for anyone who wants to learn about computers.">
		<meta name="keywords" content="computers, rasberrypi, learning, buy, information, it">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
		<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	</head>
	<body>
		<main>
			<div class="container w-auto">
				<form class="bgform" method="post" action="">
					<div class="row">
						<div class="col-12 text-center">
							<img src="assets/img/hackers-poulette-logo.png" class="img-fluid img-size" alt="logo-hackers-poulette">
						</div>
					</div>
					<div class="row ml-2">
						<div class="col-12 col-md-5">
							<label for="lastname" class="text-white">Your last name</label>
							<br/>
							<input type="text" name="lastnamee" id="lastname" value="" maxlength="20"/>
							<?php
							// check if the input last name equals not the filtered lastname from special chars
							if($lastname != specialchar($lastname)){
								$oklastname = $lastname ;
								echo error("Please enter only letters", "error");
							//stores the lastname in variable
							} else {
								$getlastname = $lastname;
							}
							if (empty($lastname) && (isset($submityou))){
								echo error("Please type your lastname", "error");
							}
							?>
						</div>
						<div class="col-12 col-md-5 offset-md-2">
							<label for="firstname" class="text-white">Firstname</label>
							<br/>
							<input type="text" name="firstnamee" id="firstname" value="" maxlength="10"/>
							<?php
							//check for special chars in firstname
							if($firstname != specialchar($firstname)){
								$okfirstname = $firstname;
								echo error("Please enter only letters", "error");
							} else {
								$getfirstname = $firstname;
							}
							if (empty($firstname)  && (isset($submityou))){
								echo error("Please type your firstname", "error");
							}
							?>
						</div>
					</div>
					<div class="row ml-2">
						<div class="col-12 col-md-5 mt-2">
							<div>
								<label for="fem" class="text-white">Woman</label>
								<input type="radio" name="gender" id="fem" value="fem"/>
								<br/>
								<label for="man" class="text-white">Man</label>
								<input type="radio" name="gender" id="man" value="man"/>
								<?php
								if (empty($gender) && isset($submityou)){
									echo error("Choose a gender please","error");
								}
								?>
							</div>
						</div>
						<div class="col-md-2">
						</div>
						<div class="row ml-2">
							<div class="col-12 offset-md-1">
								<label for="country" class="text-white">Country</label>
							</div>
							<div class="col-12 offset-md-1">
								<select name="yourcountry" id="country">
									<option value="Belgium" class="text-white">Belgium</option>
									<option value="France" class="text-white">France</option>
									<option value="India" class="text-white">India</option>
									<option value="France" class="text-white">Scotland</option>
								</select>
							</div>
						</div>
							<div class="col-12">
								<label for="useremail" class="text-white">E-mail</label>
							</div>
							<div class="col-12">
								<input  name="mail" id="useremail" value=""class="col-12" type="email"/>
								<?php
									if($email != $sanitizeemail) {
									echo error("Please enter a valid email", "error");
									} else {
										$getfirstname = $firstname;
									}
									if (isset($submityou) && empty($email)){
										echo error("Please type an email", "error");
									}
								?>
							</div>
						<div class="col-12 mt-2">
						<label for="subject" class="text-white">Rasberry type</label>
						<br/>
						<select name="rasberrytype" id="subject">
							<option value="simple">simple rasberry</option>
							<option value="intermediate"> rasberry+</option>
							<option value="advanced">rasberry++</option>
							<option value="other" selected>Other</option>
						</select>
						</div>
						<div class="col-12 mt-2">
							<label for="yourmsg" class="text-white">Your message</label>
							<textarea name="msgyours" id=yourmsg rows="5" cols="10" class="col-12"></textarea>
							<?php
							if ($msg != $filtermsg){
								echo error("Are you trying to do something?","error");
							} else {
								$getmessage = $msg;
							}
							if (empty($msg) && (isset($submityou))){
								echo error("Type a message please", "error");
							}
							?>
						</div>
						<div class="col text-center">
							<button type="Submit" class="btn colorbuton mt-2 mb-2" name="submit">Submit</button>
						<div>
				</form>
			</div>
		</main>
		<div>
			<label class="winnie" for="firstname"></label>
			<input class="winnie" autocomplete="off" type="text" id="firstname" name="firstname" placeholder="Your firstname here">
			<label class="winnie" for="email"></label>
			<input class="winnie" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here">
			<label class="winnie" for="lastname"></label>
			<input class="winnie" autocomplete="off" type="lastname" id="lastname" name="lastname" placeholder="Your lastname here">

		</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
