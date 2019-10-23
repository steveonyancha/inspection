    <html>
  #page for form pr data entry point
  <body>
    <form method = "POST" action ="formpr.php" >
      #the necessary information	  
	   <input type = "text" name = "district" placeholder = "District">
	   <input type = "text" name = "road_no" placeholder = "Road No."><br>
	   <input type = "text" name = "location" placeholder = "Location"><br>
	   <input type = "text" name = "class" placeholder = "Road Class"><br>
	   <input type = "text" name = "inspector" placeholder = "Inspector Name"><br>
	   Pavement type:
	    <select name = "pavement">
	    <option value = "concrete">Concrete</option>
		<option value = "asphalt">Asphalt Concrete </option>
		<option value = "Surface">Surface Dressing </option>
		<option value = "block">Block Paving </option>
     <fieldset>
		<legend>shoulder(left side)</legend>
		<fieldset>
		  <legend>defects</legend>
		  #o.1
		  <input type = "text" name = "obstruction" placeholder = "Obstruction" >
		  <input type = "text" name = "high_veges" placeholder = "Hig Vegetation" ><br>
		  <input type = "text" name = "scour" placeholder = "Scour" ><br>
		  <input type = "text" name = "shoulder" placeholder = "Shoulder/Carriageway Step" ><br>
		  <input type = "text" name = "rutting" placeholder = "Rutting/Depression" ><br>
		  <input type = "text" name = "pothole" placeholder = "Pothole(Area x Depth x Nos)" ><br>
		  <input type = "text" name = "cause" placeholder = "Cause of Defect" ><br>
		</fieldset>
	 </fieldset>
	 <fieldest>
	 <legend>Carriageway</legend>
		<fieldset>
		  <legend>defects</legend>
		  #o.1
		  <input type = "text" name = "cracking" placeholder = "Cracking" >
		  <input type = "text" name = "heaving" placeholder = "Heaving/shoving" ><br>
		  <input type = "text" name = "stripping" placeholder = "Stripping/Fretting" ><br>
		  <input type = "text" name = "bleeding" placeholder = "Bleeding" ><br>
		  <input type = "text" name = "rutting" placeholder = "Rutting/Deformation(Depth)" ><br>
		  <input type = "text" name = "cpothole" placeholder = "Pothole(Area x Depth x Nos)" ><br>
		  <input type = "text" name= "Glazing" placeholder = "Glazing"><br>
		  <input type = "text" name= "edge" placeholder = "Edge Damage"><br>
		  <input type = "text" name= "obstruction_c" placeholder = "Obstruction"><br>
		  <input type = "text" name= "spot" placeholder = "Spot Failure of Base Course"><br>
          <input type = "text" name= "texture" placeholder = "Loss of Surface Texture"><br>
		  <input type = "text" name= "joint" placeholder = "Joint Settlement"><br>
		  <input type = "text" name = "ccause" placeholder = "Cause of Defect" ><br>
		</fieldset>
	 </fieldset>
	 
	 <fieldset>
	 <legend>shoulder(righ side)</legend>
		<fieldset>
		  <legend>defects</legend>
		  #o.1
		  <input type = "text" name = "obstructionr" placeholder = "Obstruction" >
		  <input type = "text" name = "high_vegesr" placeholder = "Higg Vegetation" ><br>
		  <input type = "text" name = "scourr" placeholder = "Scour" ><br>
		  <input type = "text" name = "shoulderr" placeholder = "Shoulder/Carriageway Step" ><br>
		  <input type = "text" name = "ruttingr" placeholder = "Rutting/Depression" ><br>
		  <input type = "text" name = "potholer" placeholder = "Pothole(Area x Depth x Nos)" ><br>
		  <input type = "text" name = "causer" placeholder = "Cause of Defect" ><br>
		</fieldset>
	 </fieldset>
	 <select name = "terrain">
            <option value = "M">Mountainous</option>
		<option value = "R">Rolling </option>
		<option value = "H">Hilly </option>
		<option value = "F">Flat </option>
	 </select><br>
	 <input type = "submit" name = "submit" value = "submit">
	</form>	
  </body>
</html>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        #establishing a connection to the dbms and selecting the database
        include 'dbconnect.php';
        
        #assing the posted variable value to script variable.
        #shoulder left
        $slo1 = $_POST['obstruction'];
        $slh1 = $_POST['high_veges'];
        $sls1 = $_POST['scour'];
        $slsh1 = $_POST['shoulder'];
        $slr1 = $_POST['rutting'];
        $slp1 = $POST['pothole'];
        $slc1 = $_post['cause'];
        
        #carriage way.
        $cc1 = $_post['cracking'];
        $ch1 = $_post['heaving'];
        $cs1 = $_post['stripping'];
        $cb1 = $_POST['bleeding'];
        $cr1 = $_POST['rutting'];
        $cp1 = filter_input($_POST['cpothole']);
        $cg1 = $_POST['glazing'];
        $ce1 = $_post['edge'];
        $co1 = $_POST['obstruction_c'];
        $cs1 = $_post['spot'];
        $ct1 = $_post['texture'];
        $cj1 = $_post['joint'];
        $ccc1 = $_post['ccause'];
        
        #shoulder right
         $sro1 = $_POST['obstructionr'];
        $srh1 = $_POST['high_vegesr'];
        $srs1 = $_POST['scourr'];
        $srsh1 = $_POST['shoulderr'];
        $srr1 = $_POST['ruttingr'];
        $srp1 = $POST['potholer'];
        $src1 = $_post['causer'];
        
        if(isset($_POST['submit'])){
            if( $slo1 || $slh1 || $sls1 || $slsh1 || $slr1 || $slp1 || $slc1 || 
                $cc1 || $ch1 || $cs1 || $cb1 || $cr1 || $cp1 || $cg1 || $ce1 ||
                $co1 || $cs1 || $ct1 || $cj1 || $ccc1 ||$sro1 ||$srh1 || $srs1 ||
                $srsh1 || $srr1 ||$srp1 ||$src1 ){
                 $query = "INSERT INTO form_pr  VALUE($slo1,$slh1,$sls1,$slsh1,$slr1, 
                                                     $slp1,$slc1,$cc1,$ch1,$cs1,$cb1,
                                                     $cr1,$cp1,$cg1,$ce1,$co1,$cs1,
                                                     $ct1,$cj1,$ccc1,$sro1,$srh1,$srs1,
                                                     $srsh1,$srr1,$srp1,$src1;
               $result = mysql_query($query);
                   if(!$reusult){
                       die('cannot submit data'.mysql_error());
                       }
                       else{
                           echo "<script language='JavaScript'>
                                 alert('data successfuly submitted');
                                 history.back();"                       
}                       
}           
}
        ?>
    </body>
</html>
