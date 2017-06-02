<div class="footer-wrap">
   <div class="footer-block">
      <div class="float-left footer_navigation">
         <ul>
            <li><a href="about.php">О нас</a></li>
            <li><a href="contacts.php">Контакты</a></li>
            <li><a href="shipping.php">Доставка</a></li>
         </ul>
      </div>
      <div class="footer_info">
         <span class="phone"> 8(800) <span>775-14-59</span></span> 
      </div>
      <div class="footer_contacts float-right">
         <?php
            $handle = file_get_contents("files/counter.txt");
            $handle++;
            $fp = @fopen("files/counter.txt","w");
            fwrite($fp,$handle);
            fclose($fp);
            echo "<p><b>Число посещений: $handle</b></p>";
            ?></span>
      </div>
      <div class="footer_copy">
         <span><b>© 2017 <a href="index.php" title="Watch Gadget">Watch Gadget</a> | Копирование материалов разрешено с указанием источника <a href="index.php" title="Watch Gadget">Watch Gadget</b></a></span>
      </div>
   </div>
</div>
			

