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
      <form method="POST" action="test1.php">
          <p><h3>Enter the inspection id:</h3></p>     
          <input name="detail" placeholder="ID" type="text" style="width: 25%;padding: 12px 12px; margin: 5px 0;box-sizing: border-box;"><br>
		  <input name="karume" type="text" value="<?php echo $_SESSION['username']; ?>" hidden>
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
  

<br /></div>
    
  