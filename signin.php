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
    max-height: 350px;
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
   <h1>Login</h1>
   <form method="post">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php if(isset($u_value)):echo $u_value; endif  ?>" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" value="<?php if(isset($u_value)):echo $p_value; endif ?>" required>
    <button type="submit">Login</button><br/>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
   </form>
  </div>
 </div>
</body>
</html>

<?php
include("config.php");
session_start();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    header('Location: home.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $u_value = $email;
    $p_value = $password;
    $sql="select * from users where email='$email'";
    $res=$conn->query($sql);
    $row=mysqli_fetch_array($res);
    if($row>0)
    { 
     if (password_verify($password, $row["password"])) {
       $_SESSION['email'] = $email;
       sleep(2);
       header('Location: home.php');       
       exit();
     } else {
        echo "<script>alert('*Invalid password')</script>";
     }
    } else {
      echo "<script>alert('*Invalid email or password')</script>";
    }
}
?>