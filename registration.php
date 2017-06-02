<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/logo.png" type="image/png">
      <title>Watch Gadget - Интернет-магазин наручных часов</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require '/header.php';?>
            <div id="main">
               <div id="catalog">
			     <h2 class="post_ttl">РЕГИСТРАЦИЯ</h2>
                  <div id="form_reg">
                     <form method="post" action="register.php">
                        <p>Логин<br>(не менее 6 символов):</p>
                        <input type="text" name="login" required>
                        <p>E-mail:</p>
                        <input type="text" name="email" required>
                        <p>Пароль<br>(не менее 8 символов):</p>
                        <input type="password" name="password1" required>
                        <p>Повторите пароль:</p>
                        <input type="password" name="password2" required>
                        <br>
                        <br>
                        <p align="center"><input type="submit" value="Зарегистрироваться"></p>
                     </form>
                     <?php
                        if ($_SESSION['login_too_short']==true)
                        {
                        	echo '<p align="center">Логин слишком<br>короткий.</p>';
                        	$_SESSION['login_too_short']=false;
                        }
                        if ($_SESSION['login_already_exist']==true)
                        {
                        	echo '<p align="center">Этот логин занят.</p>';
                        	$_SESSION['login_already_exist']=false;
                        }
                        if ($_SESSION['passwords_not_the_same']==true)
                        {
                        	echo '<p align="center">Пароли не совпадают.</p>';
                        	$_SESSION['passwords_not_the_same']=false;
                        }
                        if ($_SESSION['password_too_short']==true)
                        {
                        	echo '<p align="center">Пароль слишком<br>короткий.</p>';
                        	$_SESSION['password_too_short']=false;
                        }
                        ?>	
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require '/footer.php';?>
   </body>
</html>