<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>doctor_signup </title>
	<style type="text/css">
		body:before {
  				content: '';
  				position: fixed;
  				width: 100vw;
  				height: 100vh;
  				background-color: black;
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
  			width: 400px;
  			height: 400px;
  			padding: 80px 40px;
  			background-color: darkslategrey;
  			border-radius: 10%;
  			font-size: 25px;
  			font-weight: bold;
  			box-shadow: 1px 2px 50px aquamarine;
  			color: white;
		}

		.aa{
			color: black;
			width: 100%;
			font-size: 22px;
			font-weight: bold;
			border: 2px solid black;

		}
		.aaa{
			text-align: center;
			height: 40px;
			width: 140px;
			font-size: 25px;
			font-weight: bold;
			font-family: cursive;
			border-radius: 15%;
			box-shadow: 1px 2px 50px cyan;
		}
		.aaa:hover{
			background-color: lightgreen;
			

		}
		.o{
            font-size: 18px;
            font-family: cursive;
            border-radius: 45%;
            background-color: blue;
            color: white;
        }
	</style>
</head>
<body>
<div class="container">
	<form action="doctor_sign_auth.php" method="post">
		<label>Doctor name:</label>
		<input class="aa" type="text" name="name"><br><br>

		<label>Dr. Email:</label>
		<input class="aa" type="email" name="email"><br><br>

		<label>Category:</label>
        <select class="aa" name="category">
                <option class="o">Cardiology</option>
                <option class="o">Dentology</option>
                <option class="o">Dermatology</option>
                <option class="o">Emergency Physio</option>
                <option class="o">Gynecology</option>
                <option class="o">Neurology</option>
                <option class="o">Oncology</option>
                <option class="o">Endrocrinology</option>
        </select><br><br>

		<label>password:</label>
		<input class="aa" type="password" name="password"> <br><br>
	
		<input class="aaa" type="submit" value="submit" name="">
	</form>
</div>
</body>
</html>