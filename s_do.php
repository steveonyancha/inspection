<?php

$pr = $_POST['frm'];

if(isset($_POST['submit']))
{
	if($pr == 'form_pr'){
	   #open pr page
	   header("Location:user.php?pr");
	}
	elseif($pr == 'form_ur'){
	   echo "<script language = JavaScript>
	   
	         <script>";
        header("Location:user.php?ur");
       
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