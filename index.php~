<?php session_start();
//include 'config.php';

// Check if the user is logged in

if(!isset($_SESSION['username']))
{

header("Location: login.php");
exit;
}
if($_SESSION['priv'] == "user"){
    echo $_SESSION['priv'];
	header("Location: user.php");
	exit;
}
?>
<?php

include("database/config.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/road.png" />

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#as').load('backup.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<div id="as"></div>


 <!--back up-->
  
  <!--Script top is process to add-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN HOME</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
	

</head>

<script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.fixedMenu.js"></script>
        <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
        <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>
      
        <script src="js/organictabs.jquery.js"></script>


</head>

<body>

<div class="header">
 <h2 style="margin-left:15%; color:white; margin-top:0">Road Inspection Software Tool</h2> 
</div>
<?php include('menu.php'); ?>
<!-- <div style="width:100%; background:#3B5998; border: #000 1px solid;"></div>
--><div class="wrapper">
<div class="head">
<div class="head_title">

<?php if(isset($_GET['searchBooks'])){ ?>Search Books<?php } ?>
<?php if(isset($_GET['addUser'])){ ?> Add User<?php } ?>
<?php if(isset($_GET['searchUser'])){ ?>Search User<?php } ?>
<?php if(isset($_GET['addtask'])){ ?>Add Task<?php } ?>
<?php if(isset($_GET['task'])){ ?>View Task<?php } ?>




</div>
</div>
<div class="body">

<?php
if(isset($_GET['addUser'])){
	 include('addUser.php'); 
	}
elseif(isset($_GET['searchUser'])){
	 include('searchUser.php'); 
	}
elseif(isset($_GET['addtask'])){
	 include('start.php'); 
	}
	elseif(isset($_GET['task'])){
	 include('viewtask.php'); 
	}
	/*elseif(isset($_GET['delete'])){
	 include('del.php'); 
	}*/
	
/*----------------------------------------------*/
	
	
	
/*----------------------------------------------*/
	else{ ?>
<center><br><br>
<h4>Welcome to Road Inspection Software tool for kenyan Road <b>Admin Home</b></h4>
<img src="admin.jpg" height="300" width="600"> 
		</center><?php }

 ?>

    </div>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot"> 
</div>
<div class="rightfoot"></div>
</div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>

    <?php  ?>
