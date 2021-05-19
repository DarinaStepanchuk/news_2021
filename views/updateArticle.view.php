<?php require "partials/head.php"; ?>

<h2 class="centered">Syötä uutinen</h2>

<div class="inputarea">
<form  action="/update_article" method="post" >
    Otsikko: <input type="text" name="newstitle" maxlength=30 value="<?=$title?>"><br>
    Uutinen: <textarea name="newstext" rows="5" cols="30"><?=$text?></textarea><br>          
    <label for="news-time" >Valitse artikkelin päivämäärä</label>
    <input type="datetime-local" id="meeting-time" name="newstime" value=<?=$time?>> 
    Poistopäivä: <input type="date" name="removedate" value=<?=$removetime?>><br>
    <input type="hidden" id="articleid" name="id" value=<?=$id?>>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php"; ?>