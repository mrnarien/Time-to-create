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
            <div id="page">
               <div id="main">
                  <div id="catalog">
                     <div id="banner">
                        <?php
                           $bannernames=file('files/bannernames.txt', FILE_IGNORE_NEW_LINES);
                           $bannerimgs=file('files/bannerimgs.txt', FILE_IGNORE_NEW_LINES);
                           $bannersrcs=file('files/bannersrcs.txt', FILE_IGNORE_NEW_LINES);
                           	for ($i=0; $i<count($bannernames); $i++)
                           	{
                           		echo '<a href="',$bannersrcs[$i],'"target="_blank"><img src="banner/',$bannerimgs[$i],'" alt="',$bannernames[$i],'"></a>';
                           	}
                           ?>
                     </div>
                     <?php
                        $productarticles=file('files/productarticles.txt', FILE_IGNORE_NEW_LINES);
                        $productnames=file('files/productnames.txt', FILE_IGNORE_NEW_LINES);
                        $productimgs=file('files/productimgs.txt', FILE_IGNORE_NEW_LINES);
                        $productprices=file('files/productprices.txt', FILE_IGNORE_NEW_LINES);
                        for ($i=0; $i<count($productarticles); $i++)
                        {
                        	echo '
                        		<div id="product">
                        <img src="products/',$productimgs[$i],'" alt="',$productnames[$i],'">
                        <br>
                        <p align="center">',$productnames[$i],'</p>
                        <br>
                        <p align="center">',$productprices[$i],' руб.</p>
                        <p align="center">Артикул: ',$productarticles[$i],'</p>';
                        
                        
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        {
                        echo '<form action="delproduct.php" method="GET">
                        <center><input type="submit" value="Удалить товар" name="product',$i,'"/></center>
                        </form>';
                        }
                        else
                        {
                        echo '<form action="addtobasket.php">
                        ';
                        $is_item_added[$i]=false;
                        for ($j=0; $j<$_SESSION['basketcounter']; $j++)
                        {
                        if ($_SESSION['item'.$j]==$productarticles[$i])
                        {
                        echo '
                        <center><input type="submit" value="Добавлено в корзину" name="product', $i, '" disabled></center>
                        ';
                        $is_item_added[$i]=true;
                        }
                        }
                        if ($is_item_added[$i]==false)
                        {
                        echo '
                        <center><input type="submit" value="Добавить в корзину" name="product', $i, '"></center>
                        ';
                        }
                        echo '</form>';
                        };echo'</div>';}	
                        
                        
                        
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        {
                        echo '<div id="addprod">
                        <h2 class="post_ttl2">Добавление товаров</h2>
                        <form method="post" enctype="multipart/form-data" action=addproduct.php>
                        
                        <p style="margin-top:2%;">Артикул:<br>
                        <input type="text" size="40" name="productarticle" required></p>
                        <p>Название:<br>
                        <input type="text" size="40" name="productname" required></p>
                        <p>Цена:<br>
                        <input type="text" name="productprice" required></p>
                        <p>Картинка (рекоменд. размер - 200x200px):<br>
                        <input type="file" name="productimg" required></p>
                        <input type="submit" value="Добавить товар">
                        </form>
                        </div>';
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