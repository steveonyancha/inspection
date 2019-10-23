<style>
.scroll{
	width:902px;
	max-height:500px;
	float:left;
	margin-bottom:20px;
	margin-left:20px;
	overflow:scroll;
	overflow-x:hidden;
    overflow-y:scroll;	}
.searcharea{
	float:left;
	
	margin-left:20px;
	}
.hed{
	float:left;
	margin-left:20px;
	margin-top:10px;}
    </style>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript">

$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
	$.ajax({
type: "POST",
url: "allstudent.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	}
});
}
else
{
$.ajax({
type: "POST",
url: 'findborrower.php',
data: dataString,
cache: false,
success: function(html)

{

$("#display").html(html).show();
	}});


}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("First name,second name, last name");
   });
   
   </script>
   
<br/>
<style media="screen">
    .noprint{display:block}
	.yesprint{display: block !important}
         
</style>
<style media="screen">
    .noprint{display:none}
	.yesprint{display: block !important}
         
</style>


<div class="hed">
<style>
.web{ -webkit-border-radius:7px 7px 0px 0px;
 -moz-border-radius:7px 7px 0px 0px; 
 text-align:center; font-size:12px; font-weight:bold; font-family:Arial, "Arial Black", "Arial Narrow"; color:#003399;
}
</style>
</br>
<table width="850" border="0" class="web" cellspacing="1" style=" margin-left:20px;font-size:12px; font-family:Verdana, Geneva, sans-serif;">

<tr  bgcolor="" height="30">
   <td class="web" width="150">Inspection ID</td >
   <td class="web" width="150">Road NO</td >
    <td  class="web" width="150">Class</td >
    <td  class="web" width="150">inspector id</td >
	 <td  class="web" width="150">inspection type</td >
    <td  class="web" width="150">district</td >
    <td  class="web"  width="150">begin</td >
    <td class="web" width="150" >End</td >
	 <td  class="web" width="150" >Distance</td >
	 <td  class="web" width="150" >Drop</td >
	
  </tr>
  </table>
</div>
<div class="scroll">


<div id="display">
<?php include('task.php'); ?>
</div>


</div>