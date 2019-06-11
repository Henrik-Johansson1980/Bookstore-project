<?php
    //Definiera och initiera nödvändiga parametrar för att ansluta till Databasen bookstore.
    define("DB_SERVER", "localhost");
    define("DB_USER", "bookstore");
    define("DB_PASSWORD", "P5RuevJmfUTcMMFv");
    define("DB_DATABASE", "bookstore");

    //Skapa en variabel för att ansluta till databasen. Variabeln går att komma åt om man inkluderar
    //denna filen i en annan php-fil t.ex. index.php.
    $dbConnection = mysqli_connect(DB_SERVER,DB_USER, DB_PASSWORD, DB_DATABASE);
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Uppkoppling mot databasen: misslyckades %s\n", mysqli_connect_error());
        exit();
    }
    //Ändra character set to utf8
    if (!mysqli_set_charset($dbConnection, "utf8")) {
        printf("Fel vid laddning character set utf8: %s\n", mysqli_error($dbConnection));
        exit();
    }
?>
