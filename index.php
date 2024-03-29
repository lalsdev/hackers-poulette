<?php
include 'variablesandfunctions.php';
?>

<!DOCTYPE HTML>
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
				<?php 
				// msg pops if the inputs ok
				include 'msgoksend.php';
				?>
				<form class="bgform pt-5" method="post" action="">
					<div class="row">
						<div class="col-12 text-center">
							<img src="assets/img/hackers-poulette-logo-ameliore.png" class="img-fluid img-size" alt="logo-hackers-poulette">
						</div>
					</div>
					<div class="row ml-2">
						<div class="col-12 col-md-5">
							<label for="NomDeFam" class="text-white" title="Your email please">Your last name</label>
							<br/>
							<input type="text" name="NomDeFam" id="NomDeFam" value="" maxlength="20" title="Your surname please" placeholder="BestCoachs"/>
							<?php
							// check if the input last name equals not the filtered lastname from special chars
							if($lastname != sanitize_validate_input($lastname)){
								echo error("Please enter only letters", "error");
							//stores the lastname in variable if sanitize
							} else {
								// $filteredlastname = $lastname;
							}
							if (empty($lastname)  && (isset($submityou))){
								echo error("Please type your lastname", "info");
							}
							?>
						</div>
						<div class="col-12 col-md-5 offset-md-2">
							<label for="firstname" class="text-white" title="your firstname below please">Firstname</label>
							<br/>
							<input type="text" name="firstnamee" id="firstname" value="" maxlength="10" title="Your firstname please" placeholder="Marly"/>
							<?php
							//check for special chars in firstname
							if($firstname != sanitize_validate_input($firstname)){
								// $filteredfirstname = $firstname;
								echo error("Please enter only letters", "error");
							} else {
								// $filteredfirstname = $firstname;
							}
							if (empty($firstname)  && (isset($submityou))){
								echo error("Please type your firstname", "info");
							}
							?>
						</div>
					</div>
					<div class="row ml-2 mt-2">
							<div class="col-12 col-md-5 mt-2">
								<label for="gender" class="text-white" title="gender">Your gender</label> <br/>
								<label for="fem" class="text-white" title="female button">Woman</label>
								<input type="radio" name="gender" id="fem" value="fem" title="are you a woman?"/>
								<br/>
								<label for="man" class="text-white" title="manbutton">Man</label>
								<input type="radio" name="gender" id="man" value="man" title="are you a man?"/>
								<br/>
								<label for="other" class="text-white" title="otherbutton">Other</label>
								<input type="radio" name="gender" id="other" value="Other" title="Other type?"/>
								<?php
								if (empty($gender) && isset($submityou)){
									echo error("Choose a gender please","error");
								}
								?>
							</div>
						<div class="row mt-2">
							<div class="col-12 offset-1">
								<label for="country" class="text-white">Country</label><br />
								<select name="yourcountry" id="country" title="which country are your from?">
								<?php
								// uses countries array to display them
								include 'countries.php';
								foreach ($countries as $country){
									echo "<option value='$country' class='text-white' title='$country'>$country</option>";
								}
								?>
								</select>
							</div>
						</div>
							<div class="col-12">
								<label for="cmoncontact" class="text-white" title="your email below please">E-mail</label>
							</div>
							<div class="col-12">
								<input  type="text" name="cmoncontact" id="cmoncontact" class="col-12" title="Your email please" placeholder="egg@poulette.cotcot"/>
								<?php
									if($email != filter_var($email, FILTER_VALIDATE_EMAIL)){
										echo error("Please enter a valid email", "error");
									}
									if (isset($submityou) && empty($email)){
										echo error("This needs to be filled , type an email please", "info");
									}
								?>
							</div>
						<div class="col-12 mt-2">
						<label for="subject" class="text-white">Rasberry type</label>
						<br/>
						<select name="rasberrytype" id="subject" title="which type of rasberry?">
							<option value="simple" title="starter kit">kit build a media center</option>
							<option value="intermediate" title="more complex rasberry kit"> kit old-school video games</option>
							<option value="advanced" title="for legends rasberry kit">kit build a Linux computer </option>
							<option value="other" selected title="other">Other</option>
						</select>
						</div>
						<div class="col-12 mt-2">
							<label for="yourmsg" class="text-white" title="your message below please">Your message</label>
							<textarea type ="text" name="msgyours" id=yourmsg rows="5" cols="10" class="col-12" title="your message here" placeholder="Dear poulette, this is a message to tell you that..."></textarea>
							<?php
							if ($msg != $filtermsg){
								echo error("Are you trying to do something?","error");
							} else {
								// $getmessage = $msg;
							}
							if (empty($msg) && (isset($submityou))){
								echo error("This needs to be filled, type a message please", "info");
							}
							?>
						</div>
						<div class="col text-center">
							<button type="Submit" class="btn btnstyle mt-2 mb-2" name="submit">Submit</button>
						<div>
				</form>
			</div>
		</main>
		<div>
			<label class="winnie" for="firstname"></label>
			<input class="winnie" autocomplete="off" type="text" id="firstname" name="firstname" placeholder="Your firstname here" title="firstname">
			<label class="winnie" for="email"></label>
			<input class="winnie" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here" title="email">
			<label class="winnie" for="lastname"></label>
			<input class="winnie" autocomplete="off" type="text" id="lastname" name="lastname" placeholder="Your lastname here" title="lastname">
			<label class="winnie" for="yourmsg"></label>
			<input class="winnie" autocomplete="off" type="text" id="yourmsg" name="yourmsg" placeholder="Your message here" title="message">
		</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
