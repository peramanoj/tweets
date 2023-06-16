<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project by Manoj Pera</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style media="screen">
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
      background-color: #000000;
      background-image: url(https://img.freepik.com/premium-photo/dark-street-wet-asphalt-reflections-rays_129911-2291.jpg);
      scroll-behavior: auto;
      background-size: cover;
      background-attachment: fixed;
  }</style></head>
  </html>
<table align="center" border="1" cellpadding="10"><br><br><br>
  <thead>
    <tr>
      <th style="color: #FFFFFF; font-size:25px;">Tweets</th>
	  <th style="color: #FFFFFF; font-size:25px;">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
	session_start();
	// Set up database connection
	$userid = $_SESSION["uid"];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ex";
	$conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT * FROM tweet WHERE userid = '$userid'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // display tweet in first column
          echo '<tr>';
          echo '<td style="color: #FFFFFF; font-size:25px;">' . $row["tweet"] . '</td>';
       

          // create delete button in second column
          echo '<td><button onclick="deleteTweet(' . $row["id"] . ')">Delete</button></td>';
          echo '</tr>';
        }
      } else {
        echo '<tr><td style="color: #FFFFFF;" colspan="2">No tweets found</td></tr>';
      }
    ?>
  </tbody>
</table><center>
<a style="color: rgb(0, 213, 255);" href="ok.php" class="btn">Create another Tweet</a><br>
<a style="color: rgb(0, 200, 200);" href="login.php" class="btn">Log out</a></center>

<script>
  function deleteTweet(id) {
    if (confirm("Are you sure you want to delete this tweet?")) {
      // make AJAX request to delete_tweet.php
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // reload the page to show updated list of tweets
          location.reload();
        }
      };
      xhr.open("POST", "delete_tweet.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("id=" + id);
    }
  }



</script>

