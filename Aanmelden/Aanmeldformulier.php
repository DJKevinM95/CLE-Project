<?php
require_once "../phpconnect.php";
if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO `acounts`(`email`, `password`) VALUES ('" . $_POST['EmailAdres'] . "','" . $_POST['Wachtwoord'] . "') ";

    if (mysqli_query($conn, $sql)) {
        echo "U heeft een account aangemaakt!!!!!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
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
                <nav id="menu"><ul class="menu menu-dropdown">
                        <li class="level1 item101 ">
                            <a href="/index.php" class="level1 active current"><span>Home</span></a>
                        </li><li class="level1 item101 active current">

                            <a href="Aanmeldformulier.php" class="level1">
                                <span>Aanmelden</span></a></li><li class="level1 item102">
                            <a href="/Inlogsysteem/Inlog.php" class="level1"><span>Inloggen</span></a>

                        </li><li class="level1 item103">
                            <a href="/Contact.php" class="level1"><span>Contact</span></a>

                        </li><li class="level1 item104">
                            <a href="/Overons.php" class="level1"><span>Over Ons</span></a>

                        </li><li class="level1 item105">
                </nav>
    </header>
</div>





    <div id="main" class="grid-block">

        <div id="maininner" class="grid-box">



            <section id="content" class="grid-block"><div id="system-message-container">
                    <section id="content" class="grid-block"><div id="system-message-container">
                            <table style="margin-left: auto; margin-right: auto" width=”500″ align=”center” bgcolor="#FFFF00">
                            <form method="post" action="">
                                <tr align=”center”>

                                    <td colspan=”3″><h3><b>Hierbij kunt u uw gegevens invullen en versturen.</b></h3></td>

                                </tr>

                                <tr>




                        <td>
                            <p>Email: <input name="EmailAdres" type="text" size="30" maxlength="80" required></p>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p>Wachtwoord: <input name="Wachtwoord" type="password" size="30" maxlength="80" required></p>
                        </td>
                        </tr>
                                <tr>
                                    <td>
                        <p>Wachtwoord Verieferen: <input name=">WachtwoordVerieferen" type="password" size="30" maxlength="80" required></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>s
                        <p><input name="Submit" type="submit" action="Login.php"></p>
                                    </td>
                                </tr>

                    </form>
                                </table>
                </div>


                <div id="system">



                    <article class="item">




                        <div class="content clearfix">





                        </div>





                    </article>

                </div></section>


        </div>
</body>
</html>
