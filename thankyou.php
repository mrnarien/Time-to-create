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
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2 class="post_ttl">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
                  <div id="str_basket">
                     <? if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        {
                        echo header('Location:index.php');
                        }
                        else
                        {?>
                     <p><b>Спасибо за заказ!</b></p>
                     <p><b>Мы свяжемся с вами в ближайшее время для окончательного подтверждения заказа.</b></p>
                     <?}?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>