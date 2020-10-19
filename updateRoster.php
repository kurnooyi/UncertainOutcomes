<?php
	session_start();
?>
<html>
<body>
<center><h1><font color="black">In order to change your Roster you need to delete your existing one</font><h1></center>
<?php
	if (isset($_REQUEST['ok'])){
        require('db.php');
		$username = $_SESSION['username'];
            $query = sqlsrv_query($dbconnect, "DELETE FROM selectedPlayers where username = '$username'")
                or die (sqlsrv_error($dbconnect));
                if($query){
                        echo "<div class='form'>
                        <center><h1>Your current Roster has been deleted successfully.</h1>
                        <br/>Click here to create new Roster<a href='createRoster.php'>Create new Roster</a></div>";
                }
	}
        else{
?>
    <form action="" method="post">
	<input type="text" value="" placeholder="Type Ok to delete" name="ok" />
	</form>
</div>
<div class="container signin">
    <p>Don't wanna change your Roster? Click here to go back <a href="index.php">Sign in</a>.</p>
</div>
<?php } ?>