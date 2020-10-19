<html>
    <head>
         <style>
	
  
            body {
             
             background-size: cover;
             font-family: Montserrat;
}
.logo {
    width: 213px;
    height: 36px;
    background: url('x.jpg') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}


.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
</style>
</head>

<?php
        require('db.php');
        if (isset($_REQUEST['username'])){
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $query = sqlsrv_query($dbconnect, "INSERT INTO participants (username, password, email) VALUES ('$username', '$password', '$email')")
                or die (sqlsrv_error($dbconnect));
                if($query){
                        echo "<div class='form'>
                        <center><h1>You are registered successfully.</h1>
                        <h3>User Name:</b> $username</br>
                        <h3>Email:</b> $email </br></center>
                        <br/>Click here to <a href='index.php'>Login</a></div>";
                }
    }
        else{
?>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" value="" placeholder="Username" name="username" />
    <input type="password" value="" placeholder="Password" name="password" />
    <input type="text" value="" placeholder="Email" name="email" />
    <button>Submit</button>
    </form>
</div>
<div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
</div>
<?php } ?>
</body>
</html>
