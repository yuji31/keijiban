<!DOCTYPE html>
<html lang="ja">

<head>
<mata charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select*from 4each_keijiban");



?>






<header>
    <div class="logo">
    <img src="4eachblog_logo.jpg">
    </div>
    <div class="nav">

    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
</header>


<main>
<div class="main-container">
<div class="left">

 <h1>プログラミングに役立つ掲示板</h1>
    
 
    <form method="post" action="insert.php">
    <h3>入力フォーム</h3>
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>

        
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="50" rows="7" name="comments"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>

    </form>  
   

    <?php
                        while($row = $stmt->fetch()){
                            echo "<div class='kiji'>";
                            echo "<h4>".$row['title']."</h4>";
                            echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>



    

    
</div>
</div>


    <div class="right">
    <h6>人気の記事</h6>
    <ul>
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>今人気のエディタ　Top5</li>
        <li>HTMLの基礎</li>

    </ul>

    <h6>オススメリンク</h6>
    <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Braketsのダウンロード</li>

    </ul>

    <h6>カテゴリ</h6>
    <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>

    </ul>

    </div>

</main>


<footer>
    copyright(c)internous|4each blog the which provides A to Z about programming.

</footer>




</html>






</body>

