<?php
$usernameVar=$_GET["username"];
$passwordVar=$_GET["password"];

echo $usernameVar.":".$passwordVar;
?>

<html>
<body>
<form action="index.php" method="GET">
Username: <input type="text" name="username" /> <br />
Password: <input type="text" name="password" /> <br />
<input type="submit"/>
</form>
</body>
</html>
