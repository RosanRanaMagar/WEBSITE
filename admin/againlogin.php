<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
}

input[type=text],[type=password], select {
  width: 100%;
  padding: 15px 20px;
  margin: 22px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-weight: bold;
  font-size: 20px;

}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 25px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  }

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h2{
  text-align: center;
  font-weight: bold;
  font-size: 40px;
  color: green;
  text-shadow: 4px 5px 50px darkblue;
}
label{
  font-size: 25px;
  font-weight: bold;
}
.b{
  font-size: 90px;
  text-shadow: 1px 2px 40px yellow;
}
</style>
<body>

<h2>Data Doesn't Match.! Login Again...! <b class="b">😬</b></h2>

<div class="container">
  <form action="adminauth.php" method="post">

    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Enter Email">

    <label for="Password">Password</label>
    <input type="Password" name="password" placeholder="Enter Password">
  
    <input type="submit" value="Login">
  </form>
</div>

</body>
</html>