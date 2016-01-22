<?php session_start(); ?>
<!DOCTYPE html PUBLIC>

<html>
<head>
    <title>Loginsysteem</title>
</head>
<body bgcolor="#000000" text="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000"><br />

<?php
//zet de variabele zo dat het script het herkent als niet-ingelogd
session_destroy();

header('Location: /index.php');

?>

</body>
</html>