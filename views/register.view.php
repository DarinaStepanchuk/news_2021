<?php require "partials/head.php"; ?>

<h2 class="centered">Rekisteröidy</h2>

<div class="inputarea">
<form  action="/register" method="post">
    Etunimi: <input type="text" name="firstname" maxlength=30><br>         
    Sukunimi: <input type="text" name="lastname" maxlength=30><br>
    Käyttäjänimi: <input type="text" name="username" maxlength=30><br>
    Salasana: <input type="password" name="password" maxlength=30><br>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php"; ?>