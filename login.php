<?php
include 'database1.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$sql="insert into login(name,password) values('$name','$password')";
if(mysqli_query($con,$sql))
{
echo "<script>alert('log in sucessfull')</script>";
}
else
echo "error".mysqli_error($con);
mysqli_close($con);
}
?>

