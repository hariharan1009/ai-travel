<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #BAB8B7;
}
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 80vh;
    box-sizing: border-box;
    padding: 20px;
}

.box {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 500px;
    height: 100%;
    max-height: 430px;
    box-sizing: border-box;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    display: inline-block;
    border:none;
    font-size:14px;
    border-radius:10px;
    border-bottom:1px solid black;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

@media screen and (max-width: 600px) {
    .box {
        max-width: none;
    }
    .container{
		height: 750px;
	}
}
</style>
</head>
<body class="body">
 <div class="container">
  <div class="box">
   <h1>SignUp</h1>
   <form method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit">Sign Up</button><br/>
    <p>Don't have an account? <a href="signin.php">Sign in</a></p>
   </form>
  </div>
 </div>
</body>
</html>


<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql="select * from users where email='$email'";
    $res=$conn->query($sql);
    $row=mysqli_fetch_array($res);
    if($row>0)
    { 
        echo "<script>alert('Error:Account Already Created! Try Another Email-ID');</script>";
    } else { 
        $sql1 = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql1) === TRUE) {
            echo "<script>alert('Message:Account Created!'); window.location.href ='signin.php'; </script>";
        } else {
            echo "<script>alert('Error:Account Not Created!');</script>";
        }
    }
    $conn->close();
}
?>
