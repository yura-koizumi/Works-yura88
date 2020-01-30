<?php
$error = $title = $content = ''; //変数の初期化
if(@$_POST['submit']){ //submitのチェック
    
    //フォームの内容を格納 
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    if(!$title)$error .= 'No title<br>';
    if(mb_strlen($title)>20)$error .= 'Too Long title<br>';
    if(!$content)$error .= 'No content<br>';
    if(!$error){
        $pdo = new PDO("mysql:dbname=blog","root");
        $st = $pdo->query("INSERT INTO post(title,content)VALUES('$title','$content')");
        header('Location: index.php');
        exit(;)
    }
}
require 't_post.php';
?>