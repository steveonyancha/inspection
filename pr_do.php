<?php
    include('database/config.php');
    extract($_POST);
   if(isset($_POST['submit'])){
$query = "INSERT INTO pr (inspectionId, location_to, date, pavement_type,sl_obstruction,sl_high_veges,sl_scour,sl_shoulder,sl_rutting,sl_pothole_area,sl_pothole_depth,sl_pothole_nos,sl_cause,cw_cracking,cw_pothole_area,cw_pothole_depth,cw_pothole_nos,cw_rutting,cw_heaving,cw_stripping,cw_bleeding,cw_glazing,cw_edge_damage,cw_wave,cw_obstruction,cw_spot,cw_surface_texture,cw_joint,cw_cause,sr_obstruction,sr_high_veges,sr_scour,sr_shoulder,sr_rutting,sr_pothole_area,sr_pothole_depth,sr_pothole_nos,sr_cause,terrain) VALUES ('$inspectionid', '$to',  '$date', '$pavement', '$obstruction', '$high_veges', '$scour', '$shoulder', '$rutting', '$potholearea', '$potholedepth', '$potholenos', '$cause', '$cracking', '$cwpotholearea', '$cwpotholedepth', '$cwpotholenos', '$rutting', '$heaving', '$stripping', '$bleeding', '$glazing', '$edge','$wave', '$cwobstruction', '$spot', '$texture', '$joint', '$ccause', '$obstructionr', '$high_vegesr', '$scourr', '$shoulderr', '$ruttingr', '$potholearear', '$potholedepthr', '$potholenosr', '$causer', '$terrain')";
     @$result = mysql_query($query)  or die('Error:-'.mysql_error());
    @$query1 = "INSERT INTO pr (inspectionId, location_to, date, pavement_type,sl_obstruction,sl_high_veges,sl_scour,sl_shoulder,sl_rutting,sl_pothole_area,sl_pothole_depth,sl_pothole_nos,sl_cause,cw_cracking,cw_pothole_area,cw_pothole_depth,cw_pothole_nos,cw_rutting,cw_heaving,cw_stripping,cw_bleeding,cw_glazing,cw_edge_damage,cw_wave,cw_obstruction,cw_spot,cw_surface_texture,cw_joint,cw_cause,sr_obstruction,sr_high_veges,sr_scour,sr_shoulder,sr_rutting,sr_pothole_area,sr_pothole_depth,sr_pothole_nos,sr_cause,terrain) VALUES ('$inspectionid', '$to',  '$date', '$pavement', '$obstruction1', '$high_veges1', '$scour1', '$shoulder1', '$rutting1', '$potholearea1', '$potholedepth1', '$potholenos1', '$cause1', '$cracking1', '$cwpotholearea1', '$cwpotholedepth1', '$cwpotholenos1', '$rutting1', '$heaving1', '$stripping1', '$bleeding1', '$glazing1', '$edge1','$wave1', '$cwobstruction1', '$spot1', '$texture1', '$joint1', '$ccause1', '$obstructionr1', '$high_vegesr1', '$scourr1', '$shoulderr1', '$ruttingr1', '$potholearear1', '$potholedepthr1', '$potholenosr1', '$causer1', '$terrain1')";
     @$result1 = mysql_query($query1)  or die('Error1:-'.mysql_error());
@$query2 = "INSERT INTO pr (inspectionId, location_to, date, pavement_type,sl_obstruction,sl_high_veges,sl_scour,sl_shoulder,sl_rutting,sl_pothole_area,sl_pothole_depth,sl_pothole_nos,sl_cause,cw_cracking,cw_pothole_area,cw_pothole_depth,cw_pothole_nos,cw_rutting,cw_heaving,cw_stripping,cw_bleeding,cw_glazing,cw_edge_damage,cw_wave,cw_obstruction,cw_spot,cw_surface_texture,cw_joint,cw_cause,sr_obstruction,sr_high_veges,sr_scour,sr_shoulder,sr_rutting,sr_pothole_area,sr_pothole_depth,sr_pothole_nos,sr_cause,terrain) VALUES ('$inspectionid', '$to',  '$date', '$pavement', '$obstruction', '$high_veges', '$scour', '$shoulder', '$rutting', '$potholearea', '$potholedepth', '$potholenos', '$cause', '$cracking', '$cwpotholearea', '$cwpotholedepth', '$cwpotholenos', '$rutting', '$heaving', '$stripping', '$bleeding', '$glazing', '$edge','$wave', '$cwobstruction', '$spot', '$texture', '$joint', '$ccause', '$obstructionr', '$high_vegesr', '$scourr', '$shoulderr', '$ruttingr', '$potholearear', '$potholedepthr', '$potholenosr', '$causer', '$terrain')";
    @$result2 = mysql_query($query2)  or die('Error2:-'.mysql_error());
	if((@$result && $result2) && ($result && $result1)){
        
        echo "<script>
                 alert('Data successdully submitted');
				 history.back();
                 </script>";
     }
else{
    
    die("error".mysql_error());
}
     }
?>



