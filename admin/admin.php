<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #2c3e50;
            padding: 10px;
            text-align: center;
            overflow: hidden;
            z-index: 999;
            position: fixed;
            box-shadow: 5px 5px 50px black;
        }

        nav a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 30px 20px;
            font-family: cursive;
            margin: 0 10px;
            font-size: 25px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45abc245;
        }
        .container{
            margin: 0;
            padding: 0;
            position: relative;
            height: 100vh;
            width: 100%;
            background-image: url(img/slider/empty-hospital-hallway-600nw-611606933.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .hi{
            margin-top: 75px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="adminlogin.php">Admin login</a>
        <a href="">Admin signup</a>
        <a href="../doctor/doctor_login.php">Doctor Login</a>
        <a href="../doctor/doctor_signup.php">Doctor SignUp</a>
    </nav>

    <section>   
        <div class="container"></div>
    </section>

</body>

</html>
