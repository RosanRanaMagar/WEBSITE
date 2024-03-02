<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .admin-panel {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 300px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
        }

        .content {
           max-height: 100vh;  
        }
        .content1{
            height: 100vh;
            width: 100% ;
            background-image: url(img/slider/up4utucdpu7l4usr5f3i.jpg);   
            background-repeat:  no-repeat;
            background-size: cover;  

        }

    

        .header {
            background-color: black;
            color: #ecf0f1;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 50%;
        }
        h1{
            float: left;
            margin-top: 20px;
            padding-left: 30px;
            font-size: 35px;
            color: orange;
            font-family: monospace;
        }
        h2{
            
            margin-top: 30px;
            padding-left: 30px;
            font-size: 20px;
            color: yellow;
            font-family: cursive;
        }
        .aa{
            display: block;
            font-weight: bold;
            color: white;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-shadow: 0px 0px 30px white,0px 0px 10px white,0px 0px 20px white;
            text-align: center;
        }
        .aa:hover{
            color: yellow;
            font-size: 17px;
        }
        .bb{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
        }
        .bb:hover{
            color: yellow;
            font-size: 17px;
        }
        .cc{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
        }
        .cc:hover{
            color: yellow;
            font-size: 17px;
        }
        .dd{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
        }
        .dd:hover{
            color: yellow;
            font-size: 17px;
        }
        .ee{
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 0;
            transition: background-color 0.3s;
            transition: color 0.3s;
            text-align: center;
            font-weight: bold;
        }
        .ee:hover{
            color: yellow;
            font-size: 17px;
        }
        
    </style>
</head>

<body>

    <div class="admin-panel">
        <div class="sidebar">
            <div class="header">Hospital Admin</div>
            <a class="aa" href="#">Dashboard</a>
            <a class="bb" href="patient.php">Patients</a>
            <a class="cc" href="doctors.php">Doctors</a>
            <a class="dd" href="appointment.php">Appointments</a>
            <a class="ee" href="#">Reports</a>
            <!-- Add more links as needed -->
        </div>

        
        <div class="content1">
            <div class="content">
            <!-- Content for the admin panel -->
            <h1>Welcome to the Rosy care, Admin Panel</h1><br><br><br>

            <h2>At Rosy Care, we prioritize your health and well-being. <br> Our state-of-the-art medical facility &nbsp; is dedicated to <br> providing compassionate care, &nbsp;cutting-edge treatments, <br>  and  &nbsp;personalized  &nbsp;services to  &nbsp;ensure you  &nbsp;receive the <br> highest quality healthcare.</h2>
            <!-- Add more content as needed -->
        </div>
        </div>
    </div>

</body>

</html>
