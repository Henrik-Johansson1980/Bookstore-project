<?php
  //Källa och inspiration för loginformulär https://www.youtube.com/watch?v=LC9GaXkdxF8&t=201s
  //Kolla om man kommit hit via login formuläret
  if(isset($_POST['login-submit'])){
    //print_r($_POST);
    $user = $pw = "";

    $user = test_input($_POST["user"]);
    $pw = test_input($_POST["password"]);
    include_once 'dbconnect.php'; //Databasinfo
    //Kör input genom mysqli_real_escape_string
    $user = mysqli_real_escape_string($dbConnection,$user);
    $pw = mysqli_real_escape_string($dbConnection,$pw);

    if(empty($user) || empty($pw)) {
      //Omdirigera till index.php om fälten är tomma
      //Borde aldrig triggas eftersom fälten är required i formulären.
      header("Location: ../../index.php?error=emptyfields");
      exit();
    }
    else { //Kolla om användaren finns i datbasen och rätt lösen angetts
      //Skapa en sqlfråga men använd prepared statement för ökad säkerhet.
      $sql = "SELECT * FROM kund WHERE epost=?;";
      //Initiera ett prepared statements
      $stmt = mysqli_stmt_init($dbConnection);
      //Kolla att frågan är ok annars Omdirigera till index.php och skicka med felmeddelande i adressfältet och avbryt skriptet.
      if(!mysqli_stmt_prepare($stmt,$sql)) {
        //Stäng anslutning till databas
        mysqli_close($dbConnection);
        header("Location: ../../index.php?error=sqlerror");
        exit();
      }
      else {
        //Bind parametrar till frågan. i detta fall skickar jag med en sträng vilket indikeras med "s".
        //Man måste ange ett tecken per parameter, så hade vi skickat med 2 strängar hade vi angett "ss".
        //Jag skickar med variabeln user som innehåller användarens email/användarnamn som andra argument
        mysqli_stmt_bind_param($stmt, "s", $user);
        //Kör frågan
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
          $pwdCheck = password_verify($pw, $row['password']);
          if($pwdCheck == false){
            mysqli_close($dbConnection);
            //Omdirigera och skicka felmeddelande
            header("Location: ../../index.php?error=wrongpasswordoruser");
            exit();
          }
          else if ($pwdCheck == true){
            mysqli_close($dbConnection);
            //Starta en session om allt är ok och omdirigera till startsidan.
            session_start();
            $_SESSION['userFName'] = $row['fnamn']; //Förnamn
            $_SESSION['userLName'] = $row['enamn']; //Efternamn
            header("Location: ../../index.php?login=success");
            exit();
          }
          else{ //Annars omdirigera och skicka med felmeddelande
            mysqli_close($dbConnection);
            header("Location: ../../index.php?error=wrongpasswordoruser");
            exit();
          }
        }
        else{//Annars omdirigera och skicka med felmeddelande
          mysqli_close($dbConnection);
          header("Location: ../../index.php?error=nouser");
          exit();
        }
      }
    }
  }
  else {
    //Skcika tillbaka till index.php
    header("Location: ../../index.php");
    exit();
  }


  //Funktion som rensar upp data i variabeln.
  // data innehåler data från formuläret.
  function test_input($data) {
    //Ta bort onödig whitespace som tabbar newlines.
    $data = trim($data);
    //Ta bort slashes
    $data = stripslashes($data);
    //konvertera till htmltecken för att öka säkerheten genom att koda om farliga tecken
    //till htmltecken
    $data = htmlspecialchars($data);
    return $data;
  }
 ?>
