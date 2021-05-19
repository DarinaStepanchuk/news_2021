<?php

function getAllArticles(){
    global $pdo;
    $sql = "SELECT * FROM articles";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function addArticle($title, $text, $time, $removetime, $userid){
    global $pdo;
    $cleantitle = cleanUpInput($title); 
    $cleantext = cleanUpInput($text);
    $cleantime = cleanUpInput($time);
    $cleanremovetime = cleanUpInput($removetime);
    $data = [$cleantitle, $cleantext, $cleantime, $cleanremovetime, $userid];
    $sql = "INSERT INTO articles (title, text, created, expirydate, userid) VALUES(?,?,?,?,?)";
    $stm=$pdo->prepare($sql);
    return $stm->execute($data);
}

function getArticleById($id){
    global $pdo;
    $cleanid = cleanUpInput($id);
    $sql = "SELECT * FROM articles WHERE articleid=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$cleanid]);
    $all = $stm->fetch(PDO::FETCH_ASSOC);
    return $all;
}

function deleteArticle($id){
    global $pdo;
    $cleanid = cleanUpInput($id);
    $sql = "DELETE FROM articles WHERE articleid=?";
    $stm=$pdo->prepare($sql);
    return $stm->execute([$cleanid]);
}

function updateArticle($title, $text, $time, $removetime, $articleid){
    global $pdo;
    $cleantitle = cleanUpInput($title); 
    $cleantext = cleanUpInput($text);
    $cleantime = cleanUpInput($time);
    $cleanremovetime = cleanUpInput($removetime);
    $cleanarticleid = cleanUpInput($articleid);
    $data = [$cleantitle, $cleantext, $cleantime, $cleanremovetime, $cleanarticleid];
    $sql = "UPDATE articles SET title = ?, text = ?, created = ?, expirydate = ? WHERE articleid = ?";
    $stm = $pdo->prepare($sql);
    return $stm->execute($data);
}