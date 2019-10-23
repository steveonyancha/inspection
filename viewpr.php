<table border='1'>
    <tr><thead>inspection detail form: <?php echo $intype; ?><br>Inspection ID:<?php echo $Result['inspectionId']; ?></thead>
	<thead><br>Shoulder Left<br></thead><tr>
	<tr>
	<td  width="100">date</td>
	<td width="100">from</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriageway step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>
	<?php $ft= mysql_query($query) or die('pr-error:'.mysql_error());
    ?>
	<?php while($ftu=mysql_fetch_array($ft)) { ?>
	   <tr>
	<td  width="100"><?php echo $ftu['date']; ?></td>
    <td  width="100"><?php echo $ftu['location_from']; ?></td>
	<td  width="100"><?php echo $ftu['pavement_type']; ?></td>
    <td  width="100"><?php echo $ftu['sl_obstruction']; ?></td>
	<td  width="100"><?php echo $ftu['sl_high_veges']; ?></td>
	<td  width="100"><?php echo $ftu['sl_scour']; ?></td>
	<td  width="100"><?php echo $ftu['sl_shoulder']; ?></td>
	<td  width="100"><?php echo $ftu['sl_rutting']; ?></td>
	<td  width="100"><?php $ans = $ftu['sl_pothole_area'] * $ftu['sl_pothole_depth'] * $ftu['sl_pothole_nos']; echo $ans; ?></td>
	<td  width="100"><?php echo $ftu['sl_cause']; ?></td>
	</tr>
		
		<?php} ?>
    <tr>carriage Width<br></thead></tr>
	<tr>
	<td  width="100">date</td>
	<td width="100">from</td> 
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
	</tr>
	<?php $re = mysql_query($query) or die('error:'.mysql_error());
    ?>
	<?php while($rst=mysql_fetch_array($re)){?>
	<tr>
	<td  width="100"><?php echo $rst['date']; ?></td>
	<td  width="100"><?php echo $rst['location_from']; ?></td>
	<td  width="100"><?php echo $rst['pavement_type']; ?></td>
	<td  width="100"><?php echo $rst['cw_cracking']; ?></td>
	<td  width="100"><?php $ans = $rst['cw_pothole_area'] * $rst['cw_pothole_depth'] * $rst['cw_pothole_nos']; echo $ans;? ></td>
	<td  width="100"><?php echo $rst['cw_rutting']; ?></td>
	<td  width="100"><?php echo $rst['cw_heaving']; ?></td>
	<td  width="100"><?php echo $rst['cw_stripping']; ?></td>
	<td  width="100"><?php echo $rst['cw_bleeding']; ?></td>
	<td width="100"><?php echo $rst['cw_glazing']; ?></td> 
	<td width="100"><?php echo $rst['cw_edge_damage']; ?></td>
	<td width="100"><?php echo $rst['cw_wave']; ?></td> 
	<td width="100"><?php echo $rst['cw_obstruction']; ?></td>
	<td width="100"><?php echo $rst['cw_spot']; ?></td>
	<td width="100"><?php echo $rst['cw_surface_texture']; ?></td>
	<td width="100"><?php echo $rst['cw_joint']; ?></td>
	<td width="100"><?php echo $rst['cw_cause']; ?></td>

	</tr>
	<?php }?>
    <tr><thead>Shoulder right<br></thead></tr>
	<tr>
	<td  width="100">date</td>
	<td width="100">from</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriageway step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>
	<?php $res = mysql_query($query) or die('error'.mysql_error());
    ?>
	<?php while($Resu = mysql_fetch_array($res)){?>
	   <tr>
	 <td  width="100"><?php echo $Resu['date']; ?></td>
	 <td  width="100"><?php echo $Resu['location_from']; ?></td>
	 <td  width="100"><?php echo $Resu['pavement_type']; ?></td>
     <td  width="100"><?php echo $Resu['sr_obstruction']; ?></td>
	 <td  width="100"><?php echo $Resu['sr_high_veges']; ?></td>
	 <td  width="100"><?php echo $Resu['sr_scour']; ?></td>
	<td  width="100"><?php echo $Resu['sr_shoulder']; ?></td>
	<td  width="100"><?php echo $Resu['sr_rutting']; ?></td>
	<td  width="100"><?php $ans = $Resu['sr_pothole_area'] * $Resu['sr_pothole_depth'] * $Resu['sr_pothole_nos']; echo $ans; ?></td>
	<td  width="100"><?php echo $Resu['sr_cause'];?></td>
	</tr>
	<?php}?>	
		
		</table>