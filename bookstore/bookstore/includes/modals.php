
  <!-- Register Modal Formuläret öppnas och flyter framför/ovanför sidan -->
  <div id="register" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-padding-32">
      <div class="w3-container w3-white w3-center">
        <!--Stäng rutan när man klickar på X-knappen -->
        <span onclick="document.getElementById('register').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></span>
        <!--Rubrik-->
        <h2 class="w3-wide">Registrering</h2>
          <!--Formulär, när formuläret skickas formulärdata  för hantering till filen tack.php, eftersom registreringsformuläret
            inneåller känslig datat använder jag metoden post för att skicka data. Eftersom formuläret kan komma att användas för att
            registrera en ny användare i databasen i framtiden har jag gjort ett inputfält motsvarande varje kouumn i tabellen kund (bortsett från kundnummer som
            ökas på automatiskt).
            I detta formulär använder jag html5 attributet pattern för att testa input, detta kan eventuellt även göras/kompletteras med Javascript eller PHP.
          -->
          <form action="tack.php" method="post" id="regForm" class="w3-padding-large">
            <fieldset>
              <legend>Personuppgifter</legend>
              <!--Förnamn, kan vara dubbelnamn med bindestreck-->
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="fname" class="w3-quarter">Name:</label>
                <input class="w3-rest" type="text" placeholder="Förnamn" id="fname" name="fname" pattern="^[A-Öa-ö]+(-[A-Öa-z])*$" maxlength="30" size="40" required autofocus>
              </p>
              <!--Efternamn, kan vara dubbelnamn med bindestreck eller mellanslag-->
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="lname" class="w3-quarter">Last name:</label>
                <input class="w3-rest" type="text" placeholder="Efternamn" id="lname" name="lname" pattern="^[A-Öa-ö]+(- [A-Öa-ö]+)*$"  maxlength="30" size="40" required>
              </p>
              <!--Matchar Epostadress -->
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="email" class="w3-quarter">E-mail:</label>
                <input class="w3-rest" type="email" placeholder="E-mail" id="email" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  maxlength="128" size="40" required>
              </p>
              <!--Matchar svenskt personnr källa http://blacksolutions.se/blogg/regex-exempel/-->
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="personnr" class="w3-quarter">Personnummer:</label>
                <input class="w3-rest" type="text" placeholder="ÅÅÅÅMMDD-NNNN" id="personnr"  name="personnr" pattern="^[12]{1}[90]{1}[0-9]{6}-[0-9]{4}$"  maxlength="13" size="40" required>
              </p>
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="adress" class="w3-quarter">Adress:</label>
                <input class="w3-rest" type="text" placeholder="Adress" id="adress" name="adress" pattern="^[A-Öa-ö0-9 ]+$"  maxlength="60" size="40" required>
              </p>
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="postnr" class="w3-quarter">Postnummer:</label>
                <input class="w3-rest" type="text"  placeholder="12345" id="postnr" name="postnr" pattern="^[0-9]{5}$"  maxlength="5" size="40" required>
              </p>
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="city" class="w3-quarter">Ort:</label>
                <input class="w3-rest" type="text" placeholder="Ort" id="city" name="city" pattern="^[A-Öa-ö ]+$"  maxlength="30" size="40" required>
              </p>
              <!--Matchar svenskt mobilnummer källa http://blacksolutions.se/blogg/regex-exempel/-->
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="phone" class="w3-quarter">Mobiltelefon:</label>
                <input class="w3-rest" type="text" placeholder="070-1234567" id="phone" name="phone" pattern="^[0]{1}[7]{1}[0,2,3,6,9]{1}-[0-9]{7}$"  maxlength="13" size="40" required>
              </p>
              <!--Lösenord minst 8 tecken varav minst en stor och liten bokstav och minst ett nummer https://www.w3schools.com/tags/att_input_pattern.asp-->
              <p class="w3-wide w3-padding-small w3-margin">
                <label for="pw" class="w3-quarter">Lösenord:</label>
                <input class="w3-rest" type="password" placeholder="Password" id="pw" name="pw" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" size="40" required
                title="Lösenord minst 8 tecken varav minst en stor och liten bokstav och minst en siffra">
              </p>
              <!--namnet register-submit används i tack.php för att kolla att man kommit via formuläret.-->
              <input type="submit" name="register-submit" value="Registrera" class="w3-button w3-padding-large w3-red w3-margin">
            </fieldset>
          </form>
        <!--Slut formulär-->
      </div>
    </div>
  </div>
  <!--Slut Register modal-->


  <!-- Login Modal -->
  <div id="login" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-padding-32">
      <div class="w3-container w3-white w3-center">
        <span onclick="document.getElementById('login').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></span>
        <h2 class="w3-wide">LOGIN</h2>
        <form action="bookstore/includes/login.php" method="post" id="loginform" class="w3-padding-large">
          <fieldset>
            <p class="w3-wide w3-padding-small w3-margin">
              <label for="user" class="w3-quarter">E-mail:</label>
              <input class="w3-rest" type="email" placeholder="E-mail" id="user" name="user" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  maxlength="128" size="40" required>
            </p>
            <!--Lösenord minst 8 tecken varav minst en stor och liten bokstav och minst ett nummer https://www.w3schools.com/tags/att_input_pattern.asp-->
            <p class="w3-wide w3-padding-small w3-margin">
              <label for="password" class="w3-quarter">Lösenord:</label>
              <input class="w3-rest" type="password" placeholder="Password" id="password" name="password" maxlength="60" size="40" required>
            </p>
            <!--namnet login-submit används i login.php för att kolla att man kommit via formuläret.-->
            <input type="submit" name="login-submit" value="Login" class="w3-button w3-padding-large w3-red w3-margin-bottom">
            <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('login').style.display='none',document.getElementById('register').style.display='block' ">Registrera</button>
          </fieldset>
        </form>
      <!--Slut formulär-->
      </div>
    </div>
  </div>

  <!-- Newsletter Modal -->
  <div id="newsletter" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-padding-32">
      <div class="w3-container w3-white w3-center">
        <span onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></span>
        <h2 class="w3-wide">NEWSLETTER</h2>
        <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
        <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
        <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
      </div>
    </div>
  </div>
