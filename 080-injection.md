# 80 - Injection

*Written by Michael Zhang*

## Problem

This site seems to have some information we need. Unfortunately, it's protected by a login page. Help us get through the login system!

[Website](http://www.easyctf.com/sites/injection) - [Source](injection.phps)

## Hint

You might want to study up on some SQL syntax. How can we modify the query so it will always return true?

## Solution

Examine this bit of injection.phps carefully:

``php
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
```