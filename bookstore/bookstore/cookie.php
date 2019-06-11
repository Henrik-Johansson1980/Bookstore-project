<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookietest</title>
    <style>
      body{
        background-color: #ddd;
        font-family: Arial, Helvetica sans-serif;
      }
      form {
        width:40vw;
        margin: 25vh auto;
        background-color: teal;
        padding: 2vw;
        padding-right: 4vw;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        color:#fff;
      }

      ul{
        list-style-type: none;
        display: flex;
        flex-direction: column;
      }
      li{
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
      }

      fieldset{
        text-align: center;
        border: 0px solid;
      }
      label, input{
        padding: 8px 20px;
        align-self: baseline;
      }

      input[type="email"],input[type="password"], input[type="checkbox"]{
        border: 0px solid;
        border-radius: 2px;
      }
      input[type="submit"]{
        width: 30%;
        padding: 10px 20px;
        border: 2px solid #fff;
        border-radius: 20px;
        font-size: 1em;
        background-color: inherit;
        color:inherit;
        align-self: center;
      }
    </style>
  </head>
  <body>
    <form action="recieve.php" method="post" class="profile">
      <fieldset>
        <legend>Ange dina uppgifter</legend>
        <ul>
          <li>
            <label for="email">E-post</label>
            <input type="email" name="email" placeholder="Ange E-post...">
          </li>
          <li>
            <label for="password">Lösenord</label>
            <input type="password" name="password" placeholder="Lösenord">
          </li>
          <li>
            <label for="remember">Kom ihåg mig</label>
            <input type="checkbox" name="remember">
          </li>
        </ul>
      </fieldset>
      <input type="submit" name="submit" value="Skicka">
    </form>
  </body>
</html>
