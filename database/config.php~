<?php
 /*
 //object oriented style
  $mysqli = new mysqli("localhost","root","mongare!123456^","test");
  //check connection
  if(mysqli_connect_errno()) {
    printf("Connect failed: %s\n",mysqli_connect_error());
    exit();
  }
  //disable autocommit
  $mysqli ->autocommit(FALSE);

  $mysqli ->query("CREATE TABLE myCity LIKE City");
  $mysqli ->query("ALTER TABLE myCity type=InnoDB");
  $mysqli ->query("INSERT INTO myCity SELECT * FROM City LIMIT 50");

  //commit INSERT
  $mysqli ->commit();

  //delete all rows
  $mysqli->query("DELETE FROM myCity");

  if($result = $mysqli -> query("SELECT COUNT(*) FROM myCity")){
    $row = $result -> fetch_row();
    printf("%d rows in the table myCity.\n",$row[0]);
    //free result
    $result -> close();
  }
  //rollback
  $mysqli -> rollback();
  if($result = $mysqli -> query("SELECT COUNT(*) FROM myCity")){
    $row = $result -> fetch_row();
    printf("%d rows in the table myCity(after rollback).\n",$row[0]);
    //free result
    $result -> close();
  }
  //drop table myCity
  $mysqli -> query("DROP TABLE myCity");
   $mysqli -> close();
   */
   //Procedural style
   $link = mysqli_connect("localhost","root","","inspection");

   //check connection_aborted
   if(mysqli_connect_errno()){
     printf("Connect failed: %s\n",mysqli_connect_error());
     exit();
   }
   //return name of current default database
   /*if($result = mysqli_query($link,"SELECT DATABASE()")){
     $row = mysqli_fetch_row($result);
     printf("Default database is %s.\n",$row[0]);
     mysqli_free_result($result);
   }
   //change db to world db
   mysqli_select_db($link,"world");

   //return name of the current database
   if($result = mysqli_query($link,"SELECT DATABASE()")){
     $row = mysqli_fetch_row($result);
     printf("Default database is %s.\n",$row[0]);
	 $re = mysqli_query($link,"CREATE TABLE jubilee (uhuru int (10))");
     mysqli_free_result($result);
   }
   mysqli_close($link);*/
   ?>
