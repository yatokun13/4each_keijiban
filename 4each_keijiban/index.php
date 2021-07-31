<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

<div class="logo"><img src="4eachblog_logo.jpg"></div>
        <header>
           <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

<main>
 <div class="main_container">
            
   <div class="left">
              <h1>プログラミングに役立つ掲示板</h1>
              
             
    

       <h2>入力フォーム</h2>
          <form method="post" action="insert.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="25" name="handlename">
          </div>

          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="25" name="title">
          </div>

          <div>
            <lavel>コメント</lavel>
            <br>
            <textarea cols="42" rows="4" name="comments"></textarea>
          </div>

          <div>
  
             <input type="submit" class="button2" value="送信する"/>
          </div>
          </form>

          <?php
        
           while ($row = $stmt->fetch()){

             echo"<div class='kiji'>";
             echo"<h3>".$row['title']."</h3>";
             echo"<div class='contents'>";
             echo $row['comments'];
             echo"<div class='handlename'>posted by".$row['handlename']."</div>";
             echo"</div>";
             echo"</div>";
              }
           ?>
    </div>

            <div class="right">
                 <ul><div class="kizi">人気の記事</div>
                     <li>PHPおすすめ本</li>
                     <li>PHP MyAdminの使い方</li>
                     <li>今人気のエディタTop5</li>
                     <li>HTMLの基礎</li>

                 </ul>
                 <ul><div class="kizi">オススメリンク</div>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>

                </ul>
                <ul><div class="kizi">カテゴリ</div>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>

                </ul>

            </div>
        

        </div>
        </main>

        <footer>
        copyright・internous | 4each blog the which provides A to Z about programmig
        </footer>
    </body>

</html>



