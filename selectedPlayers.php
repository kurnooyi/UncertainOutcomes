<?php
	session_start();
?>
<html>
    <head>
         <style>
	
  
            table {
				  border-collapse: collapse;
				  border-spacing: 0;
				  width: 100%;
				  border: 1px solid #ddd;
				}

				th, td {
				  text-align: left;
				  padding: 16px;
				}

				tr:nth-child(even) {
				  background-color: #f2f2f2;
				}
		</style>
	</head>
<body>
<center><h1><font color="black">Yay! Congratulations! You have formed your team</font><h1></center>
	<form>
		<table>
      
            <tr>
                <td>Rank</td>
                <td>Player Name</td>
                <td>Team</td>
                <td>Position</td>
				<td>Age</td>
				<td>Fantasy Points</td>
				<td>Positional Rank</td>
            </tr>
<?php
	require('db.php');
	$username = $_SESSION['username'];
	if(isset($_POST['select'])){
		$selectedArray = $_POST['checkbox'];
		$arrlength = count($selectedArray);
		foreach ($selectedArray as $rank){
				$query = "SELECT * FROM players where rank='$rank'";
				$query1 = "INSERT INTO selectedPlayers (username, rank) values ('$username', '$rank')";
				$result = sqlsrv_query($dbconnect,$query);
				if($result !== NULL){
        		$rows = sqlsrv_has_rows($result);
        		if ($rows == true){
					while ($row = sqlsrv_fetch_array($result)) {
						$result1 = sqlsrv_query($dbconnect,$query1);
?>
	<tr>
				<td><?php echo $row[1] ?></td>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
				<td><?php echo $row[4] ?></td>
				<td><?php echo $row[5] ?></td>
				<td><?php echo $row[6] ?></td>
            </tr>

<?php
		}
	
		}
		else {
			echo "Please select players";
		}
	}
		}
	}
	
?>
</table>
<div class="container signin">
	<p>To get back click here <a href="index.php">Sign in</a>.</p>
</div>
</body>
</html>

