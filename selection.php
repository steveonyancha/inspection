#script to handle the from selection
#in every account there are specific task opening the task leads to certain field.
<?php

$pr = $_POST['form'];

if(isset($_POST['submit']))
{
	if($pr == 'form_pr'){
	   #open pr page
	   echo "<script language = JavaScript>
	   
	         <script>";
	}
	elseif($pr == 'form_ur'){
	   echo "<script language = JavaScript>
	   
	         <script>";
	}
	elseif($pr == 'form_dss'){
	  #dss page
	  echo "<script language = JavaScript>
	   
	         <script>";
	}
	elseif($pr == 'form_urb'){
	  #urb form page
	  echo "<script language = JavaScript>
	   
	         <script>";
	}
	else{
	 #rf page
	 echo "<script language = JavaScript>
	   
	         <script>";
	}
}
?>

<body>
   <p><strong>Select the required form:</strong></p>
   <form method = "post" action = "s_do.php">
   <select name="form">
      <option value="form_pr">form PR</option>
	  <option value="form_ur">form UR</option>
	  <option value="form_dss">form DSS</option>
	  <option value="form_urb">form URB</option>
	  <option value="form_rf">form RF</option>
   </select>
#help facility.
   <img src="images/frmselect.png" height="5%" widtdh="5%" onfocus="/*display informaton*/"><em>form type info:</em>
   <input type="submit" value="submit" name="submit">
   </form>
</body>