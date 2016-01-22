<?php
session_start();
//Require database in this file
require_once "../../phpconnect.php";

//Retrieve the GET parameter from the 'Super global'
$artikelid = $_POST['id'];

//Get the record from the database result
$query = "SELECT * FROM producten WHERE id = " . mysqli_escape_string($conn, $artikelid);
$result = mysqli_query($conn, $query);
$artikel = mysqli_fetch_assoc($result);
$amount = $artikel['amount'];


//uit post
$amountpost = $_POST['amount'];
$type = $_POST['id'];
//berekening amount
if($amount != 0) {


    $amount -= $amountpost;
    $sql = "UPDATE `producten` SET `amount`='" . $amount . "'WHERE id='" . $artikelid . "'";
    if (!$result = $conn->query($sql)) {
        echo $conn->error;
        exit;
    }


    $sql = "INSERT INTO `besteld`(`email`, `amount`, `product`) VALUES ('".$_SESSION['email']."', '".$amountpost."','".$type."')";
    if (!$result = $conn->query($sql)) {
        echo $conn->error;
        exit;
    }


}

mysqli_close($conn);
header("location: Voorraad.php");



$to  = 'kevinmellaard@hotmail.com' . ', '; // note the comma






// subject
    $subject = 'Bestelling';

// message
    $message = "
<html>
<head>
  <title>Bestelling van autopia autoparts!</title>
</head>
<body>
  <p>U heeft het volgende besteld: </p>
  <table>
    <tr>
      <th>".$artikel['name']."</th>
    </tr>
  </table>
</body>
</html>
";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:from@example.com\r\n";
    mail($to,$subject,$message,$headers);

//Close connection

?>
