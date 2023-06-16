<?php
session_start();
$_SESSION["uid"]=$_POST['userId'];
$uname=$_POST['userId'];
$pwd=$_POST['pwd'];
$servername="localhost";
$username="root";
$password="";
$dbname="ex";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
$res=mysqli_query($conn,"select * from data where UserId='".$uname."' and Password='".$pwd."'");
if(!empty($res))
{
	if($row=mysqli_fetch_array($res))
	{
	header("Location:userpage.php");
	}

	else
	{
	header("Location:notok.php");
	}
}

echo "</center>";
mysqli_close($conn);
?>