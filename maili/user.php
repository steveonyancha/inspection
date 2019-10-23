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
     $username = $_SESSION['username'];
     $query = "SELECT id FROM tbusers WHERE username='$username'";
     $result = mysql_query($query);
     $Result = mysql_fetch_array($result,MYSQL_ASSOC);
     $id = $Result['id'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
<title>User HOME</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet" />	-->

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

<div class="header" >
  <img src = "images/basket.jpg" height = "70" width = "90"> 
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

	
/*----------------------------------------------*/
	
	
	
/*----------------------------------------------*/
	else{ ?>
<div style="margin-left:10%"><br><br> 
    <p><b>W</b>elcome to Road inspection Software tool, the main purpose of this application 
       sendind road survey detail to the server</p>
    <hr style="margin-right:10%">
   <p>Current task:<br>  
     <?php 
         $que="SELECT * FROM road_info WHERE id='$id'";
         $res=mysql_query($que) or die('error:'.mysql_error());
         $Row = mysql_fetch_assoc($res); 
            ?>
      <?php 
           $begin = $Row['begin'];
           $end = $Row['end'];
           
           $today = date("Y-m-d");
           
           $begin = strtotime($begin); 
           $end = strtotime($end); 
           $today = strtotime($end); 
           $ttime = $end-$begin;
           $days = $ttime/(60*60*24);
           $remaint = $end-$today;
           $remaind = $remaint/(60*60*24);
           $perc = ($days/$remaind)*100;
           ?> <div width="15%" colspan="15%" style = "margin-right:10%"><?php
           if($perc >= 0){?>Day spend:<?php echo $days;?>:-<div style="margin-right:90%">
             <p style="background:green; " colspan='15%' width="25%">below 25% of time spend</p></div>
           <?php } if(50 >= $perc && $perc >=25){ ?>Day spend: <?php echo $days;?><div style="margin-right:70%">
            <p style="background:yellow;" width="50%"></p><div>
           <?php } if(50 >= $perc && $perc >=25){?>Day spend:<?php echo $days;?><div style="margin-right:50%">
       <p style="background:amber;" width="75%"></p></div>
           <?php } if(100 >= $perc && $perc >= 75){ ?>Day spend:<?php echo $days;?><div style="margin-right:30%">
           Day <p style="background:red;" width="75%"></p></div>
            <?php }?>
       <hr style="margin-left:0%;margin-right:20%">
       </div>
       <p>Amount of work done:</p>
       <?php 
           $tb = $Row['inspection_type'];
        $inspection_id = $Row['inspectionId'];
           $dis="select max(location_from) from $tb where inspectionId = '$inspection_id'";
    
           $resu = mysql_query($dis);
           $resu = mysql_fetch_array($resu);
           $far = $resu[0];
          
          $perc = ($far/$Row['distance'])*100;
         
       ?>
         <div width="15%" colspan="15%" style = "margin-right:10%"><?php
           if($perc <= 25 && $perc >= 0){?><?php echo "inspection completed:$perc";?>:-<div style="margin-right:90%">
             <p style="background:red; " colspan='15%' width="25%">below 25% of time spend</p></div>
           <?php } if($perc <= 50 && $perc >=25){ ?>Day spend: <?php echo "inspection completed:$perc";?><div style="margin-right:70%">
             <p style="background:yellow;" width="50%"></p></div>
           <?php } if($perc <= 75 && $perc >=50){?><?php  echo "inspection completed:$perc";?> <div style="margin-right:50%">
              <p style="background:yellow;" width="75% "colspan='15%' >75% of inspection<br> task completed</p></div>
           <?php } if($perc <= 100 && $perc >= 75){ ?>Day spend:<?php echo "inspection completed:$perc"; ?><div style="margin-right:30%">
           <p style="background:red;" width="75%"></p></div>
            <?php }?>
       <hr style="margin-right:10%">
       </div>
       <table >
            <tr>
               <td width="100">Inspection ID</td>
               <td width="100">Road No</td>
               <td width="100">Road class</td>
               <td width="100">District</td>
               <td width="100">Inspection type</td>
               <td width="100">begin</td>
               <td width="100">end</td>
           </tr>
<?php 
	include('database/config.php');
        $q="SELECT * FROM road_info WHERE id='$id'";
         $rs=mysql_query($q) or die('error:'.mysql_error());

           while($row=mysql_fetch_array($rs)){
	        ?>

          <tr bgcolor="#E8EDFF" align="center" class="hr" height="25">
            <td width="100"><?php echo $row['inspectionId'];?></td>
            <td  width="100"><?php echo $row['roadNo']; ?></td>
            <td width="100"><?php echo $row['road_class']; ?></td>
              <td width="100"><?php echo $row['district']; ?></td>
              <td width="100"><?php echo $row['inspection_type']; ?></td>
              <td width="100"><?php echo $row['begin']; ?></td>
              <td width="100"><?php echo $row['end']; ?></td>
          </tr>


<?php	} ?>
<tr height="25">
<td colspan="6">
</td>
</tr>
</table> 
     
    
    
       </div><?php 
    }

	
	 //include('login.php'); 

 ?>

    </div></div>
<div class="footer">
<div class="leftfoot"></div>
<div class="bodyfoot"> 
</div>
<div class="rightfoot"></div>
</div>
</div>****
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>

    <?php  ?>
