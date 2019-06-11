<?php
//Starta session
session_start();
?>
<!--Start på Htmldokument-->
<!DOCTYPE html>
<html lang="sv">  
<head>
  <title>LOGO-Books</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bookstore/css/style.css">
</head>

<body class="w3-content-fluid w3-light-grey w3-card-4" onload="init();">
  <!-- Meny -->
  <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
      <h3 class="w3-wide"><b>LOGO-BOOKS</b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey">
      <a href="index.php" class="w3-bar-item w3-button">Start</a>
      <a href="fantasy.php" class="w3-bar-item w3-button">Fantasy</a>
      <a href="scifi.php" class="w3-bar-item w3-button">Science Fiction</a>
      <a href="horror.php" class="w3-bar-item w3-button">Skräck</a>
      <a href="#footer" class="w3-bar-item w3-button w3-padding">Kontakt</a>
      <!--Öppna modal-->
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Nyhetsbrev</a>
      <!--Öppna modal-->
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('register').style.display='block'">Registrera</a>
    </div>
  </nav>

  <!-- Header på små skärmar -->
  <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-padding-24 w3-wide">LOGO-BOOKS</div>
    <!--Menyknapp -->
    <a href="javascript:void(0)" title="Öppna meny" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><span class="fa fa-bars"></span><span class="hidden">Meny</span></a>
  </header>
  <!--Overlayeffekt när menyn öppnasd på små skärmas-->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" title="close side menu" id="myOverlay"></div>

  <!-- Sidans maininnehåll böjar här -->
  <main class="w3-main w3-padding-small w3-white">
    <!-- Tryck ned innehållet på små skärmar, med id pushdown i style.css-->
    <div class="w3-hide-large" id="pushdown"></div>

    <!--Header stora skärmar-->
    <header class="w3-container w3-row-padding w3-padding w3-margin-top w3-xlarge w3-white">
      <?php
      //Kontrollera om användaren är inloggad
      if(isset($_SESSION['userFName']))
      {
        //Om inloggad visa att användaren är inloggad genom att visa Användarens namn.
        echo '<span class=" w3-col m6 w3-mobile" id="logged_in">Inloggad som: '.$_SESSION['userFName'] . ' ' .$_SESSION['userLName']. '</span>';
      }
      else{
        //Annars visa texten utloggad
        echo '<span class="w3-col m6 w3-mobile" id="logged_in">Utloggad</span>';
      }
      ?>
      <!--<p class="w3-right w3-col m5">-->
      <!--Söksymbol-->
      <a href="#" class="w3-bar-item w3-right w3-col m1 w3-button"><span class="fa fa-search"></span><span class="hidden">Meny</span></a>
      <!--Användare, klick för att öppna loginmodal-->
      <?php
      //OM användaren är inloggad dvs. en session är igång, visa logga ut knappen
      if(isset($_SESSION['userFName']))
      {
        //Länk till logout.php som stänger sessionen.
        echo'<a href="bookstore/includes/logout.php"title="Logga ut" id="loglouticon"
        class="w3-right w3-col m2 w3-bar-item w3-button">Log out</a>';
      }
      else {
        echo'<a href="javascript:void(0)" title="Logga in" id="loginicon" class="w3-bar-item w3-button w3-right w3-col m1" onclick="document.getElementById(\'login\').style.display=\'block\'"><span class="fa fa-user"></span><span class="hidden">Logga in</span></a>';
      }
      ?>
      <!--<a href="javascript:void(0)" id="loginicon" class="w3-bar-item w3-button w3-padding w3-margin-right" onclick="document.getElementById('login').style.display='block'"><span class="fa fa-user"></span></a>-->
      <!--Kundvagn-->
      <a href="#" title="Kundvagn" class="w3-bar-item w3-button w3-right w3-col m1"><span class="fa fa-shopping-cart"></span><span class="hidden">Kundvagn</span></a>
      <!--</p>-->
    </header>
