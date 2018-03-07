<?php
    $conn = mysql_connect("localhost","root","");//connect mysql
    if(!$conn){
        die("数据库连接失败，请检查你的网络,稍后再试试");
   	}
	/* create database
    if (mysql_query("CREATE DATABASE logsystem",$conn)){
		echo "Database created";
	}else{
		echo "Error creating database: " . mysql_error();
  	}
  	*/
  	/*create table in logsystem database
  	
  	mysql_select_db("logsystem",$conn);
  	$sql = "CREATE TABLE User
  	(
  		name varchar(15),
  		password varchar(15)
  	)";
  	mysql_query($sql,$conn);
  	
  	create table end
  	*/
  	/*insert data start

    mysql_select_db("logsystem",$conn);
    mysql_query( "INSERT INTO User (id, name, password)
    VALUES (3,'Admin', '123456')");  

     */
    mysql_select_db("Logsystem", $con);

	$result = mysql_query("SELECT * FROM User WHERE name='admin'");
  // while($row = mysql_fetch_array($result)){
  //     echo $row['name'] . " " . $row['password'];
  // }
	while($row = mysql_fetch_array($result)){
	  echo json_decode(array(
	  	'status' =>"success",
	  	'message'=>'查询成功',
	  	'name'=>$row['name'],
	  	'password' =>$row['password']
	  ));
	  exit;
	}
    mysql_close($conn);//结束连接数据库；
 ?>