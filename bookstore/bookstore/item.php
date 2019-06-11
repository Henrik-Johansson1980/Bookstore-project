<?php
  /*
  * Filnamn: index.php
  * Av: Henrik Johansson
  * Datum: 2018-12-11
  * Version: 1.0
  * Syfte: Startsida för e-bokhandel projektet i webbserverprogrammering 1 på Hermods HT2018.
  */
  //Anslutning till databasen. Så att vi kan använda variabeln $dbConnection (se filen connect.php)
  include_once 'bookstore/includes/dbconnect.php';

  //Testa input
  $input = $_GET['artnr'];
  $input = test_input($input);
  $input = mysqli_real_escape_string($dbConnection,$input);

  if(!preg_match("/^[0-9]*$/", $input)){
    //Omdirigera och skicka med felinfo
    header("Location: index.php?error=articleerror");
    exit();
  }
  // Läs in följande sidor/filer och kombinera koden i dem fär att bygga
  // en html-sida
  require 'bookstore/includes/header.php'; // Start på html-sidan, head, början av body, header och navmeny
  require 'bookstore/includes/content.php'; // Sidans maincontent
  require 'bookstore/includes/modals.php'; // Kod för modals, formulär m.m. som öppnas "ovanför/framför" den övriga sidan.
  echo $input;
  $sql = "SELECT
           b.*,
           GROUP_CONCAT(CONCAT(f.fnamn, ' ' , f.enamn)) AS Författare
           , produktbild.namn AS BNamn
           , produktbild.beskrivning AS ALT
           , kategori.namn AS Kategori
           FROM bok b
             INNER JOIN bokförfattare bf
             ON b.Artikelnr = bf.Artikelnr
             INNER JOIN författare f ON bf.Författarid = f.Författarid
             ,produktbild
             ,kategori
             WHERE b.Bildid = produktbild.Bildid
             AND b.Kategori_id = kategori.Kategori_id
             AND b.Artikelnr = ".$input."
             GROUP BY b.Titel
             ORDER BY b.Titel;";
  //Kör frågan och lagra resultatet i variabeln result.
  $result = mysqli_query($dbConnection, $sql); //Anslutning och sqlfråga som argument.
  //Kolla om frågan resulterade i några rader.
  //Om vi fick ett resultat kan vi använda det annars gör vi inget.
  $resCheck = mysqli_num_rows($result);
  if($resCheck > 0){
    while($row = mysqli_fetch_array($result)){
     // Detta skriver ut ett s.k. card för varje produkt.
     // Varje kort innehåller information hämtad från databasen.
     // Många av klassnamnen är till för att styla med w3.css.
     //Kortet består av en yttre wrapper div, och tre inre divvar som delar kortet i
     //tre kolumner för bild, info och knapp.
      $info = phpinfo();
      echo $info;
      echo '<div class="productbig w3-card-4 w3-margin-bottom w3-round">';
       echo '<div class="w3-row w3-padding">';
       //Kolumn med produktbild
         echo '<div class="w3-col m3 w3-center w3-margin-top">';
           //Hämta produktbild och bild beskrivning och infoga i sökvägen till bildkällan resp. alt- tagg.
           echo '<img src="/bookstore/images/'. $row['BNamn'].'" class="productImage w3-card w3-round" alt="'.$row['ALT']. '">';
         echo '</div>';
         //Kolumn för bokinfo
         echo '<div class="w3-col m6 w3-center-left w3-margin-bottom">';
           // Infoga bokens titel i p-taggen
           echo '<p class="title w3-wide w3-large">'. $row['Titel'] .'</p>';
           //Infoga författarens namn och förnamn
           echo '<p>Av: '.$row['Författare'] . '</p>';
           //Infoga bokens kategori
           echo '<p>Kategori: '. $row['Kategori'] .'</p>';
         echo '</div>';
         //Kolumn för knapp
         echo '<div class="w3-col m3 w3-center w3-margin-top">';
           //Skapa en knapp och infoga bokens pris i denna.
           echo '<button class="w3-button w3-black w3-round"><span class="pris">' .$row['pris'] . '</span> SEK <span class="fa fa-shopping-cart"></span></button>';
         echo '</div>';
         echo '<div class="w3-col m12 w3-center-left w3-margin-bottom">';
             // Infoga beskrivning
             echo '<p class="w3-large">Beskrivning</p>';
             echo '<p>'. $row['Beskrivning'] .'</p>';
         echo '</div>';
         //Sektion med övrig information.
         echo '<div class="w3-col m12 w3-round w3-light-gray w3-padding w3-margin-bottom">';
         //Dela i tre kolumner
         echo '<div class="w3-col m4 w3-center-left">';
           echo '<p><b>Författare: </b>'.$row['Författare'] .'</p>';
           echo '<p><b>Artikelnr: </b>'. $row['Artikelnr'] .'</p>';
           echo '<p><b>Kategori: </b>'. $row['Kategori'] .'</p>';
         echo '</div>';
         //Kolumn för bokinfo
         echo '<div class="w3-col m4 w3-center-left">';
           echo '<p><b>ISBN: </b>'.$row['ISBN'].'</p>';
           echo '<p><b>Format: </b>'.$row['Format'].'</p>';
         echo '</div>';
         //Kolumn för knapp
         echo '<div class="w3-col m4 w3-center-left">';
           echo '<p><b>Förlag: </b>'. $row['Förlag'] .'</p>';
           echo '<p><b>Vikt: </b>'.$row['Vikt'].' kg</p>';
         echo '</div>';
         echo '</div>';
       echo '</div>';
   }
 }//Slut IF
 echo '</div>';

  require 'bookstore/includes/footer.php'; // Slutet på sidan, footer, scriptreferens  stängning av body och htmltagg m.m.
?>
<?php
  //Funktion som rensar upp data i variabeln.
  // data innehåler data från formuläret.
  function test_input($data) {
    //Ta bort onödig whitespace som tabbar newlines.
    $data = trim($data);
    //Ta bort slashes
    $data = stripslashes($data);
    //konvertera till htmltecken för att öka säkerheten genom att koda om farliga tecken
    //till htmltecken för att hindra xss-scripting och sql-injection
    $data = htmlspecialchars($data);
    return $data;
  }
?>
