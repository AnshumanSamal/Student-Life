<?php
$name = $_POST['fname'];
$college = $_POST['college'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];
$con = mysqli_connect("localhost","root","");
if (!($con)) {
	die("error while connecting to the database");
}
else{
	print("Connection was successfull <br />");
}
$db = mysqli_select_db($con,"login");
$query ="create table mar_detail(Firstname char(20),College char(20),Subject char(20),Marks varchar(20))";
mysqli_query($con,$query);
$query = "insert into mar_detail values('$name','$college','$subject','$marks')";
mysqli_query($con,$query);
$result = mysqli_query($con,"select * from mar_detail");
mysqli_close($con);
echo "<a href='http://localhost/mini/marcomp.php'>";
echo "<img src='mar.jpg'>";
echo "</a>";
?>