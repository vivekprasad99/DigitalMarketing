<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Us</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<style>

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: helvetica;
		}
		body{
			background-color: #ffd700;
		}
		.main{
			width: 500px;
			margin: 50px auto;
			border-radius: 10px;
			border: 5px solid #dc143c;
			border-left: 40px solid #dc143c;
			box-shadow: 1px 2px 10px #555;
		}
		.info{
			width: 100%;
			background-color: #dc143c;
			padding: 7px;
			text-shadow: 1px 1px 1px #222;
			color: #fff;
			font-size: 20px;
		}
		.form-box{
			padding: 20px;
			background-color: #eee;
		}
		label{
			color: navy;
			font-size: 18px;
		}
		.inp,.msg-box{
			width: 100%;
			padding: 10px;
			margin-top: 4px;
			margin-bottom: 5px;
			border-radius: 5px;
			border: 2px solid #dc143c;
			font-weight: bold;
			color: #dc143c;
			border-right: 15px solid #dc143c;
			border-left: 15px solid #dc143c;
			resize: none;
		}
		.msg-box{
			height: 80px;
		}
		.inp:focus,.msg-box:focus{
			outline: none;
			border: 2px solid navy;
			border-right: 15px solid navy;
			border-left: 15px solid navy;
		}
		.sub-btn{
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin-top: 5px;
			border: none;
			background: linear-gradient(#dc143c,#800000);
			cursor: pointer;
			color: #fff;
			font-size: 20px;
			text-shadow: 1px 1px 1px #444;
		}
		.sub-btn:hover{
			background: linear-gradient(#800000,#dc143c);
			opacity: 0.8;
			transition: all ease-out 0.2s;
		}
		.sub-btn:focus{
			outline: none;
		}
		@media(max-width: 720px){
			.main{
				width: 90%;
			}
		}
	</style>

</head>
<body>
	<div class="main">
		<div class="info"></div>
		<form action="insert.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="telephone" class="inp" placeholder="Enter Your Phone" required><br>
			<label for="company">Company Name</label><br>
			<input type="text" name="company" class="inp" placeholder="Enter Your Company Name"  required></input><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
	
	</body>
</html>

