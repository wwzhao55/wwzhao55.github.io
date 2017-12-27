<?php
      $conn = @mysql_connect("localhost","root","")
          or die("数据库连接失败，请检查你的网络,稍后再试试");
     mysql_select_db("test");
     mysql_query("set names 'utf8'");//为中文编码集
     $sql = "INSERT INTO `test`.`message` (`id`,`name`, `password`)
     VALUES (NULL,'赵小样', '123456')";   
     mysql_query($sql);//结束连接数据库；
 ?>