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
  }
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 900px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 65%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 15px 40px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 25px;
    font-weight: 500;
    line-height: 35px;
    text-align: center;
}

label{
    display: block;
    margin-top: 20px;
    font-size: 15px;
    font-weight: 500;
}
input{
    display: block;
    height: 30px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 15px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
    font-size: 14px;
  padding: 5px;
}
button{
    margin-top: 10px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 12px 0;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    cursor: pointer;
}
select {
  background-color: transparent;
}
.btn{
    margin-top: 50px;
    width: 70%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 10px;
    font-size: 20px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
#btns{
  text-align: center;
}
option {
  background-color: #000000;
}
</style>
</head>
<body>
<form method="POST" action="signuptodb.php">
      <div class="container">
        <h1>Register</h1>
        <p>Kindly fill in this form to register.</p>
		<label for="firstName"><b>First Name</b></label>
        <input
          type="text"
          placeholder="Enter Firstname"
          name="firstname"
          id="firstname"
          required
        />
		<label for="middleName"><b>Middle Name</b></label>
        <input
          type="text"
          placeholder="Enter Middlename"
          name="Middlename"
          id="Middlename"
        />
		
		<label for="lastName"><b>Last Name</b></label>
        <input
          type="text"
          placeholder="Enter Lastname"
          name="lastname"
          id="lastname"
          required
        />
		
		
        <label for="userId"><b>UserId</b></label>
        <input
          type="text"
          placeholder="Enter UserId"
          name="userId"
          id="userId"
          required
        />
		<label for="gender"><b>Gender</b></label>
        <select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select><br>
		
        <label for="age"><b>Age</b></label>
        <input
          type="number"
          placeholder="Enter Age"
          name="Age"
          id="Age"
          required
        />
		<label for="phoneNumber"><b>Phone Number</b></label>
        <input
          type="text"
          placeholder="Enter phoneNumber"
          name="phoneNumber"
          id="phoneNumber"
          required
        />





        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <label for="pwd"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="pwd"
          id="pwd"
          required
        />

        <label for="pwd-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="pwd-repeat"
          id="pwd-repeat"
          required
        />

        <button type="submit">Register</button>
      </div>

      <div>
        <p>Already have an account? <a href="login.php">Log in</a></p>
      </div>
    </form>