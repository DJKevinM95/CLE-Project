<?php
require_once "../../phpconnect.php";
if (isset($_POST['Toevoegen'])) {
    $sql = "INSERT INTO `producten`(`name`, `amount`) VALUES ('" . $_POST['Product'] . "','" . $_POST['Amount'] . "') ";

    if (mysqli_query($conn, $sql)) {
        echo "Nieuw product toegevoegd!!!!!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>


<!DOCTYPE HTML>
<html lang="nl-nl" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="keywords" content="autopia automaterialen Hellevoetsluis kickersbloem autoparts vuurwerk" />
    <meta name="author" content="Super User" />
    <meta name="description" content="Autopia B.V. Autoparts automaterialen hellevoetsluis" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Home</title>
    <link href="http://autopiabv.nl/" rel="canonical" />
    <link href="http://autopiabv.nl//templates/jp-shop/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="http://autopiabv.nl/stylesheet" href="/cache/widgetkit/widgetkit-48d94496.css" type="text/css" />
    <link rel="http://autopiabv.nl/stylesheet" href="/templates/jp-shop/css/bootstrap.css" type="text/css" />
    <script src="http://autopiabv.nl/media/jui/js/jquery.min.js" type="text/javascript"></script>
    <script src="http://autopiabv.nl/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="http://autopiabv.nl/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="http://autopiabv.nl/cache/widgetkit/widgetkit-0d07f2ee.js" type="text/javascript"></script>

    <link rel="apple-touch-icon-precomposed" href="/templates/jp-shop/apple_touch_icon.png" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/base.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/layout.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/menus.css" />
    <style>.wrapper { max-width: 1080px; }
        body { font-size: 15px; }
        .menu-dropdown a.level1,.menu-dropdown span.level1 { font-size: 20px; }
        #logo{ height: 142px;}
        #menu { margin-top: 56px; }
        #maininner { width: 100%; }
        #menu .dropdown { width: 220px; }
        #menu .columns2 { width: 440px; }
        #menu .columns3 { width: 660px; }
        #menu .columns4 { width: 880px; }</style>
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/modules.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/tools.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/system.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/extensions.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/style.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/virtuemart.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/joomlaplates.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/color/yellow.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/font1/droidsans.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/font2/droidsans.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/font3/droidsans.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/responsive.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/print.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/css/custom.css" />
    <link rel="stylesheet" href="http://autopiabv.nl/templates/jp-shop/fonts/droidsans.css" />
    <script src="http://autopiabv.nl/templates/jp-shop/warp/js/warp.js"></script>
    <script src="http://autopiabv.nl/templates/jp-shop/warp/js/responsive.js"></script>
    <script src="http://autopiabv.nl/templates/jp-shop/warp/js/accordionmenu.js"></script>
    <script src="http://autopiabv.nl/templates/jp-shop/warp/js/dropdownmenu.js"></script>
    <script src="http://autopiabv.nl/templates/jp-shop/js/template.js"></script>
    <style type="text/css">
        body{background-color: #e2e2e2}
    </style>

</head>

<body id="page" class="page  isblog " data-config='{"twitter":0,"plusone":0,"facebook":0}'>

<img src="http://autopiabv.nl/images/Achtergrond2.JPG" id="bg" alt="Background Image"/>



<div class="wrapper clearfix margin-bottom">
    <header id="header">
        <div id="headerbar" class="clearfix">

            <a id="logo" href="Index.php">
                <p><img src="http://autopiabv.nl/images/logo.JPG" alt="Autopia" border="0" /></p></a>

            <div id="menubar" class="clearfix">
                <nav id="menu">
                    <ul class="menu menu-dropdown">
                        <li class="level1 item101 ">
                            <a href="/Inlogsysteem/Adminpagina.php"
                               class="level1 item101"><span>Home</span></a>
                        </li>
                        <li class="level1 item109"><a
                                href="/Inlogsysteem/uitloggen.php"
                                class="level1">
                                <span>Uitloggen</span></a></li>
                        <li class="level1 item110">
                            <a href="Voorraadveranderen.php"
                               class="level1">
                                <span>Voorraad</span></a></li>
                        <li class="level2 item111 active current">
    </header>
</div>


<div id="main" class="grid-block">

    <div id="maininner" class="grid-box">


        <section id="content" class="grid-block">
            <div id="system-message-container">
                <section id="content" class="grid-block">
                    <div id="system-message-container">

                        <form method="post" action="">
                            <h3>Product Toevoegen.</h3>
                            <table width=”500″ align=”center” bgcolor="#FFFF00">


                                <p>Product: <input name="Product" type="text" size="30" maxlength="80" required></p>

                                <p>Hoeveelheid: <input name="Amount" type="number" size="30" maxlength="80" required>
                                </p>

                                <p><input name="Toevoegen" type="submit" value="Toevoegen"></p>
                            </table>
                            <h3>Producten</h3>
                            <table width=”500″ align=”center” bgcolor="#FFFF00">
                                <tr>
                                    <td><b>Product</b></td>
                                    <td><b>Hoeveelheid</b></td>
                                </tr>
                                <?php

                                $sql = "SELECT * FROM producten;";
                                if (!$result = $conn->query($sql)) {
                                    echo $conn->error;
                                    exit;
                                }
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td width="300px"><?= $row['name'] ?></td>

                                        <td><?= $row['amount'] ?></td>


                                    </tr>
                                    <?php

                                }
                                mysqli_close($conn);

                                ?>


                            </table>
                        </form>
                    </div>


                    <div id="system">


                        <article class="item">


                            <div class="content clearfix">


                            </div>


                        </article>

                    </div>
                </section>


            </div>
</body>
</html>