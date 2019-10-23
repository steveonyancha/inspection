<style>
.hr:hover{ background:#D5DEFF;}
.del:hover{ background:#FFF;}
</style>

<table width="850" border="0" cellspacing="1" style=" margin-left:20px;background:;font-size:12px; font-family:Verdana, Geneva, sans-serif;">
<?php
	include('database/config.php');
$q="select * from road_info";
$rs=mysql_query($q);
while($row=mysql_fetch_array($rs)){
	?>

  <tr bgcolor="#E8EDFF" align="center" class="hr" height="25">
    <td width="150">
	<?php echo $row['inspectionId'];?>
    </td>
    <td  width="150"><?php echo $row['roadNo']; ?></td>
    <td width="150"><?php echo $row['road_class']; ?></td>
      <td width="150"><?php echo $row['id']; ?></td>
      <td width="150"><?php echo $row['inspection_type']; ?></td>
      <td width="150"><?php echo $row['district']; ?></td>
      <td width="150"><?php echo $row['begin']; ?></td>
	  <td width="150"><?php echo $row['end']; ?></td>
	  <td width="150"><?php echo $row['distance']; ?></td>
	 <td class="del" width="150">
  <?php echo '<div align="center"><a href="#" id="'.$row['inspectionId'].'"  class="delbutton" title="Click To Delete"><img src="icons/b_drop.png" title="Delete"></a></div>'; ?>
  </td>
  </tr>
	 
  
  </td>
  </tr>
     <span id='result'></span>

<?php	}
?>
<tr height="25">
<td colspan="6">
</td>
</tr>
</table>
<script type="text/javascript">
$(function() {

$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = del_id;

 if(confirm("Are you sure you want to delete this task ID:"+info+"?"))
		  {

          try{
                xmlHttp = new XMLHttpRequest();
            }catch(e1){
                try{
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    
                }catch(e2){
                    try{
                    xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                    }
                 catch(e3){
                    alert('AJAX not supported');
                }
                
            }
          
        }
		  xmlHttp.onreadystatechange = processResponse;
            var url = 'delete.php?info=' + info;
            // set up the request
            xmlHttp.open("GET",url,true);
            //send the post result
            xmlHttp.send(null);
        

 }
 function processResponse(){
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                //var sp = document.getElementById('result');
               // sp.innerText = xmlHttp.responseText;
			   alert('task deleted');
			   element.parents(".hr").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
            }
        }

return false;

});

});
</script>


