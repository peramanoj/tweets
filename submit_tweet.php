<?php
session_start();
$uname=$_SESSION["uid"];
$current_datetime = date('Y-m-d H:i:s');
$tweetText=$_POST['tweetText'];

$servername="localhost";
$username="root";
$password="";
$dbname="ex";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}

$sql = "INSERT INTO tweet VALUES ('','$uname','$tweetText','$current_datetime')";

if(mysqli_query($conn, $sql))
{
		echo "suucc";
		header("Location:view.php");
		
	} 	
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		//header("Location:.php");
	}
mysqli_close($conn);
?>