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
    legend{
        font-display: block;
    }
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
   <form  method="post" action="ur_do.php">
         <fieldset>
         <table><thead></thead> 
	   <tr><td>inspection id</td>
	   <td><input type = "number" name = "inspectionid" placehold = "inspection id" required></td>
	  
      <td>location to:</td>
	   <td><input type = "text" name = "to" placehold = "Location to"></td>
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
		
             <tr><td colspan="4">Shoulder Left:<br>Defect:</td>

			 
               <tr>
		      <td>obstruction:</td>
			  <td> <input type = "text" name = "slobstruction" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "slobstruction1" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "slobstruction2" placehold = "Obstruction" ></td>
			  </tr>
			 <tr>
			     <td>High Vegetation;</td>
				  <td><input type = "text" name = "slhighveges" placehold = "High Vegetation" ></td>     
				   <td><input type = "text" name = "slhighveges1" placehold = "High Vegetation" ></td>
				    <td><input type = "text" name = "slhighveges2" placehold = "High Vegetation" ></td>
					</tr>
			 <tr>
			      <td>Scour:</td>
				  <td><input type = "text" name = "slscour" placehold = "Scour" ></td>
				   <td><input type = "text" name = "slscour1" placehold = "Scour" ></td>
				    <td><input type = "text" name = "slscour2" placehold = "Scour" ></td>
					</tr>
			<tr>
			      <td>Shoulder:</td>
				   <td> <input type = "text" name = "slshoulder" placehold = "Shoulder/Carriageway Step" ></td>
				    <td> <input type = "text" name = "slshoulder1" placehold = "Shoulder/Carriageway Step" ></td>
					 <td> <input type = "text" name = "slshoulder2" placehold = "Shoulder/Carriageway Step" ></td>
					 </tr>
			<tr>	
                  <td>Rutting:</td>			
				  <td><input type = "text" name = "slrutting" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "slrutting1" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "slrutting2" placehold = "Rutting/Depression" ></td>
	      </tr>
          <tr> 
  		           <td><label>Pothole(A ):</label></td>
                  <td><input name="slpotholearea" type="number" placehold="Pothole area"></td>
                 <td>    <input name="slpotholedepth" type="number" placehold="Pothole depth"></td>
                  <td><input name="slpotholenos" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(d):</label></td>
                  <td><input name="slpotholearea1" type="number" placehold="Pothole area"></td>
                 <td>    <input name="slpotholedepth1" type="number" placehold="Pothole depth"></td>
                  <td><input name="slpotholenos1" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(nos):</label></td>
                  <td><input name="slpotholearea2" type="number" placehold="Pothole area"></td>
                 <td>    <input name="slpotholedepth2" type="number" placehold="Pothole depth"></td>
                  <td><input name="slpotholenos2" type="number" placehold="nos"></td>
			</tr>
			<tr>
			<td>Cause:</td>
		     <td><input type = "text" name = "slcause" placehold = "Cause of Defect" ></td>
			  <td><input type = "text" name = "slcause1" placehold = "Cause of Defect" ></td>
			   <td><input type = "text" name = "slcause2" placehold = "Cause of Defect" ></td>
			   </tr>
              
			    <tr> <td colspan ="4">carriage way<br>Defect:</td></tr>
			  
          <tr>
		        <td>loss chamber:</td>
		        <td><input type = "text" name = "cwlosscamber" placehold = "cracking" ></td>
				<td><input type = "text" name = "cwlossamber1" placehold = "cracking" ></td>
				<td><input type = "text" name = "cwlosscamber2" placehold = "cracking" ></td>
				</tr>
		
			    <td>Rutting:</td>
		        <td><input type = "text" name = "cwrutting" placehold = "Rutting/Deformation(Depth)" ></td>
				<td><input type = "text" name = "cwrutting1" placehold = "Rutting/Deformation(Depth)" ></td>
				<td><input type = "text" name = "cwrutting2" placehold = "Rutting/Deformation(Depth)" ></td>
				</tr>
			  <tr> 
  		           <td><label>Pothole(A x d x nos):</label></td>
                  <td><input name="cwpotholearea" type="number" placehold="Pothole area"></td>
                 <td>    <input name="cwpotholedepth" type="number" placehold="Pothole depth"></td>
                  <td><input name="cwpotholenos" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(A x d x nos):</label></td>
                  <td><input name="cwpotholearea1" type="number" placehold="Pothole area"></td>
                 <td>    <input name="cwpotholedepth1" type="number" placehold="Pothole depth"></td>
                  <td><input name="cwpotholenos1" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(a x d x nos):</label></td>
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
                 <td>Obstruction:</td>			 
                 <td><input type = "text" name= "cwobstruction" placehold = "Obstruction"></td>
				 <td><input type = "text" name= "cwobstruction1" placehold = "Obstruction"></td>
				 <td><input type = "text" name= "cwobstruction2" placehold = "Obstruction"></td>
		        </tr>
			 <tr>
			     <td>spot:</td>
		          <td><input type = "text" name= "cwspot" placehold = "Spot Failure of Base Course"><br></td>
				  <td><input type = "text" name= "cwspot1" placehold = "Spot Failure of Base Course"><br></td>
				  <td><input type = "text" name= "cwspot2" placehold = "Spot Failure of Base Course"><br></td>
			</tr>
            <tr>
                <td>erosion gulley:</td>			
                <td><input type = "text" name= "cwerosiongulley" placehold = "Loss of Surface Texture"></td>
				<td><input type = "text" name= "cwerosiongulley1" placehold = "Loss of Surface Texture"></td>
				<td><input type = "text" name= "cwerosiongulley2" placehold = "Loss of Surface Texture"></td>
				</tr>
			<tr>
			     <td>loss of gravel:</td>
		          <td> <input type = "text" name= "cwgravel" placehold = "Joint Settlement"></td>
				    <td> <input type = "text" name= "cwgravel1" placehold = "Joint Settlement"></td>
					  <td> <input type = "text" name= "cwgravel2" placehold = "Joint Settlement"></td>
					  </tr>
		     <tr>
			     <td>cause</td>
		          <td><input type = "text" name = "cwcause" placehold = "Cause of Defect" ></td>
				  <td><input type = "text" name = "cwcause1" placehold = "Cause of Defect" ></td>
				  <td><input type = "text" name = "cwcause2" placehold = "Cause of Defect" ></td>
				  </tr>
      
	           <tr><td colspan="4"> Shoulder Left:<br>Defect:</td></tr>

		  
               <tr>
		      <td>obstruction:</td>
			  <td> <input type = "text" name = "srobstruction" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "srobstruction1" placehold = "Obstruction" ></td>
			  <td> <input type = "text" name = "srobstruction2" placehold = "Obstruction" ></td>
			  </tr>
			 <tr>
			     <td>High Vegetation;</td>
				  <td><input type = "text" name = "srhighveges" placehold = "High Vegetation" ></td>     
				   <td><input type = "text" name = "srhighveges1" placehold = "High Vegetation" ></td>
				    <td><input type = "text" name = "srhighveges2" placehold = "High Vegetation" ></td>
					</tr>
			 <tr>
			      <td>Scour:</td>
				  <td><input type = "text" name = "srscour" placehold = "Scour" ></td>
				   <td><input type = "text" name = "srscour1" placehold = "Scour" ></td>
				    <td><input type = "text" name = "srscour2" placehold = "Scour" ></td>
					</tr>
			<tr>
			      <td>Shoulder:</td>
				   <td> <input type = "text" name = "srshoulder" placehold = "Shoulder/Carriageway Step" ></td>
				    <td> <input type = "text" name = "srshoulder1" placehold = "Shoulder/Carriageway Step" ></td>
					 <td> <input type = "text" name = "srshoulder2" placehold = "Shoulder/Carriageway Step" ></td>
					 </tr>
			<tr>	
                  <td>Rutting:</td>			
				  <td><input type = "text" name = "srrutting" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "srrutting1" placehold = "Rutting/Depression" ></td>
				   <td><input type = "text" name = "srrutting2" placehold = "Rutting/Depression" ></td>
	      </tr>
          <tr> 
  		           <td><label>Pothole(A x d x nos):</label></td>
                  <td><input name="srpotholearea" type="number" placehold="Pothole area"></td>
                 <td>    <input name="srpotholedepth" type="number" placehold="Pothole depth"></td>
                  <td><input name="srpotholenos" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(A x d x nos):</label></td>
                  <td><input name="srpotholearea1" type="number" placehold="Pothole area"></td>
                 <td>    <input name="srpotholedepth1" type="number" placehold="Pothole depth"></td>
                  <td><input name="srpotholenos1" type="number" placehold="nos"></td>
			</tr>
			<tr> 
  		           <td><label>Pothole(a x d x nos):</label></td>
                  <td><input name="srpotholearea2" type="number" placehold="Pothole area"></td>
                 <td>    <input name="srpotholedepth2" type="number" placehold="Pothole depth"></td>
                  <td><input name="srpotholenos2" type="number" placehold="nos"></td>
			</tr>
			<tr>
			<td>Cause:</td>
		     <td><input type = "text" name = "srcause" placehold = "Cause of Defect" ></td>
			  <td><input type = "text" name = "srcause1" placehold = "Cause of Defect" ></td>
			   <td><input type = "text" name = "srcause2" placehold = "Cause of Defect" ></td>
			   </tr>
          </fieldset>
         <tr><td>Terrain:</td>
	 <td><select name = "terrain">
            <option value = "M">Mountainous</option>
		<option value = "R">Rolling </option>
		<option value = "H">Hilly </option>
		<option value = "F">Flat </option>
	 </select></td>
	  <td><select name = "terrain1">
            <option value = "M">Mountainous</option>
		<option value = "R">Rolling </option>
		<option value = "H">Hilly </option>
		<option value = "F">Flat </option>
	 </select></td>
	  <td><select name = "terrain2">
            <option value = "M">Mountainous</option>
		<option value = "R">Rolling </option>
		<option value = "H">Hilly </option>
		<option value = "F">Flat </option>
	 </select></td>
	 </tr></table>
     </fieldset>
    <input name="submit" type="submit" value="submit" style=" 
     
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
    <input type= "reset" value="reset"
	style=" 
     
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

 