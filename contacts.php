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
                  <h2 class="post_ttl">КОНТАКТЫ</h2>
                  <div id="contacts"  style="margin:40px; text-align:justify; font-size:18px;">
                     <p><b> Адрес офиса: </b> г.Санкт-Петербург, Невский проспект 31, офис 301
                     <p><b> Телефон: </b>8(800) 775-14-59</p>
                     <iframe name="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.8359268997553!2d30.327152892604495!3d59.93486466908238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963108a5fbea21%3A0xfb046cb2ccd90e6!2z0J3QtdCy0YHQutC40Lkg0L_RgC4sIDMxLCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywgMTkxMTg2!5e0!3m2!1sru!2sru!4v1496137198199" width="60%" height="60%" scrolling="auto" align="right"></iframe>
                     </iframe>
                     <OL>
                        <LI><A href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.8359268997553!2d30.327152892604495!3d59.93486466908238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963108a5fbea21%3A0xfb046cb2ccd90e6!2z0J3QtdCy0YHQutC40Lkg0L_RgC4sIDMxLCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywgMTkxMTg2!5e0!3m2!1sru!2sru!4v1496137198199" width="60%" height="60%" border="1" target="frame">Как нас найти в городе?</A></LI>
                        <LI><a href="images/Zdanie.jpg" target="frame">Как нас найти в здании?</A></LI>
                     </OL>
                     <p style="margin-bottom:500px;"></p>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>