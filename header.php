<?php header("Content-Type: text/html; charset=utf-8");?>
<div id="header">
   <div class="daynews">
      <?
         $daynews = file('files/daynews.txt', FILE_IGNORE_NEW_LINES);
         for ($i = 0; $i < count($daynews); $i++) {
             echo $daynews[$i];
         }
      ?>
   </div>
   <div class="logo">
      <a href="index.php"><img src="images/logotip.png"></a>
   </div>
   <div id="basket" class="float-right">
      <?php
         if (isset($_SESSION['login'])) {
             if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                 $orderscount = file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
                 echo '<a href="new_orders.php">  Новые заказы: ', count($orderscount), '</a>
                  ';
             } else {
                 echo ' <a href="basket.php"> Товаров в корзине: ', $_SESSION['basketcounter'], '</a>
                  <a href="basket.php" id="add2basketButton">В корзину</a>
                  ';
             }
         } else
             echo '<a href="basket.php"> Товаров в корзине: ', $_SESSION['basketcounter'], '</a>
                  <a href="basket.php" id="add2basketButton">В корзину</a>
                  ';
         ?>
   </div>
   <div class="header_info">
      <span class="phone">
         8(800) <span>775-14-59</span>
         <div class="add_phones">
         </div>
         <div class="inline-link"><b>позвоните нам</b></div>
      </span>
   </div>
   <div class="reg">
      <?php
         if (isset($_SESSION['login'])) {
             if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                 echo '<p>Здравствуйте, ', $_SESSION['login'], ' | Статус: администратор </p>
                              <p><a href="exit.php">Выйти</a> | <a href="cabinet.php">Управление сайтом </a> </p>';
             } else {
                 echo '<p>Здравствуйте, ', $_SESSION['login'], ' | Статус: пользователь</p><p><a href="exit.php">Выйти</a></p>';
             }
         }

         else
             echo '
                  Авторизация 
                  <form method="post" action="login.php">
                  <input type="text" placeholder="Логин" name="login" required>
                  <input type="password" placeholder="Пароль" name="password" required>
                  <input type="submit" value="Войти">
                  </form>
                  <a href="registration.php">Зарегистрироваться</a>';
         ?>
   </div>
   <div class="clear-both"></div>
</div>
<div class="menu">
   <ul id="menu">
      <li><a href="index.php">ГЛАВНАЯ</a>
      </li>
      <li>
         <a href="about.php">О НАС</a>
      </li>
      <li>
         <a href="shipping.php">ДОСТАВКА</a>
      </li>
      <li>
         <a href="contacts.php">КОНТАКТЫ</a>
      </li>
      <li>
         <a href="quest.php">ГОСТЕВАЯ</a>
      </li>
   </ul>
</div>
