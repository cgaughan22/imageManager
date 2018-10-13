
<html lang="en">

	<head>
		<title>Contact: Fancy Touch</title>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<?php include 'globalHead.php';?>
		<style type="text/css">
			@media screen and (max-width : 950px) {
				#welcome{
					height: 160px !important;
				}
				#welcome-img{
					
					height: 100px !important;
					}
				.recaptcha{
					data-size: compact
					}

			}
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<?php include 'nav-welcome.php';?>
	  	<div style="margin-top:30px; margin-bottom:30px" class="container" id="contact-form">
	        <h1>Let's touch base!</h1>
	
		    <form name="contactform" method="post" action="contactEngine.php">
			    <fieldset class="form-group">
			        <label for="email">Email address</label>
			        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email address">
			        <div id="error3"></div>
			        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			    </fieldset>

			    <fieldset class="form-group">
			        <label for="subject">Subject</label>
			        <input type="text" class="form-control" id="subject" name="subject">
			        <div id="error"></div>
			    </fieldset>
			    
			    <fieldset class="form-group">
			        <label for="content">Comment</label>
			        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
			        <div id="error2"></div>
			    </fieldset>
			    <button type="submit" id="submit" value="submit" class="btn btn-primary">Submit</button>

				<br></br>
				<div id="recaptcha" class="g-recaptcha" data-sitekey="6LfRFBAUAAAAABO5JCjE5aTG8XndlSLij2WjHVJM"></div>
		    </form>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>