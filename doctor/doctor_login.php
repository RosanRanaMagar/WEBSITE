<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor_login</title>
	<style type="text/css">
		body:before {
  				content: '';
  				position: fixed;
  				width: 100vw;
  				height: 100vh;
  				background-image: url("img/slider/240_F_241193661_7eN21EuJEjMT3Kz0TqBIrXmlORaula5i.jpg");
  				background-position: center center;
  				background-repeat: no-repeat;
  				background-attachment: fixed;
  				-webkit-background-size: cover;
  				background-size: cover;
  				-webkit-filter: blur(10px);
  				-moz-filter: blur(10px);
  				filter: blur(10px);
			}
		.container{
  			position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%, -50%);
  			width: 500px;
  			height: 400px;
  			padding: 80px 40px;
  			background-color: navy;
  			border-radius: 10%;
  			font-size: 25px;
  			font-weight: bold;
  			box-shadow: 1px 2px 50px black,1px 2px 50px blue;
  			color: ghostwhite;
		}

		.aa{
			color: black;
			width: 100%;
			font-size: 25px;
			font-weight: bold;
			border: 2px solid black;

		}
		.aaa{
			height: 50px;
			width: 150px;
			font-size: 25px;
			font-weight: bold;
			font-family: cursive;
			border-radius: 15%;
			box-shadow: 1px 2px 50px cyan;
		}
		.aaa:hover{
			background-color: lightgreen;
			

		}
	</style>
</head>
<body>
<div class="container">
	<h3 style="text-align: center; color: white; text-shadow: 0px 0px 50px white,0px 0px 50px white;">Doctor Login</h3>
	<form action="doctor_login_auth.php" method="post">
		<label>Doctor_name:</label>
		<input class="aa" type="text" name="name"><br><br>

		<label>email</label>
		<input class="aa" type="email" name="email"><br><br>

		<label>password:</label>
		<input class="aa" type="password" name="password"> <br><br>

		<input class="aaa" type="submit" value="submit" name="">
	</form>
</div>
</body>
</html>