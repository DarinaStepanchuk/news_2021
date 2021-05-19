<?php require "partials/head.php"; ?>

<h2 class="centered">Lue uutiset</h2>

<div class = "news">
<?php
    foreach($allnews as $newsitem){
        echo "<div class='newsitem'>";
        echo "<h3>", $newsitem["title"], "</h3>";
        echo "<p>", $newsitem["text"], "</p>";
        echo "<p>", $newsitem["created"], " by user: " , $newsitem["userid"], "</p>";
        if(isLoggedIn() && ($newsitem["userid"] == $_SESSION["userid"])){
            $id = $newsitem['articleid'];
            $newsid = 'deleteNews' . $id;
            echo "<a id=$newsid onClick='confirmDelete($id)' href=/delete_article?id=$id>Poista</a>". " ";
            echo "<a href=/update_article?id=$id>Päivitä</a>";
        }
        echo "</div>";
    }
?>
</div>

<?php require "partials/footer.php"; ?>