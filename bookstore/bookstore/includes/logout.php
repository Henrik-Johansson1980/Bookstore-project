<?php
  //Starta session
  session_start();
  //Frigör sessionsvariabeln
  session_unset();
  //Avsluta sessionen
  session_destroy();
  //Omdirigera till startsidan
  header('Location: ../../index.php');
  exit();
?>
