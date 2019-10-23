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
	input{
	 
     
   
    border: 6;
   
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 12px;
	padding: 10px 24px;
	border-radius: 5px;
	
	}
	select{
	
	 border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;}
</style>

<div style = "margin-left: 15%; margin-right: 10%">
  <form method = "POST" action ="pr_do.php" >
       <table><thead></thead> 
	   <tr><td>inspection id</td>
	   <td><input type = "number" name = "inspectionid" placehold = "inspection id" required></td>
	   
      <td>location to:</td>
	   <td><input type = "text" name = "to" placehold = "Location to(m)"></td>
	  </tr>
	  <tr>
		  <td><label>Date:</label></td>
		  <td><input name="date" type="date" required></td>
	       <td> Pavement type:</td>
		  <td>	   <select name = "pavement">
				<option value = "concrete">Concrete</option>
				<option value = "asphalt">Asphalt Concrete </option>
				<option value = "Surface">Surface Dressing </option>
				<option value = "block">Block Paving </option></td>
		</tr>
     
		<tr><td colspan="4">shoulder(left side)<br>
		      Defects:</td><tr>
		  <tr>
		      <td>obstruction:</td>
			  <td> <input type = "text" name = "obstruction" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "obstruction1" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "obstruction2" placehold = "Obstruction" ></td>
			  </tr>
			 <tr>
			     <td>High Vegetation;</td>
				  <td><input type = "text" name = "high_veges" placehold = "High Vegetation" ></td>     
				   <td><input type = "text" name = "high_veges1" placehold = "High Vegetation" ></td>
				    <td><input type = "text" name = "high_veges2" placehold = "High Vegetation" ></td>
					</tr>
			 <tr>
			      <td>Scour:</td>
				  <td><input type = "text" name = "scour" placehold = "Scour" ></td>
				   <td><input type = "text" name = "scour1" placehold = "Scour" ></td>
				    <td><input type = "text" name = "scour2" placehold = "Scour" ></td>
					</tr>
			<tr>
			      <td>Shoulder:</td>
				   <td> <input type = "text" name = "shoulder" placehold = "Shoulder/Carriageway Step" ></td>
				    <td> <input type = "text" name = "shoulder1" placehold = "Shoulder/Carriageway Step" ></td>
					 <td> <input type = "text" name = "shoulder2" placehold = "Shoulder/Carriageway Step" ></td>
					 </tr>
			<tr>	
                  <td>Rutting:</td>			
				  <td><input type = "text" name = "rutting" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "rutting1" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "rutting2" placehold = "Rutting/Depression" ></td>
	      </tr>
          <tr> 
  		           <td><label>Pothole(A ):</label></td>
                  <td><input name="potholearea" type="number" placehold="Pothole area"></td>
                 <td>    <input name="potholedepth" type="number" placehold="Pothole depth"></td>
                  <td><input name="potholenos" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(d):</label></td>
                  <td><input name="potholearea1" type="number" placehold="Pothole area"></td>
                 <td>    <input name="potholedepth1" type="number" placehold="Pothole depth"></td>
                  <td><input name="potholenos1" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(nos):</label></td>
                  <td><input name="potholearea2" type="number" placehold="Pothole area"></td>
                 <td>    <input name="potholedepth2" type="number" placehold="Pothole depth"></td>
                  <td><input name="potholenos2" type="number" placehold="nos"></td>
			</tr>
			<tr>
			<td>Cause:</td>
		     <td><input type = "text" name = "cause" placehold = "Cause of Defect" ></td>
			  <td><input type = "text" name = "cause1" placehold = "Cause of Defect" ></td>
			   <td><input type = "text" name = "cause2" placehold = "Cause of Defect" ></td>
			   </tr>
		

	 
	 <tr><td colspan="4">Carriageway.<br> Defect:</td></tr>
	
		   <tr>
		        <td>cracking</td>
		        <td><input type = "text" name = "cracking" placehold = "cracking" ></td>
				<td><input type = "text" name = "cracking1" placehold = "cracking" ></td>
				<td><input type = "text" name = "cracking2" placehold = "cracking" ></td>
				</tr>
		  <tr>
		        <td>Heaving:</td>	
		         <td><input type = "text" name = "heaving" placehold = "Heaving/shoving" ></td>
				 <td><input type = "text" name = "heaving1" placehold = "Heaving/shoving" ></td>
				 <td><input type = "text" name = "heaving2" placehold = "Heaving/shoving" ></td>
				 </tr>
		  <tr>
                <td>Stripping:</td>		  
		        <td> <input type = "text" name = "stripping" placehold = "Stripping/Fretting" ></td>
				  <td> <input type = "text" name = "stripping1" placehold = "Stripping/Fretting" ></td>
				    <td> <input type = "text" name = "stripping2" placehold = "Stripping/Fretting" ></td>
					</tr>
		   <tr>
		        <td>bleeding</td>
		        <td><input type = "text" name = "bleeding" placehold = "Bleeding" ></td>
				<td><input type = "text" name = "bleeding1" placehold = "Bleeding" ></td>
				<td><input type = "text" name = "bleeding2" placehold = "Bleeding" ></td>
				</tr>
		     <tr>
			    <td>Rutting:</td>
		        <td><input type = "text" name = "rutting" placehold = "Rutting/Deformation(Depth)" ></td>
				<td><input type = "text" name = "rutting" placehold = "Rutting/Deformation(Depth)" ></td>
				<td><input type = "text" name = "rutting" placehold = "Rutting/Deformation(Depth)" ></td>
				</tr>
			  <tr> 
  		           <td><label>Pothole(A ):</label></td>
                  <td><input name="cwpotholearea" type="number" placehold="Pothole area"></td>
                 <td>    <input name="cwpotholedepth" type="number" placehold="Pothole depth"></td>
                  <td><input name="cwpotholenos" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(d ):</label></td>
                  <td><input name="cwpotholearea1" type="number" placehold="Pothole area"></td>
                 <td>    <input name="cwpotholedepth1" type="number" placehold="Pothole depth"></td>
                  <td><input name="cwpotholenos1" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole( nos):</label></td>
                  <td><input name="cwpotholearea2" type="number" placehold="Pothole area"></td>
                 <td>    <input name="cwpotholedepth2" type="number" placehold="Pothole depth"></td>
                  <td><input name="cwpotholenos2" type="number" placehold="nos"></td>
			</tr>	  
			<tr>
               <td>glazing</td>			
		       <td>  <input type = "text" name= "glazing" placehold = "Glazing"></td>
			   <td>  <input type = "text" name= "glazing1" placehold = "Glazing"></td>
			   <td>  <input type = "text" name= "glazing2" placehold = "Glazing"></td>
			   </tr>
			<tr>
			     <td>Edge damage:</td>
		         <td><input type = "text" name= "edge" placehold = "Edge Damage"></td>
				 <td><input type = "text" name= "edge1" placehold = "Edge Damage"></td>
				 <td><input type = "text" name= "edge2" placehold = "Edge Damage"></td>
				 </tr>
			<tr>
                <td>Wave:</td>			
		         <td><input type = "text" name= "wave" placehold = " wave"></td>
				  <td><input type = "text" name= "wave1" placehold = " wave"></td>
				   <td><input type = "text" name= "wave2" placehold = " wave"></td>
                        </tr>
             <tr>
                 <td>Obstruction:</td>			 
                 <td><input type = "text" name= "cwobstruction" placehold = "Obstruction"></td>
				 <td><input type = "text" name= "cwobstruction1" placehold = "Obstruction"></td>
				 <td><input type = "text" name= "cwobstruction2" placehold = "Obstruction"></td>
		        </tr>
			 <tr>
			     <td>base course:</td>
		          <td><input type = "text" name= "spot" placehold = "Spot Failure of Base Course"><br></td>
				  <td><input type = "text" name= "spot1" placehold = "Spot Failure of Base Course"><br></td>
				  <td><input type = "text" name= "spot2" placehold = "Spot Failure of Base Course"><br></td>
			</tr>
            <tr>
                <td>surface texture:</td>			
                <td><input type = "text" name= "texture" placehold = "Loss of Surface Texture"></td>
				<td><input type = "text" name= "texture1" placehold = "Loss of Surface Texture"></td>
				<td><input type = "text" name= "texture2" placehold = "Loss of Surface Texture"></td>
				</tr>
			<tr>
			     <td>Joints:</td>
		          <td> <input type = "text" name= "joint" placehold = "Joint Settlement"></td>
				    <td> <input type = "text" name= "joint1" placehold = "Joint Settlement"></td>
					  <td> <input type = "text" name= "joint2" placehold = "Joint Settlement"></td>
					  </tr>
		     <tr>
			     <td>cause</td>
		          <td><input type = "text" name = "ccause" placehold = "Cause of Defect" ></td>
				  <td><input type = "text" name = "ccause1" placehold = "Cause of Defect" ></td>
				  <td><input type = "text" name = "ccause2" placehold = "Cause of Defect" ></td>
				  </tr>
		
	 <tr><td colspan="4">shoulder(right side).<br>Defect:</td></tr>
		
	<tr>
		      <td>obstruction:</td>
			  <td> <input type = "text" name = "obstructionr" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "obstructionr1" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "obstructionr2" placehold = "Obstruction" ></td>
			  </tr>
			 <tr>
			     <td>High Vegetation;</td>
				  <td><input type = "text" name = "high_vegesr" placehold = "High Vegetation" ></td>     
				   <td><input type = "text" name = "high_vegesr1" placehold = "High Vegetation" ></td>
				    <td><input type = "text" name = "high_vegesr2" placehold = "High Vegetation" ></td>
					</tr>
			 <tr>
			      <td>Scour:</td>
				  <td><input type = "text" name = "scourr" placehold = "Scour" ></td>
				   <td><input type = "text" name = "scourr1" placehold = "Scour" ></td>
				    <td><input type = "text" name = "scourr2" placehold = "Scour" ></td>
					</tr>
			<tr>
			      <td>Shoulder:</td>
				   <td> <input type = "text" name = "shoulderr" placehold = "Shoulder/Carriageway Step" ></td>
				    <td> <input type = "text" name = "shoulderr1" placehold = "Shoulder/Carriageway Step" ></td>
					 <td> <input type = "text" name = "shoulderr2" placehold = "Shoulder/Carriageway Step" ></td>
					 </tr>
			<tr>	
                  <td>Rutting:</td>			
				  <td><input type = "text" name = "ruttingr" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "ruttingr1" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "ruttingr2" placehold = "Rutting/Depression" ></td>
	      </tr>
          <tr> 
  		           <td><label>Pothole(A ):</label></td>
                  <td><input name="potholearear" type="number" placehold="Pothole area"></td>
                 <td>    <input name="potholedepthr" type="number" placehold="Pothole depth"></td>
                  <td><input name="potholenosr" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(d):</label></td>
                  <td><input name="potholearear1" type="number" placehold="Pothole area"></td>
                 <td>    <input name="potholedepthr1" type="number" placehold="Pothole depth"></td>
                  <td><input name="potholenosr1" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(nos):</label></td>
                  <td><input name="potholearear2" type="number" placehold="Pothole area"></td>
                 <td>    <input name="potholedepthr2" type="number" placehold="Pothole depth"></td>
                  <td><input name="potholenosr2" type="number" placehold="nos"></td>
			</tr>
			<tr>
			<td>Cause:</td>
		     <td><input type = "text" name = "causer" placehold = "Cause of Defect" ></td>
			  <td><input type = "text" name = "causer1" placehold = "Cause of Defect" ></td>
			   <td><input type = "text" name = "causer2" placehold = "Cause of Defect" ></td>
			   </tr>
	 </fieldset>
	 <tr><td>Terrain:</td>
	 <td><select name = "terrain">
            <option value = "M">Mountainous</option>
		<option value = "R">Rolling </option>
		<option value = "H">Hilly </option>
		<option value = "F">Flat </option>
	 </select></td></tr></table>
	 <input type = "submit" name = "submit" value = "submit" style=" 
     
     background-color: #3B5998; /* Green */
    border: 6;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;">
	</form>	
