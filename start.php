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


</style><div style = "margin-left:20% ;">
    
   <form name = "start" method = "post" action = "start_do.php" >
         <php
     include('database/config.php');
	 $query="select max(inspectionId) from road_info";
	 $q = mysql_query($query) or die('error'.mysql_error());
	 $q = mysql_fetch_array($q);
	 $new = $q[0];
	 echo $new;
	
 
 ?>
         <table style="align:center;"><tr>
              <td><label>Inspector Id</label>:</td><td>
		     <input type = "number" name = "id" required style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
             <td><label>District:</label></td>
             <td>
		     <input type = "text" name = "district" required style=" 
     
   
    border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
		</tr>
		<tr><td>
		</td>
		</tr><td>
		<label>Road No:</label></td><td>
		<input type = "id" name = "roadNo"  style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
             <td><label>Road class:</label></td>
			  <td><select name="roadType" style=" 
     
    /* background-color: #3B5998;  Green */
    border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;">
			 <option value="A">A</option>
			 <option value="B">B</option>
			 <option value="C">C</option>
			 <option value="D">E</option>
			 <option value="E">E</option>
			 <option value="SPR">SPR</option>
			 <option value="U">U</option>
			 </select required></td>
            
		 </tr>
		 <tr><td>
		</td>
		</tr>
		<tr><td>
		<label>Inspection Id:</label></td><td>
		<input type = "text" name = "inspectionId"  value="<?php include('database/config.php');$query='select max(inspectionId) from road_info';
      			 $q = mysql_query($query) or die('error'.mysql_error());
	 $q = mysql_fetch_array($q);
	 $new = $q[0]+1;
	 echo $new;
	?>" required style=" 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;" ></td>
            <td><label>inspection type:</label></td>
            <td><select name="inspectiontype" style=" 
     
    /* background-color: #3B5998;  Green */
    border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;">
                <option value="pr" selected="selected">pr</option>
                <option value="ur">ur</option>
                </select></td>
		</tr>
       <tr>
           <td><label>start date:</label></td>
           <td><input type="date" name="begin" required style=" 
     
   
    border: 6;

    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
  
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
           <td><label>end date:</label></td>
           <td><input type="date" name="end" required style=" 
     
   
    border: 6;
  
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
       </tr>
	    <tr>
           <td><label>total distance(*metres):</label></td>
           <td><input type="number" name="distance" required style=" 
     
   
    border: 6;
  
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;"></td>
           <td></td>
           <td></td>
       </tr>
		<tr><td>
		<input type = "submit" name = "submit" value = "submit" style=" 
     
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
            <td><input type="submit" value="reset" style=" 
     
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
       </tr>
		</table>
   </form>
  

<br />

      </div>