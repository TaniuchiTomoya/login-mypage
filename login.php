<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title></title>
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>
    <main>
        <form action="mypage.php" method="POST" enctype="multipart/form-data">
            <div>
                <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            </div>
            <div>
                <label>パスワード</label><br>    
                <input type="password" class="formbox" size="40" name="password" pattern="^[a-zA-Z0-9]{6,}$" required>
            </div>
            <div>
                <input type="checkbox" class="checkbox" value="ログイン画面を保持する。">ログイン画面を保持する。          
            </div>
            <div>
                <input type="submit" class="submit_button" size="35" value="ログイン">
            </div>    
        </form>
    </main>
    <footer>
        ©2018 InterNous All rights reserved
    </footer>
</body>
</html>