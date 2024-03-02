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
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
        }

        .content {
           max-height: 100vh;  
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
            padding-left: 70px;
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
              text-shadow: 0px 0px 30px white,0px 0px 10px white,0px 0px 20px white;
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
            <a class="aa" href="adminpanel.php">Dashboard</a>
            <a class="bb" href="patient.php">Patients</a>
            <a class="cc" href="doctors.php">Doctors</a>
            <a class="dd" href="">Appointments</a>
            <a class="ee" href="#">Reports</a>
            <!-- Add more links as needed -->
        </div>

        
        <div class="content1">
            <div class="content">
            <!-- Content for the admin panel -->
            <h1>Welcome to the  appointment Panel</h1><br><br><br>

            
        </div>
        </div>
    </div>

</body>

</html>
