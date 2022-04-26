<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt=$pdo->query("select * from keijiban");
        ?>

        <header>
            <div class="pic1">
                <img src="4eachblog_logo.jpg">
            </div>

            <div class="mokuji">
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
            <div class="maincon">
                <div class="left_box">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <form method="post" action="insert.php">
                        <div class="form">   
                                <h2>入力フォーム</h2>
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="name" name="handlename" size=35>
                            </div>
                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="title" name="title" size=35>
                            </div>
                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea name="comments" rows="10" cols="70"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="submit" value="投稿する">
                            </div>
                        </div>
                    </form>

                    <?php
                    while($row=$stmt->fetch()){
                        echo"<div class='com'>";
                        echo"<h2>".$row['title']."</h2>";
                        echo $row['comments'];
                        echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo"</div>";
                    }
                
                    ?>
                </div>

                <div class="right_box">
                    <h2>人気の記事</h2>
                            <ul>
                                <li>PHPオススメ本</li>
                                <li>PHP MyAdminの使い方</li>
                                <li>今人気のエディタ Top5</li>
                                <li>HTMLの基礎</li>
                            </ul>
                        <h2>オススメリンク</h2>    
                            <ul>
                                <li>インターノウス株式会社</li>
                                <li>XAMPPのダウンロード</li>
                                <li>Eclipseのダウンロード</li>
                                <li>Bracketsのダウンロード</li>
                            </ul>
                        <h2>カテゴリ</h2>
                            <ul>
                                <li>HTML</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>javascript</li>
                            </ul>
                </div>
            </div>
        </main>
    
    
        <footer>
            <p>copyright © intenous | 4each blog the which provides A to Z about progrmming.</p>
        </footer>

        
    </body>
</html>