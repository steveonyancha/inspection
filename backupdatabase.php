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
td { padding: .3em;}
#head { background: #fc9; float:left; }
#eee { background: #fff;}
</style>

<table border="0" style="margin-left:50px; margin-top:20px;">
<tr style=" background:none; "><td rowspan="2">

<img src="icons/download-database-icon.png" height="50"  alt="backup" />
</td>
<td style=" background:none;font-size:20px; ">Back-UP Database<br/>

</td>
<tr>
<td>Automatically backup database everyday
</td>
</tr>
</tr></table>

<br />
<div id="data"></div>


