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
<div style = "margin-left:20% ;">
 <center><h4>Terms</h4></center>
 <dl>
  <dt><b>Inspection ID:</b></dt>
  <dd>This is a unique used to identify each inspection. It mus be include in the inspection form</dd>
  <dt><b>Paved Road:</b></dt>
  <dd>this are road surfaced with asphalt.</dd>
  <dt><b>Unpaved Road:</b></dt>
  <dd>this are road surfaced with gravel.also refered as all weatherd roads.</dd>
  <dt><b>Inspection Type:</b></dt>
  <dd>This defines the type of road going to be inspected,either pave road or unpaved road.<br> this also determines the type of inspection form selected</dd>
</dl>
   <center><h4>Carring Out the Inspection.</h4></center>
    <ol>
	<li>After being logged, under <em>home</em> you shall be able to view the task assigned to you<br>
	note the inspection task detail noting the inspection id and inspection type<br>
	task list are the one deadline hasnt exceeded.</li>
	<li>Under <em>task</em>, select the appropriate form.<br> fill the inspection form with
	    inspection detail and submit when done on that particular distance covered.
	</li>
	<li>under <em>view</em> are  you are able to view the defect detail submitted<br>
	use the inspection id to view the detail. print the detail at the bottom of the page
	</li>
	</ol>
    
   </div>
