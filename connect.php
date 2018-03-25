<?php
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}
.header {
    padding: 80px;
    text-align: center;
    background: #ff0000;
    color: white;
}
.year{
padding:10px;
   text-align : center;
}
.type
{
padding:0.25px;
text-align:center;
}
.city
{
padding:0.25px;
text-align:center;
}
.submit
{
padding:10px;
text-align:center;
}
</style>
</head>
<body>
<form action="action_form.php" method="post">

$name = $_POST['name'];
echo $name;

<div class = "header">
<h1>Road Accident Database</h1>
</div>
<div class = "year">
<h4> Enter The vehicle no of Accident </h4>
<input id="veh_no" type="number" name="veh_no">
</div>

<div class = "type">
<h4> Enter The AADHAR</h4>
<input id ="p_aadhar" type="number" name="p_aadhar">

<div class = "city">
<h4>Enter the city in which accident took place </h4>
<input id ="place" type="text" name="place">
</div>
<div class = "submit">
<input type = "submit" name ="Submit" value="Submit" />
</form>
</div>
</body>
</html>
?>
