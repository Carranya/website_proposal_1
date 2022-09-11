<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praxis</title>
    <link rel="stylesheet" href="format.css">
</head>
<body>
    <?php
        require_once("function.php");
    ?>
    
    <div class='head'>
        <div class='head-left'>
            <img src='img/logo.jpg' style='width: 200px; height: 200px'></img>
        </div>
  
        <div class='head-center'>
            <h1 style='color: white'>Karma Praxis</h1>
            <h2 style='color: white'>Meditationen und Massagen</h2>
        </div>

        <div class='head-right'>
            <p style='color: white'>Muster Musterfrau<br>
            Musterstrasse 00<br>
            0000 Musterhausen<br>
            Phone: 000 / 000 00 00<br>
            E-Mail: muster.musterfrau@musterpraxis.ch</p>
        </div>
    </div>
    
    <div class='main'>
        <input type='checkbox' id='menubox' class='menucheck'>
        <div class='menu'>
            <label class='toggle' for='menubox'></label>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='index.php?page=treatment'>Behandlungen</a></li>
                <li><a href='index.php?page=prices'>Preise</a></li>
                <li><a href='index.php?page=praxis'>Praxis</a></li>
                <li><a href='index.php?page=about'>Über mich</a></li>
                <li><a href='index.php?page=contacts'>Kontakt</a></li>
                <li><a href='index.php?page=links'>Links</a></li>
            </ul>
        </div> 
    </div>

 
    <div class='content'>
        <?php
        if(isset($_GET['page'])) {
            pages($_GET['page']);
        } else {
            include "pages/home.php";
        }

        ?>
    </div>
  
</body>
</html>
