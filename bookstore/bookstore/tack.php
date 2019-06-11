
<?php
/*
* Filnamn:  tack.php
* Av:       Henrik Johansson
* Datum:    2018-12-18
* Version:  1.0
* Syfte:    Tacksida för e-bokhandel projektet i webbserverprogrammering 1 på Hermods HT2018.
*           Tacksidan visas när en besökare fyllt i registreringsformuläret på sidan.
*           Detta exempel visar hur man hämtar data från formulär (skickat med postmetoden) och hur man kan komma åt
*           informationen på servern, för att skapa sidor med dynamiskt innehåll.
*           Informationen i formuläret infogas i databasen och registrerar en användare så att
*           denne kan logga in sig på butiken senare.
*
*          Källa och inspiration https://www.youtube.com/watch?v=LC9GaXkdxF8&t=4203s
*/
// Kolla om användaren har kommit hit via registreringsformuläret
// Har de kommit genom att skriva adressen till sidan i adressfältet
// skicckar vi dem till index.php
if(!isset($_POST['register-submit'])){
  header("Location: index.php");
  exit();
}
// Läs in följande sidor/filer och kombinera koden i dem fär att bygga
// en html-sida. header.php innehåller början på ett htmldokument med butikstemat.
include 'bookstore/includes/header.php'; // Start på html-sidan, head, början av body, header och navmeny
include 'bookstore/includes/content.php'; // Sidans maincontent
include 'bookstore/includes/modals.php'; // Kod för modals, formulär m.m. som öppnas "ovanför/framför" den övriga sidan.
// Skapa och initiera variabler för att lagra post-värden
$fname = $lname = $email = $perNum = $adress = $postNum = $city = $cell = $pw = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Använd testfunktionen nedan för att rensa datan och oskadliggöra elak kod m.m.
  //Och skriv den testade datan till variablerna som skapats ovan.
  // $_POST["fname"] innehåller förnamnet och  $_POST["lname"] innehåller efternamnet som
  // matats in i formuläret och $_POST["email"] epostadressen. Jag testar bara ett par här.
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $perNum = test_input($_POST["personnr"]);
  $adress = test_input($_POST["adress"]);
  $postNum = test_input($_POST["postnr"]);
  $city = test_input($_POST["city"]);
  $cell = test_input($_POST["phone"]);
  $pw = test_input($_POST["pw"]);
}

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
//Kontrollera inmatad data och se så de matchar det vi vill ha
//Annars skickar vi tillbaka dem till index.php med ett felmeddelande i adressfältet.
//År något fält tomt? För att underlätta för användaren kan man skicka med information och
//stoppa in i formuläret igen med hjälp av Get och de värden vi skickar tillbaka. Så att man inte
// behöver fylla i det igen men jag struntar i det i detta exempel.

if( empty($fname) || empty($lname) || empty($email)||
empty($perNum) ||empty($adress) || empty($postNum) ||
empty($city) ||empty($cell) || empty($pw)) {
  header("Location: index.php?error=emptyfields");
  exit();
}

//Kolla om email har korrektformat
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=incorrect-emailformat");
  exit();
}
//Kolla övrig input  med pregmatch
//här använder jag samma regexmönster som i formuläret.
//Förnamn
if(!preg_match("/^[A-Öa-ö]+(-[A-Öa-z])*$/", $fname)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=invalid-firstname");
  exit();
}
//Efternamn
if(!preg_match("/^[A-Öa-ö]+(- [A-Öa-ö]+)*$/", $lname)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=invalid-lastname");
  exit();
}
//Personnummer
if(!preg_match("/^[12]{1}[90]{1}[0-9]{6}-[0-9]{4}$/", $perNum)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=invalid-personnr");
  exit();
}
//adress
if(!preg_match("/^[A-Öa-ö0-9 ]+$/", $adress)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=invalid-adress");
  exit();
}
//postnr
if(!preg_match("/^[0-9]{5}$/", $postNum)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=invalid-postnr");
  exit();
}
//Stad
if(!preg_match("/^[A-Öa-ö ]+$/", $city)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=invalid-stadformat");
  exit();
}
//telefonnummer
if(!preg_match("/^[0]{1}[7]{1}[0,2,3,6,9]{1}-[0-9]{7}$/", $cell)){
  //Omdirigera och skicka med felinfo
  header("Location index.php?error=invalid-phonenumberformat");
  exit();
}
//lösenord
if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/", $pw)){
  //Omdirigera och skicka med felinfo
  header("Location: index.php?error=badpassword");
  exit();
}


//Anslutning till databasen. Så att vi kan använda variabeln $dbConnection (se filen connect.php)
include_once 'bookstore/includes/dbconnect.php';
//kör all inputen genom mysqli_real_escape_string
$fname = mysqli_real_escape_string($dbConnection,$fname);
$lname = mysqli_real_escape_string($dbConnection,$lname);
$email = mysqli_real_escape_string($dbConnection,$email);
$perNum = mysqli_real_escape_string($dbConnection,$perNum);
$adress = mysqli_real_escape_string($dbConnection,$adress);
$postNum = mysqli_real_escape_string($dbConnection,$city);
$cell = mysqli_real_escape_string($dbConnection,$cell);
$pw = mysqli_real_escape_string($dbConnection,$pw);
//Hasha password för säkerhet så att lösenordet inte syns om
//Databasen hackas
$hashedPass = password_hash($pw, PASSWORD_DEFAULT);

//Skriv ut sidan
//Skapa div
echo '<div class="w3-card w3-section w3-padding" id="thankU">';
//Skapa en sqlfråga för att lägga till användaren i databasen
//Detta borde göras som ett prepared statement för ökad säkerhet
//Se login.php för exempel på prepared statement.
//Frågan är en standadt insert into, och jag skickar med
//den information som användare angett i formuläret samt det hashade lösenordet.
$sql = "INSERT INTO kund(fnamn,enamn,epost,personnr,postnr,stad,adress,telefon,password)
VALUES ('$fname', '$lname', '$email', '$perNum', '$adress', '$postNum', '$city', '$cell', '$hashedPass');";
if(!mysqli_query($dbConnection, $sql)) {
  echo '<p class="w3-xlarge w3-wide">Hoppsan! Något gick fel</p>';
  echo '<p>Tillbaka till <a href="index.php" class=" w3-hover-opacity w3-hover-dark-grey w3-round">startsidan</a>.</p>';
  die('Fel: '. mysqli_error($dbConnection).'</div>');
}//Slut IF
//Stäng anslutning till databas
mysqli_close($dbConnection);

echo '<h2 class="title w3-margin-left">Tack för din registrering!</h2>';
//Skriv ut ett litet meddelande till användaren. I p-taggar.
//I taggarna konkateneras värdena som skickats med formuläret med metoden post in i strängen.
// Man kan förstås läsa värdena direkt från $_POST, men det är osäkrare.
echo "<p> Välkommen till LOGO-BOOKS " . $fname. " " .$lname."</p>";
// Nästa echo skriver ut den epost-adress som skickades med formuläret.
echo "<p> Ditt användarnamn är detsamma som din epostadress: " . $email."</p>";

//Avkommentera raden nedan för att skriva ut innehållet i hela $_POST-arrayen.
//print_r($_POST);

//Skriv ut en länk till startsidan
echo '<p>Tillbaka till <a href="index.php" class="w3-button" >startsidan</a>.</p>';
echo '</div>';
//Läs in slutet på sidan
include 'bookstore/includes/footer.php';
?>
