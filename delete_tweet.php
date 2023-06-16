<?php
  // get the tweet ID from POST parameters
  $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ex";
	$conn = new mysqli($servername, $username, $password, $dbname);
  $id = $_POST["id"];

  // execute DELETE statement to remove tweet from database
  $sql = "DELETE FROM tweet WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    // return success message
    echo "Tweet deleted successfully.";
  } else {
    // return error message
    echo "Error deleting tweet: " . mysqli_error($conn);
  }
?>
