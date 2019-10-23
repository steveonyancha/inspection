<?php
     include('database/config.php');
  
     extract($_POST);
    #echo "$inspectionid";
     if(isset($_POST['submit'])){
   $query = "INSERT INTO ur (inspectionId, location_to, date, pavement_type, sl_obstruction, sl_high_veges, sl_scour, sl_shoulder, sl_rutting, sl_pothole_width, sl_pothole_depth,  sl_pothole_nos, sl_cause, cw_loss_camber, cw_pothole_width, cw_pothole_depth, cw_pothole_nos, cw_rutting, cw_obstruction, cw_spot, cw_erosion_gulley, cw_loss_of_graveld, cw_cause, sr_obstruction, sr_high_veges, sr_scour, sr_shoulder, sr_rutting, sr_pothole_width, sr_pothole_depth, sr_pothole_nos, sr_cause, terrain) VALUES('$inspectionid', '$to', '$date', '$pavement', '$slobstruction', '$slhighveges', '$slscour', '$slshoulder', '$slrutting', '$slpotholearea', '$slpotholedepth', '$slpotholenos', '$slcause', '$cwlosscamber', '$cwpotholearea', '$cwpotholedepth', '$cwpotholenos', '$cwrutting', '$cwobstruction', '$cwspot', '$cwerosiongulley', '$cwgravel',' $cwcause', '$srobstruction', '$srhighveges', '$srscour', '$srshoulder', '$srrutting', '$srpotholearea', '$srpotholedepth', '$srpotholenos', '$srcause','$terrain')";
     $result = mysql_query($query) or die('Error'.mysql_error());
   $query1 = "INSERT INTO ur (inspectionId, location_to, date, pavement_type, sl_obstruction, sl_high_veges, sl_scour, sl_shoulder, sl_rutting, sl_pothole_width, sl_pothole_depth,  sl_pothole_nos, sl_cause, cw_loss_camber, cw_pothole_width, cw_pothole_depth, cw_pothole_nos, cw_rutting, cw_obstruction, cw_spot, cw_erosion_gulley, cw_loss_of_graveld, cw_cause, sr_obstruction, sr_high_veges, sr_scour, sr_shoulder, sr_rutting, sr_pothole_width, sr_pothole_depth, sr_pothole_nos, sr_cause, terrain) VALUES('$inspectionid', '$to', '$date', '$pavement', '$slobstruction1', '$slhighveges1', '$slscour1', '$slshoulder1', '$slrutting1', '$slpotholearea1', '$slpotholedepth1', '$slpotholenos1', '$slcause1', '$cwlosscamber', '$cwpotholearea1', '$cwpotholedepth', '$cwpotholenos', '$cwrutting1', '$cwobstruction1', '$cwspot1', '$cwerosiongulley1', '$cwgravel1',' $cwcause1', '$srobstruction1', '$srhighveges1', '$srscour1', '$srshoulder1', '$srrutting1', '$srpotholearea1', '$srpotholedepth1', '$srpotholenos1', '$srcause1','$terrain1')" ;
   $result1 = mysql_query($query1) or die('Error 2:'.mysql_error());
      $query2 = "INSERT INTO ur (inspectionId, location_to, date, pavement_type, sl_obstruction, sl_high_veges, sl_scour, sl_shoulder, sl_rutting, sl_pothole_width, sl_pothole_depth,  sl_pothole_nos, sl_cause, cw_loss_camber, cw_pothole_width, cw_pothole_depth, cw_pothole_nos, cw_rutting, cw_obstruction, cw_spot, cw_erosion_gulley, cw_loss_of_graveld, cw_cause, sr_obstruction, sr_high_veges, sr_scour, sr_shoulder, sr_rutting, sr_pothole_width, sr_pothole_depth, sr_pothole_nos, sr_cause, terrain) VALUES('$inspectionid', '$to', '$date', '$pavement', '$slobstruction2', '$slhighveges2', '$slscour2', '$slshoulder2', '$slrutting2', '$slpotholearea2', '$slpotholedepth2', '$slpotholenos2', '$slcause2', '$cwlosscamber2', '$cwpotholearea2', '$cwpotholedepth2', '$cwpotholenos2', '$cwrutting2', '$cwobstruction2', '$cwspot2', '$cwerosiongulley2', '$cwgravel2',' $cwcause2', '$srobstruction2', '$srhighveges2', '$srscour2', '$srshoulder2', '$srrutting2', '$srpotholearea2', '$srpotholedepth2', '$srpotholenos2', '$srcause2','$terrain2')";
    $result2 = mysql_query($query2) or die('Error 3'.mysql_error());
     if(($result && $result2) && ($result && $result1)){
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
 INTRODUCING 
ELECTRONIC 
VOTING: ESSENTIAL 
CONSIDERATIONS