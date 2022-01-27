<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picutre']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./iamge/'.$original_pic_name);

?>

<!DOCTYPE HTML>
<html lang="ja">
    
    <head>
        <title>マイページ登録</title>
        <link rel="stylesheet" href="register_confirm.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
        <main>
            <div class="confirm">
                <h2>会員登録　確認</h2><br>
                <p>これらの内容で登録してもよろしいでしょうか？</p><br>
                <p>
                <?php echo "氏名：".$_POST['name']; ?>
                </p>
                
                <p>
                    <?php echo  "メール：".$_POST['mail']; ?>
                </p>

                <p>
                    <?php echo "パスワード：".$_POST['password']; ?>
                </p>

                <p>
                    <?php echo "プロフィール画像：".$_POST['picture']; ?>
                </p>

                <p>
                    <?php echo "コメント：".$_POST['comments']; ?>
                </p>

                <form action ="register.php">
                    <input type="submit" class="button1" value="戻って修正する"/>
                </form>

                <form action="register_insert.php" method="post">
                    <input type="submit" class="button2" value="登録する"/>
                    <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                    <input type="hidden" value="<?php echo $_POST['picture']; ?>" name="picture">
                    <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                </form>

            </div>
        </main>

        <footer>
            ©2018 InterNous All rights reserved
        </footer>
    </body>
</html>