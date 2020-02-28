<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}

?>






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
 
  <div class="mainbox"> 
    
    <div class="position">  
     <p>メールアドレス</p>
      <input type="text" class="formbox" size="40" value="<?php echo $_COOKIE['mail'];?>" name="mail">
      
     <p>パスワード</p>
      <input type="password" class="formbox" size="40" value="<?php echo $_COOKIE['password'];?>" name="password">
    </div> 
        
        
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