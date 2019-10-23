<?php
     $conn=mysql_connect('localhost','root','');
     mysql_select_db("ajax",$conn);

      $roll = $_GET['roll'];
      $query = "select * from results where roll=$roll";
      $rs = mysql_query($query);
      $result = "Not found";
      if($rs){
           $a= mysql_fetch_array($rs);
          $result = $a['result'];
          echo $result;
      }
    else{
        echo $result;
    }

?>