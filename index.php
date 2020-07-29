<!DOCTYPE html>
<html>
<head>
	<title>Automation Tool for Digital Media Marketing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet"> 


</head>
<body >
		
	
	<div id="popUpMain">
		<div id="popup">
			<h1 id="newsHeading">Subscribe to our News Letter.</h1>
			<input type="email" name="" id="emailId" placeholder="user@gmail.com"><br>
			<button class="submitId"> Subscribe </button>
			<button class="submitId"> No Thanks </button>
		</div>
	</div>	

		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<a href="" class="navbar-brand">VivekTechy</a>
				<ul class="navbar-nav">
					<li class="nav-item"><a href="#" class="nav-link">Home</a></li>


					<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Social Media</a>
							<a href="#" class="dropdown-item">SEO</a>
							<a href="#" class="dropdown-item">Paid Media</a>
							<a href="#" class="dropdown-item">Web Development</a>
							</div></li>


					<li class="nav-item"><a href="About.php" class="nav-link">AboutUs</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">ContactUs</a></li>
					
				</ul>
		</nav>
		<header>
		
		<div id="myslideshow" class="carousel slide carousel-fade" data-ride="carousel">
			 <ol class="carousel-indicators">
    <li data-target="#myslideshow" data-slide-to="1" class="active"></li>
    <li data-target="#myslideshow" data-slide-to="2"></li>
    <li data-target="#myslideshow" data-slide-to="3"></li>
  </ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				
					<img src="digital1.jpg" class="d-block w-100">
					<div class="carousel-caption">
						<h4>Learn Web Development</h4>
					</div>
				</div>
				<div class="carousel-item">
				
					<img src="digital3.jpg" class="d-block w-100">
					<div class="carousel-caption">
						<h4>Learn Digital Marketing</h4>
					</div>
				</div>
				<div class="carousel-item">
				
					<img src="digital4.jpg" class="d-block w-100">
					<div class="carousel-caption">
						<h4>Learn SEO</h4>
					</div>
				</div>
				<a class="carousel-control-prev" href="#myslideshow" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myslideshow" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
			</div>
		</div>
		

	</header>


	 <div class="footer">
	 	
	 	<span><i class="fa fa-envelope-o"><a href="mailto:prasadvivek159@gmail.com"> : prasadvivek159@gmail.com</a></i>

</span>
<div class="phone">
	<span><i class="fa fa-phone" aria-hidden="true"></i>
<a href="mailto:prasadvivek159@gmail.com"> : +91-9372020045</a></i>
</div>



	 </div>

	 <script>
	 	$(document).ready(function(){
	 		setTimeout(function(){
	 			$('#popUpMain').css('display','block');
	 		}, 3000);
	 	});
	 	$('.submitId').click(function(){
	 		$('#popUpMain').css('display','none');
	 	})

	 </script>
</body>
</html>