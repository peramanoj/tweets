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
    height: 420px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
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
    margin-top: 30px;
    font-size: 20px;
    font-weight: 500;
}
input{
    display: block;
    height: 70px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 20px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
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
    </style>
</head>
<body>
   
    <form>
        <h3>Make Your Tweets Easier</h3>

        <div id="btns">
            <a href="login.php" class="btn">Sign in</a>
        <div class="social">
          </div>
          <div style="text-align:center"><br>
            <p style="font-size:15px;">If you dont have a account then <br>
   <p style="font-size:15px;"><a href="registation.php" style="text-align: center; color: rgb(0, 213, 255);">Sign-up</a></p>
        </div>
    </form>
</body>
</html>
