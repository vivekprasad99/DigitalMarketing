<?php

 $name = $_POST['name'];
 $email = $_POST['email'];
 $telephone = $_POST['telephone'];
 $company = $_POST['company'];

 $con = mysqli_connect('localhost','root','','brand');

$query = "INSERT INTO `userdata`(`name`, `emailid`, `contact`, `comname`) VALUES ('$name','$email','$telephone','$company')";

$run = mysqli_query($con,$query);

if($run == TRUE)
{
    ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<style>
				.bg-modal{
					width: 100%;
					height: 100%;
					background-color: rgba(0, 0, 0, 0.7);
					
					position: absolute;
					top: 0;
					display: flex;
					justify-content: center;
					align-items: center;
					
				}
				.modal-content{
					width: 200px;
					height: 200px;
					background-color: white;
					border-radius: 10px;
					align-items: center;
					text-align: center;
					padding: 30px;
					position: relative;
				}
				.close {
					position: absolute;
					top: 0;
					right: 14px;
					font-size: 42px;
					transform: rotate(45deg);
					cursor: pointer;
				}

			</style>
		</head>
		<body>
		  <div class="bg-modal">
		  	<div class="modal-content">
		  		<div class="close">+</div>
		  		
		  		<h1>Thank You for submitting</h1>
		  	</div>

		  </div>

		  <script>
		  	
		  	document.querySelector('.close').addEventListener('click',function(){
		  		document.querySelector('.bg-modal').style.display = 'none';
		  	})
		  </script>
		</body>
		</html>

    <?php
}
else
{
	echo "Error";
}
?>





