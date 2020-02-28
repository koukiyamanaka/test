<!DOCTYPE HTML>
<html lang="ja">

<head>
    
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    
</head>

<body>   
    
<header>
    
    <img src="4eachblog_logo.jpg">
    
</header>

   
    
<form action="mypage.php" method="post">
    
    <h2 class="alarmtext">メールアドレスまたはパスワードが間違っています。</h2>
 
    <div class="mainbox"> 
    
 <p>メールアドレス</p>
 <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    
 <p>パスワード</p>
 <input type="password" class="formbox" size="40" name="password" pattern="^[a-zA-Z0-9]{6,}$" required>
    
<br> 

<div class="buttonking">
        
<input type="submit" class="submit_button" size="35" value="ログイン"> 
    
</div>

        </div>
        
        </form>
   <footer>
    
    ©2018 InterNous.inc.All rights resered
    
 </footer>     
      
</body>     
      
</html>