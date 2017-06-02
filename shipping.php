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
                  <h2 class="post_ttl">ДОСТАВКА</h2>
                  <div id="str_basket" style="margin:40px; text-align:justify;">
                     <p><b>Пункты самовывоза в Санкт-Петербурге</b> <br>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1oM20liPs06y9-_WbS3k8-W2xfe0" width="640" height="480"></iframe>
                     </p>
                     <b>Все пункты выдачи оборудованы примерочными кабинами!</b>
                     <p><b>Пункты самовывоза в Москве</b> <br>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1sgNbhYUF87PKyGF7RpLpYMsvJFA" width="640" height="480"></iframe>
                     </p>
                     <b>ВСЕ московские пункты принимают к оплате банковские карты.</b><br>
                     <b>Все пункты выдачи оборудованы примерочными кабинами!</b><br>
                     <br>
                     <p><b>Доставка по России: </b></p>
                     <ol style="font-size:18px">
                        <li>Доставка первым классом Почтой России (и EMS) с наложенным платежом - от 250 руб. 
                           Мы являемся Федеральным клиентом Почты России! Поэтому комиссия за наложенный платеж составляет всего 2% в отличие от 4-7% комиссии для обычных юр.лиц. (Cтатус Федерального клиента присваивается только крупным компаниям с безупречной репутацией и оборотом свыше 1000 отправлений в месяц)
                        </li>
                        <li>Доставка курьером от 350р. (Мы доставляем курьерами в 2000 населенных пунктов по России, возможность доставки в Ваш населенный пункт, а также стоимость и сроки доставки будут расчитаны при создании заказа) </li>
                        <li>В большинстве крупных городах России у нас есть Пункты выдачи заказов, стоимость доставки от 220р!</li>
                     </ol>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require '/footer.php';?>
   </body>
</html>