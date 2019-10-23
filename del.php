<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#data').load('db.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>

<style type="text/css">
body{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
a{
text-decoration:none;
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
table { 

text-decoration:none;
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
 }

</style><div style = "margin-left:30% ;">
      <form method="POST" action="">
          <p><h3>Enter the inspection id:</h3></p>     
          <input name="detail" placeholder="id" type="text"><br>
          <input name="submit" value="submit" value="submit" type="submit" onclick="confirm('are you sure you want to delete this task');">
    </form>
  

<br /></div>
   <?php
include('database/config.php');

@$id=$_POST['detail'];

 @$sql = "DELETE FROM road_info WHERE inspectionId='$id'";
 @$rlt = mysql_query( $sql) or die("EROOR!!\t:-".mysql_error());
   if(@$rst){
       echo "<script language='JavaScript'>
	        alert('Task successfully dropped');
			history.back();
	   </script>";
   }
  
?>
