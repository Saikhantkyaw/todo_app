
<?php 
  $option=array(
     PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION

  );
  $pdo = new PDO(
   "mysql:host=localhost;dbname=php_htt","susu","susu1551",$option
  )
 ?>