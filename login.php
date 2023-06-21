<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body style="background-color: lightslategrey;">
	<div style="margin-top: 200px;">
		<center>
<form action="telefonnummerCheck.php" method="post">
förnamn: <input type="text" name="förnamn"
pattern="[A-Öa-ö]+"
title="Can only contain characters">
<br>
efternamn <input type="text" name="efternamn"
pattern="[A-Öa-ö]+"
title="Can only contain characters">
<br>
telefonnummer <input type="text" name="telefonnummer"
pattern="[0-9]+">
<br>
<br>
<input type="submit" value="Login">
</form>
</center>
</div>

</body>
</html>