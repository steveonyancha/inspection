<?php
include('database/config.php');

$id=$_GET['info'];

 $sql = "DELETE FROM road_info WHERE inspectionId='$id'";
 $rlt = mysql_query( $sql) or die("EROOR!!\t:-".mysql_error());
    if($rlt){
       echo "<script>
	alert('user deleted');<script>";
    }
	

?>

