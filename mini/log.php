<?php
$name = $_POST['uname'];
$password = $_POST['pass'];
$con = mysqli_connect("localhost","root","");
if (!($con)) {
	die("error while connecting to the database");
}
else{
	print("Connection was successfull <br />");
}
$db = mysqli_select_db($con,"login");
$query ="create table log_detail(Username char(20),Password varchar(20))";
mysqli_query($con,$query);
$query = "insert into log_detail values('$name','$password')";
mysqli_query($con,$query);
$result = mysqli_query($con,"select * from log_detail");
mysqli_close($con);
echo "<a href='http://localhost/mini/dashboard.html'>";
echo "<img src='col.jpg'";
echo "</a>";
?>
