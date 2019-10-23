<html>
<head>
     <title>Record of inspection</title>
	 <link rel="icon" 
              type="image/png" 
              href="images/road.png" />
</head>
<style>
      .header{
	      background:#3B5998;
	width:100%;
	height:70px;
	border-bottom:1px #FFF solid;
	   }
</style>

<body>
<div class="header">
<br><br><br><br><br>
<?php
    include('database/config.php');
    $id = $_POST['detail'];
	if($_POST['submit']){
    $s = "SELECT inspection_type,id FROM road_info WHERE inspectionId = '$id'";
	$r = mysql_query($s) or die('error:'.mysql_error());
	$r = mysql_fetch_array($r);
	$intype = $r['inspection_type'];
	echo $intype;
	#query the correct table
	$query = "SELECT * FROM $intype WHERE inspectionId=$id";
	$result = mysql_query($query) or die('error'.mysql_error());
    $Result = mysql_fetch_array($result);
	
	if($intype == 'ur'){
	echo "<table border='1'><thead>inspection detail form:"; echo $intype; echo "<br>Inspection ID:"; echo $Result['inspectionId'];echo " </thead>
	<thead><br>Shoulder Left<br></thead>";
	echo "<tr style='text-align:centre'><td style='text-align:centre' colspan='12'><h4 >Shoulder left</h4></td></tr>";
	echo '<tr>
	<td  width="100">date</td>
	<td width="100">location to</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriage step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>';
	   $res=mysql_query($query) or die('Error'.mysql_error());
	while($re=mysql_fetch_array($res)){
	echo '<tr>
	<td  width="100">'; echo $re['date']; echo '</td>
	 <td  width="100">'; echo $re['location_to']; echo '</td>
	<td  width="100">'; echo $re['pavement_type']; echo '</td>
   <td  width="100">'; $re['sl_obstruction']; echo '</td>
	<td  width="100">'; echo $re['sl_high_veges'];echo '</td>
	<td  width="100">'; echo $re['sl_scour'];echo '</td>
	<td  width="100">';  echo $re['sl_shoulder']; echo '</td>
	<td  width="100">'; echo $re['sl_rutting']; echo '</td>
	<td  width="100">'; $ans = $re['sl_pothole_width']*$re['sl_pothole_depth']*$re['sl_pothole_nos']; echo $ans; echo '</td>
	<td  width="100">'; echo $re['sl_cause']; echo '</td>
	</tr>';
	}
	echo "<tr style='text-align:centre'><td style='text-align:centre' colspan='10'><h4 >Carriage way</h4></td></tr>";
	echo '
	<tr>
	<td  width="100">date</td>
	<td width="100">location to</td> 
	<td width="100">pavement type</td>
	<td  width="100">Loss of chamber</td>
	<td  width="100">Rutting (depth)</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Corrugation</td>
	<td  width="100">Erosion Gullies</td>
	<td  width="100">Soft Spot</td>
	<td width="100">Obstruction</td>
	<td width="100">Loss of Gravel</td>
	<td  width="100">Cause of Defect</td>
	</tr>';
	$reslt=mysql_query($query) or die('Error'.mysql_error());
	 while($Rlt=mysql_fetch_array($reslt)){
	 echo '<tr>
	<td  width="100">'; echo $Rlt['date']; echo '</td>
	<td  width="100">'; echo $Rlt['location_to']; echo '</td>
	<td  width="100">'; echo $Rlt['pavement_type']; echo '</td>
	<td  width="100">';  echo $Rlt['cw_loss_camber']; echo '</td>
	<td  width="100">'; echo $Rlt['cw_rutting']; echo '</td>
	<td  width="100">'; $ans = $Rlt['cw_pothole_width']*$Rlt['cw_pothole_depth']*$Rlt['cw_pothole_nos']; echo $ans; echo '</td>
	<td  width="100">'; echo $Rlt['cw_corrugations']; echo '</td>
	<td  width="100">'; echo $Rlt['cw_erosion_gulley']; echo '</td>
	<td  width="100">'; echo $Rlt['cw_spot']; echo '</td>
	<td  width="100">'; echo $Rlt['cw_obstruction']; echo '</td>
	<td width="100">'; echo $Rlt['cw_loss_of_graveld']; echo '</td> 
	<td width="100">'; echo $Rlt['cw_cause']; echo '</td>
	</tr>';
	echo "<tr style='text-align:centre'><td style='text-align:centre' colspan='10'><h4 >Shoulder Right</h4></td></tr>";
		echo '<tr>
	<td  width="100">date</td>
	<td width="100">location to</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriage step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>';
	   $na=mysql_query($query) or die('Error'.mysql_error());
	while($og=mysql_fetch_array($na)){
	echo '<tr>
	<td  width="100">'; echo $og['date']; echo '</td>
	 <td  width="100">'; echo $og['location_to']; echo '</td>
	<td  width="100">'; echo $og['pavement_type']; echo '</td>
   <td  width="100">'; $og['sr_obstruction']; echo '</td>
	<td  width="100">'; echo $og['sr_high_veges'];echo '</td>
	<td  width="100">'; echo $og['sr_scour'];echo '</td>
	<td  width="100">';  echo $og['sr_shoulder']; echo '</td>
	<td  width="100">'; echo $og['sr_rutting']; echo '</td>
	<td  width="100">'; $ans = $og['sr_pothole_width']*$og['sl_pothole_depth']*$og['sl_pothole_nos']; echo $ans; echo '</td>
	<td  width="100">'; echo $og['sr_cause']; echo '</td>
	</tr>';
	}
	
	 }
	 echo "</table>";
	 }
	 else{
	 echo "<table border='1'>
    <tr><thead>inspection detail form:"; echo $intype; echo "<br>Inspection ID:"; echo $Result['inspectionId']; echo "</thead>
	<thead><br>Shoulder Left<br></thead><tr>";
	echo "<tr style='text-align:centre'><td style='text-align:centre' colspan='10'><h4 >Shoulder left</h4></td></tr>";
	echo '<tr>
	<td  width="100">date</td>
	<td width="100">location to</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriageway step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>';
	$ft= mysql_query($query) or die('pr-error:'.mysql_error());
	while($ftu=mysql_fetch_array($ft)) { 
	echo '<tr>
	<td  width="100">'; echo $ftu['date']; echo '</td>
    <td  width="100">';echo $ftu['location_to']; echo '</td>
	<td  width="100">'; echo $ftu['pavement_type']; echo '</td>
    <td  width="100">'; echo $ftu['sl_obstruction']; echo '</td>
	<td  width="100">'; echo $ftu['sl_high_veges']; echo '</td>
	<td  width="100">'; echo $ftu['sl_scour']; echo '</td>
	<td  width="100">'; echo $ftu['sl_shoulder']; echo '</td>
	<td  width="100">'; echo $ftu['sl_rutting']; echo '</td>
	<td  width="100">'; $ans = $ftu['sl_pothole_area'] * $ftu['sl_pothole_depth'] * $ftu['sl_pothole_nos']; echo $ans; echo '</td>
	<td  width="100">'; echo $ftu['sl_cause']; echo '</td>
	</tr>';}
	echo "<tr style='text-align:centre'><td style='text-align:centre' colspan='10'><h4 >Carriage way</h4></td></tr>";
	echo '<tr>
	<td  width="100">date</td>
	<td width="100">loation to</td> 
	<td width="100">pavement type</td>
	<td  width="100">cracking</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Rutting (depth)</td>
	<td  width="100">heaving/shoving</td>
	<td  width="100">stripping/fretting</td>
	<td  width="100">bleeding</td>
	<td width="100">glazing</td>
	<td width="100">Edge damage</td>
	<td width="100">Wave</td>
	<td width="100">Obstruction</td>
    <td width="100">Spot failure of base course</td>
	<td width="100">loss of surface texture</td>
	<td width="100">joint settlement</td>
	<td  width="100">Cause of Defect</td>
	</tr>';
	$re = mysql_query($query);
	while($rst=mysql_fetch_array($re)){
     echo '<tr>
	<td  width="100">'; echo $rst['date']; echo '</td>
	<td  width="100">'; echo $rst['location_to']; echo '</td>
	<td  width="100">'; echo $rst['pavement_type']; echo '</td>
	<td  width="100">'; echo $rst['cw_cracking']; echo '</td>
	<td  width="100">'; $ans = $rst['cw_pothole_area'] * $rst['cw_pothole_depth'] * $rst['cw_pothole_nos']; echo $ans; echo '</td>
	<td  width="100">'; echo $rst['cw_rutting']; echo '</td>
	<td  width="100">'; echo $rst['cw_heaving']; echo '</td>
	<td  width="100">'; echo $rst['cw_stripping']; echo '</td>
	<td  width="100">'; echo $rst['cw_bleeding']; echo '</td>
	<td width="100">';  echo $rst['cw_glazing']; echo '</td> 
	<td width="100">'; echo $rst['cw_edge_damage']; echo '</td>
	<td width="100">'; echo $rst['cw_wave']; echo '</td> 
	<td width="100">'; echo $rst['cw_obstruction']; echo '</td>
	<td width="100">'; echo $rst['cw_spot']; echo '</td>
	<td width="100">';  echo $rst['cw_surface_texture']; echo '</td>
	<td width="100">'; echo $rst['cw_joint']; echo '</td>
	<td width="100">'; echo $rst['cw_cause']; echo '</td>

	</tr>';	
	}
	echo "<tr style='text-align:centre'><td style='text-align:centre' colspan='10'><h4 >Shoulder Right</h4></td></tr>";
	echo '<tr>
	<td  width="100">date</td>
	<td width="100">location to</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriageway step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>';
	 $res = mysql_query($query) or die('error'.mysql_error());
	  while($Resu = mysql_fetch_array($res)){
	  echo '<tr>
	 <td  width="100">'; echo $Resu['date']; echo '</td>
	 <td  width="100">'; echo $Resu['location_to']; echo '</td>
	 <td  width="100">'; echo $Resu['pavement_type']; echo '</td>
     <td  width="100">'; echo $Resu['sr_obstruction']; echo '</td>
	 <td  width="100">'; echo $Resu['sr_high_veges']; echo '</td>
	 <td  width="100">'; echo $Resu['sr_scour']; echo '</td>
	<td  width="100">'; echo $Resu['sr_shoulder']; echo '</td>
	<td  width="100">'; echo $Resu['sr_rutting']; echo '</td>
	<td  width="100">'; $ans = $Resu['sr_pothole_area'] * $Resu['sr_pothole_depth'] * $Resu['sr_pothole_nos']; echo $ans; echo '</td>
	<td  width="100">'; echo $Resu['sr_cause']; echo '</td>
	</tr>';
	   
	  }
	  echo "</table>";
	 }
}
?>

<button style=" 
     margin-left:40%;
     background-color: #3B5998; /* Green */
    border: 6;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;"
	onclick="window.print();">
     Print
	 </button>
</html>