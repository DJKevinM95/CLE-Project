<?php
session_start();
echo $_SESSION['email'];
exit;
//if ($_SESSION['login'] != "1")
//{
    //header('Location: login.php');
    exit();
//}
?>
<!DOCTYPE html PUBLIC>

<html>
<head>
    <title>Loginsysteem</title>
</head>
<body bgcolor="#000000" text="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000"><br />

Dit is de beveiligde pagina. <?php echo "Je bent ingelogd als " . $_SESSION['login-naam'] . "."; ?><br /><br />
<a href="uitloggen.php">Uitloggen</a>

</body>
</html>