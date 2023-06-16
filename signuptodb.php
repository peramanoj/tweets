<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $_POST["firstname"];
    $middlename = $_POST["Middlename"];
	$lastname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$userId = $_POST["userId"];
	$age = $_POST["Age"];
	$phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
	$pwd = $_POST["pwd"];
	$pwdrepeat = $_POST["pwd-repeat"];

    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ex";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement

	$sql = "INSERT INTO data VALUES ('$firstname','$middlename','$lastname','$userId','$gender','$age','$phoneNumber','$email','$pwd','$pwdrepeat')";
	if(mysqli_query($conn, $sql)){
		header("Location:succ.php");
	} 	
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		header("Location:signup.php");
	}
    $conn->close();
}
?>
