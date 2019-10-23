<?php session_start();
//include 'config.php';

// Check if the user is logged in

if(!isset($_SESSION['username']))
{

header("Location: welcome.php");
exit;
}

?>
<?php

include("database/config.php");
?>
<?php

include("database/config.php");
     $username = $_SESSION['username'];
     $query = "SELECT id FROM tbusers WHERE fname='$username'";
     $result = mysqli_query($link,$query) or die('Error:-'.mysqli_error($link));
     $Result = mysqli_fetch_array($result);
     $id = $Result['id'];
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
function (
{
$('#as').load('backup.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

</script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<div id="as"></div>


 <!--back up-->

  <!--Script top is process to add-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USER HOME</title>
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
<?php include('umenu.php'); ?>
<!-- <div style="width:100%; background:#3B5998; border: #000 1px solid;"></div>
--><div class="wrapper">
<div class="head">
<div class="head_title">

<?php if(isset($_GET['searchBooks'])){ ?>Search Books<?php } ?>
<?php if(isset($_GET['selectform'])){ ?>Form Selection<?php } ?>
<?php if(isset($_GET['view'])){ ?>view<?php } ?>
<?php if(isset($_GET['pr'])){ ?>Paved Road Survey<?php } ?>
<?php if(isset($_GET['ur'])){ ?>UnPaved Road Survey<?php } ?>
<?php if(isset($_GET['works'])){ ?>How it works?<?php } ?>
<?php if(isset($_GET['change'])){ ?>Change Password<?php } ?>


</div>
</div>
<div class="body">

<?php
if(isset($_GET['start'])){
	 include('start.php');
	}
elseif(isset($_GET['selectform'])){
	 include('sform.php');
	}
    elseif(isset($_GET['view'])){
	 include('view.php');
	}
    elseif(isset($_GET['pr'])){
	 include('pr.php');
	}
    elseif(isset($_GET['ur'])){
	 include('ur.php');
	}
	elseif(isset($_GET['works'])){
	 include('working.php');
	}
	elseif(isset($_GET['change'])){
	 include('change.php');
	}


/*----------------------------------------------*/



/*----------------------------------------------*/
	else{ ?>
             <div style="margin-left:10%">
                 <center><p><b>Welcome to Road inspection Software tool,<br> the main purpose of this application
       sending road survey detail to the server</b></p></center>
    <hr style="margin-right:10%">
   <p>Task:<br>
     <?php
         $que="SELECT * FROM road_info WHERE id='$id'";
         $res=mysqli_query($link,$que) or die('error:'.mysqli_error($link));
         $Row = mysqli_fetch_assoc($res);

            ?>

       <!--<hr style="margin-left:0%;margin-right:20%">-->

	   <?php
	include('database/config.php');
        $q="SELECT * FROM road_info WHERE id='$id'";
         $rs=mysqli_query($link,$q) or die('error:'.mysqli_error($link));

		 if(mysqli_num_rows($rs)==0){
		     echo "<h4>No task assigned</h4>";

			}
			else{
           while($row=mysqli_fetch_array($rs)){
	        ?>

<table style="text-align:center;">
            <tr>
               <td width="100"><b>Inspection ID</b></td>
               <td width="100"><b>Road No</b></td>
               <td width="100"><b>Road class</b></td>
               <td width="100"><b>District</b></td>
               <td width="100"><b>Inspection type</b></td>
               <td width="100"><b>begin</b></td>
               <td width="100"><b>end</b></td>

           </tr>

          <tr bgcolor="#E8EDFF" align="center" class="hr" height="25">
            <td width="100"><?php echo $row['inspectionId'];?></td>
            <td  width="100"><?php echo $row['roadNo']; ?></td>
            <td width="100"><?php echo $row['road_class']; ?></td>
              <td width="100"><?php echo $row['district']; ?></td>
              <td width="100"><?php echo $row['inspection_type']; ?></td>
              <td width="100"><?php echo $row['begin']; ?></td>
              <td width="100"><?php echo $row['end']; ?></td>
          </tr>

<tr height="25">
<td colspan="6">
</td>
</tr>
</table>

       <!--<p>Amount of work done:</p>-->
       <?php
           $tb = $row['inspection_type'];
        $inspection_id = $row['inspectionId'];
           $dis="select max(location_to) from $tb where inspectionId = '$inspection_id'";

           $resu = mysqli_query($link,$dis) or die('error:'.mysqli_error($link));
           $resu = mysqli_fetch_array($resu);
           $far = $resu[0];
		   echo "<strong>Distance Inspected(metres):</strong>";echo $far;
          if($far==0){
             echo "<p style='color:yellow'>new task: 0% completed</p>";
         }

		  else{
		 $perc = ($far/$row['distance'])*100;
		 echo "<br><b>Amount of task completed(percentage):</b>";
		  echo $perc;echo "%";
       ?>
         <div width="15%" colspan="15%" style = "margin-right:10%"><?php
           if($perc <= 25 && $perc >= 0){?><?php echo "";?>:<div style="margin-right:90%">
             <p style="background:red; " colspan='15%' width="25%">below 25% of time spend</p></div>
           <?php } if($perc <= 50 && $perc >=25){ ?>Day spend: <?php echo "";?><div style="margin-right:70%">
             <p style="background:yellow;" width="50%"></p></div>
           <?php } if($perc <= 75 && $perc >=50){?><?php  echo "";?> <div style="margin-right:50%">
              <p style="background:yellow;" width="75% "colspan='15%' >75% of inspection<br> task completed</p></div>
           <?php } if($perc <= 100 && $perc >= 75){ ?>Day spend:<?php echo ""; ?><div style="margin-right:30%">
           <p style="background:green;" width="75%">above 75% of work completed</p></div>
            <?php }?></div><hr style="margin-right:10%"><?php	}}} ?>






    </div>
            <?php }


	 //include('login.php');

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
