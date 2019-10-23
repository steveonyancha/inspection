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
</style><div style = "margin-left:20% ;">
 <form method = "POST" action = "s_do.php">
     <table>
       <tr>
           <td width="200"><label><h3>Select Inspection Form:<h3></label></td>
          <td width="100"><select name="frm" colspan="100" style=" 
     
    /* background-color: #3B5998;  Green */
    border: 6;
    
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;" >
              <option value="form_pr"><h4>Form PR</h4></option>
	              <option value="form_ur"><h4>Form UR</h4></option>
	 <!-- <option value="form_dss">form DSS</option>
	  <option value="form_urb">form URB</option>
	  <option value="form_rf">form RF</option>-->
              </select></td>
   <!--<img src="images/frmselect.png" height="5%" widtdh="5%" onfocus="/*display informaton*/"><em>form type info:</em>-->
           <td width="100">      <input type="submit" value="submit" name="submit" style=" 
     
     background-color: #3B5998; /* Green */
    border: 6;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;"></td>
         </tr>
    </table>
         <p><h3>* Note:</h3>
             </p>
     <p> <strong>Form PR</strong>  : Paved Roads, Road Condition Survey for Paved Roads(Routine)</p>
     <p> <strong> Form UR</strong>   : Unpaved Roads, Road Condition Survey for Unpaved(Routine)</p>  
    </form>
    
   </div>
