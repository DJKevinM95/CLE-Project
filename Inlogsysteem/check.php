<?php
session_start();
$_SESSION['email'] = $_POST['email'];
header('Location: beveiligdepgaina.php');
?>
<!DOCTYPE html PUBLIC>

<html>
<head>
    <title>Loginsysteem</title>
</head>
<body bgcolor="#000000" text="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000"><br />
<form>


    <p><input name="Submit" type="submit" action = "uitloggen.php"></p>


</form>

</body>

</html>


