<script>
  $(document).ready(function(){
  $("#close").click(function(){
    $("#update").fadeOut("slow");
	window.location='?searchUser';
  });
  
});



<script>
$(document).ready(function(){
  $("#closes").click(function(){
    $("#success").fadeOut("slow");
  });
});

</script>
<!--succes box-->



<style>
input{
	padding:3px;}
	
	.dewey{
	font-size:20px;
	font-family:Arial, Helvetica, sans-serif;
	
	font-weight:bold;}
	hr{
		background:#999;
		color:#CCC;}
.success{
	color:#060;
	margin-top:15px;
	margin-left:20px;
	float:left;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;}
	.asd{ width:900px;height:40px;}
	.back{ background:#EEE; height:27px; width:100px;}
</style>


<form action="" id="login" name="login"  method="post" enctype="multipart/form-data">

<table width="900" border="0" cellspacing="3" style=" font-size:13px; margin-left:40px; align:right; margin-right:10% font-family:Verdana, Geneva, sans-serif; font-weight:bold;">
   <tr>
       <td width="86" height="50">ID number:</td>
       <td><input type="number" name="id" required style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
  
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
  </tr>
    <tr>
        <td>First name:</td>
        <td><input type="text" name="fname" style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
        <td>Middle name:</td>
        <td><input type="text" name="mname" style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
        <td>Last name:</td>
        <td><input type="text" name="lname" style=" 
     
   
    border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
    </tr>
    <tr>
         <td>email:</td>
        <td><input type="email" name="email" style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
        <td>Password:</td>
        <td><input type="test" name="password" style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    
    display: inline-block;
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
        <td>Privilege:</td>
        <td><select name="priv" style=" 
     
    /* background-color: #3B5998;  Green */
    border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;">
            <option value="user" selected="selected">Inspector</option>
            <option value="admin">Admin</option>
            </select></td>
    </tr>
    <td><input type="submit" name="submit" value="submit" style=" 
     
     background-color: #3B5998; /* Green */
    border: 6;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;"></td>
    <td></td>
    </tr>
</table>

</form>
<?php
    include('database/config.php');
   @$id = $_POST['id'];
   @$fname = $_POST['fname'];
   @$mname = $_POST['mname'];
   @$lname = $_POST['lname'];
   @$email = $_POST['email'];
   @$username = $_POST['username'];
   @$password = $_POST['password'];
   @$priv = $_POST['priv'];
   if(@$_POST['submit']){
        $q = "select id from tbuser where email='$email'";
		$rs = mysql_query($q) or die("error".mysql_error()) ;
		$s = mysql_fetch_array($rs);
		if(!$rs){
		 echo "<script>
                 alert('user exist');
                 </script>";}
      
   else{
				 $query = "INSERT INTO tbuser (fname, mi, lname, id, password, email, priv) VALUES('$fname','$mname','$lname', '$id',  '$password', '$email', '$priv')";
       $result = mysql_query($query) ;
       if(!$result){
           echo "<script>
                 alert('user exist');
                 </script>";
                  }
				  
				  else{
				  echo "<script>
                 alert('user created');
                 </script>";
				  }
                  }
				  
				  
				  }
				  
?>
<!-- the script to handle add user-->
