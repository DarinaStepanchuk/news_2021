<?php require "partials/head.php"; ?>

<h2 class="centered">Syötä uutinen</h2>

<div class="inputarea">
<form  action="/add_article" method="post">
    Otsikko: <input type="text" name="newstitle" maxlength=30><br>
    Uutinen: <textarea name="newstext" rows="5" cols="30"></textarea><br>          
    <label for="news-time">Valitse artikkelin päivämäärä</label>
    <input type="datetime-local" id="meeting-time" name="newstime"> 
    Poistopäivä: <input type="date" name="removedate"><br>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php"; ?>