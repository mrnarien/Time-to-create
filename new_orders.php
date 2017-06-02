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
                  <h2 class="post_ttl">НОВЫЕ ЗАКАЗЫ</h2>
                  <? 
                     if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                     {?>
                  <div id="str_basket">
                     <form action="cleanorders.php" align="right" style="margin:5px;">
                        <input type="submit" value="Очистить заказы" >
                     </form>
                     <?php $logins=file('files/orderslogins.txt', FILE_IGNORE_NEW_LINES);
                        $fullnames=file('files/ordersfullnames.txt', FILE_IGNORE_NEW_LINES);
                        $phonenumbers=file('files/ordersphonenumbers.txt', FILE_IGNORE_NEW_LINES);
                        $emails=file('files/ordersemails.txt', FILE_IGNORE_NEW_LINES);
                        $addresses=file('files/ordersaddresses.txt', FILE_IGNORE_NEW_LINES);
                        $dates=file('files/ordersdates.txt', FILE_IGNORE_NEW_LINES);
                        $items=file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
                        for ($i=0; $i<count($items); $i++)
                        {
                        	echo '<table><tr><th>Данные</th><th>Значение</th></tr>
                        	<tr><td>Логин: </td><td>', $logins[$i], '</td></tr>
                        	<tr><td>Ф.И.О.: </td><td>', $fullnames[$i], '</td></tr>
                        	<tr><td>Тел. номер: </td><td>', $phonenumbers[$i], '</td></tr>
                        	<tr><td>E-mail: </td><td>', $emails[$i], '</td></tr>
                        	<tr><td>Адрес: </td><td>', $addresses[$i], '</td></tr>
                        	<tr><td>Дата желаемого получения: </td><td>', $dates[$i], '</td></tr>
                        	</table>
                        	<table><tr style="matgin-bottom:0px;"><th>Артикул</th><th>Наименование</th><th>Количество</th><th>Сумма к оплате</th></tr>
                        	',$items[$i],'
                        	</table>
                        	<br>
                        	<hr noshade size="10">
                        	<br>
                        	<br>
                        	';
                        }
                        ?>
                  </div>
                  <?	
                     }
                     else header('Location:index.php');
                     ?>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>
