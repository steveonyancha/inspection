<style>
.hr:hover{ background:#D5DEFF;}
.del:hover{ background:#FFF;}
</style>
<table width="850" border="0" cellspacing="1" style=" margin-left:20px;background:;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<?php 
	include('database/config.php');
$q="select * from tbuser";
$rs=mysql_query($q);
while($row=mysql_fetch_array($rs)){
	?>

  <tr bgcolor="#E8EDFF" align="center" class="hr" height="25">
    <td width="150">
	<?php echo $row['fname'];?>
    </td>
    <td  width="150"><?php echo $row['lname']; ?></td>
    <td width="150"><?php echo $row['mi']; ?></td>
      <td width="150"><?php echo $row['id']; ?></td>
      <td width="150"><?php echo $row['priv']; ?></td>
  
  </tr>
  

<?php	}
?>
<tr height="25">
<td colspan="6">
</td>
</tr>
</table>
