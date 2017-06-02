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
                  <h2 class="post_ttl">О НАС</h2>
                  <div id="str_basket" style="margin:40px; text-align:justify;">
                   <p><b>Watch gadget</b> - интернет магазин самых дешёвых наручных часов. Покупайте качественные гаджеты по доступной цене!</p>
<p>Наш магазин <b>Watch Gadget</b> - частица крупной сети интернет-магазинов розничной и оптовой торговли й популярной продукции   ведущих брендов китайского производства, которая успешно выполняет свою миссию на протяжении уже более 6 лет. китайские производители давно завоевали весь мир своим трудолюбием, силой воли, умением делать шедевры и подделывать с высокой точностью изделия любой сложности. тем более, что официальные производители в китае славятся высоким качеством выпускаемой продукции для экспорта. на витринах нашего интернет магазина вы найдёте популярные и при этом самые дешёвые часы.</p>
<p>В <b>Watch Gadget</b> вы найдёте дешёвые мужские часы. у нас есть и часов таких известных брендов, как geneva, led,  jubil и др.</p>
                  <p align="center"><img src="images/about1.jpg"></p>
				  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>