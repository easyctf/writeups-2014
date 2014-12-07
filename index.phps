<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Injection</title>
</head>

<body>
	<form action="/sites/injection/index.php" method="post">
		<h1>Login to Access User Message</h1>
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" autocomplete="off" autofocus>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Login">
				</td>
			</tr>
		</table>
	</form>
	<div id="result">
		<?php
	
		error_reporting(0);

		if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']) && $_POST['submit'] == "Login") {
			echo "<table border='1'><tr><th>username</th><th>message</th></tr>";
			$username = $_POST['username'];
			$password = $_POST['password'];
			mysql_connect("xxxxxxxxx", "xxxxxxxxx", "xxxxxxxxx");
			@mysql_select_db("xxxxxxxxx") or die("can't select database");
			
			$query = "SELECT * FROM `xxxxxxxxx` WHERE username='$username' AND password='$password'";
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result)) {
				echo "<tr><td>".$row['username']."</td><td>".$row['message']."</td></tr>";
			}
			echo "</table>";
		}
		
		?>
	</div>
</body>

</html>