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
      <form method="POST" action="#">
          <p><h3>Enter the inspection id:</h3></p>     
          <input name="old" placeholder="old password" type="password" style="width: 25%;padding: 12px 12px; margin: 5px 0;box-sizing: border-box;"><br>
		  <input name="new" placeholder="new password" type="password" style="width: 25%;padding: 12px 12px; margin: 5px 0;box-sizing: border-box;"><br>
		  <input name="confirm" placeholder="confirm"  type="password" style="width: 25%;padding: 12px 12px; margin: 5px 0;box-sizing: border-box;"><br>
          <input name="submit" type="submit" value="View" style=" 
     
     background-color: #3B5998; /* Green */
    border: 6;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;">
    </form>
  

<br />
<?php
    @$old =$_POST['old'];
	 @$new =$_POST['new'];
	  @$confirm =$_POST['confirm'];
	  if(@$_POST['submit']){
	   @$q = "select password from tbuser where id=$id";
	   @$r = mysql_query($q) or die("error".mysql_error());
	   $re = mysql_fetch_array($r);
	   if($re['password'] = $old){
	      if($new = $confirm){
		  $no = "UPDATE tbuser set password='$new' where id=$id";
		  $ye =mysql_query($no) or die("error".mysql_error());
		  if($ye){
		    echo "<script language='JavaScript'>
		    alert('password successfully changed');
		<script>";
		  }
	    
	  }
	  else{ 
	   echo "<script language='JavaScript'>
		    alert('new password missmatch password');
		<script>";
	  
	  }
	  }
	  else{
	  
	    echo "<script language='JavaScript'>
		    alert('incorrect old password');
		<script>";
	  }}
	
  ?>  
  </div>