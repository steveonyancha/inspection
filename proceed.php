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
         <table><tr><td>
        <label>Inspector Id</label>:</td><td>
		<input type = "text" name = "id" ></td>
		</tr>
		<tr><td>
		<label>District</label>:</td><td>
		<input type = "text" name = "district" ></td>
		</tr><td>
		<label>Road No:</label>:</td><td>
		<input type = "text" name = "roadNo" ></td>
		 </tr>
		 <tr><td>
		<label>Road Type:</label>:</td><td>
		<input type = "text" name = "roadType" ></td>
		</tr>
		<tr><td>
		<label>Inspection Id:</label>:</td><td>
		<input type = "text" name = "inspectionId" ></td>
		</tr>
		<tr><td>
		<input type = "submit" name = "submit" value = "submit" onclick ="alert('you are about to submit the info,press ok to continue or cancel to review.')"></td></tr>
		</table>
   </form>
  

<br />

      </div>