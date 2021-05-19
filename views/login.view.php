<?php require "partials/head.php"; ?>

<h2 class="centered">Login</h2>

<div class="inputarea">
<form  action="/login" method="post">
    Käyttäjänimi: <input type="text" name="username" maxlength=30><br>
    Salasana: <input type="password" name="password" maxlength=30><br>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php"; ?>