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
			onclick ="alert('you are about to submit the info,press ok to continue or cancel to review.')"
			<table border='1'><thead>inspection detail form: <?php echo $intype;?><br>Inspection ID:<?php echo $Result['inspectionId'];?></thead>
	<thead><br>Shoulder Left<br></thead>
	<tr>
	<td  width="100">date</td>
	<td width="100">from</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriage step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>
	<?php $res=mysql_query($query) or die('Error'.mysql_error());
	        ?>
	<?php while($re=mysql_fetch_array($res)){?>
	<tr>
	<td  width="100"><?php echo $re['date'];?></td>
	 <td  width="100"><?php echo $re['location_from'];?></td>
	<td  width="100"><?php echo $re['pavement_type'];?></td>
   <td  width="100"><?php echo $re['sl_obstruction'];?></td>
	<td  width="100"><?php echo $re['sl_high_veges'];?></td>
	<td  width="100"><?php echo $re['sl_scour'];?></td>
	<td  width="100"><?php echo $re['sl_shoulder'];?></td>
	<td  width="100"><?php echo $re['sl_rutting'];?></td>
	<td  width="100"><?php $ans = $re['sl_pothole_width']*$re['sl_pothole_depth']*$re['sl_pothole_nos']; echo $ans;?></td>
	<td  width="100"><?php echo $re['sl_cause'];?></td>
	</tr>
	<?php } ?>
	<thead>Carriage Width<br></thead>
	<tr>
	<td  width="100">date</td>
	<td width="100">from</td> 
	<td width="100">pavement type</td>
	<td  width="100">Loss of chamber</td>
	<td  width="100">Rutting (depth)</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Corrugation</td>
	<td  width="100">Erosion Gullies</td>
	<td  width="100">Soft Spot</td>
	<td width="100">Obstruction</td>
	<td width="100">Loss of Gravel</td>
	<td  width="100">Cause of Defect</td>
	</tr>
	<?php $reslt=mysql_query($query) or die('Error'.mysql_error());
	        ?>
	<?php while($Rlt=mysql_fetch_array($reslt)){?>
	<tr>
	<td  width="100"><?php echo $Rlt['date'];?></td>
	<td  width="100"><?php echo $Rlt['location_from'];?></td>
	<td  width="100"><?php echo $Rlt['pavement_type'];?></td>
	<td  width="100"><?php echo $Rlt['cw_loss_camber'];?></td>
	<td  width="100"><?php echo $Rlt['cw_rutting'];?></td>
	<td  width="100"><?php $ans = $Rlt['cw_pothole_width']*$Rlt['cw_pothole_depth']*$Rlt['cw_pothole_nos']; echo $ans;?></td>
	<td  width="100"><?php echo $Rlt['cw_corrugations']?></td>
	<td  width="100"><?php echo $Rlt['cw_erosion_gulley'];?></td>
	<td  width="100"><?php echo $Rlt['cw_spot'];?></td>
	<td  width="100"><?php echo $Rlt['cw_obstruction'];?></td>
	<td width="100"><?php echo $Rlt['cw_loss_of_graveld'];?> 
	<td width="100"><?php echo $Rlt['cw_cause'];?></td>
	</tr>
	<?php }?>
	<thead>Shoulder Right<br></thead>
	<tr>
	<td  width="100">date</td>
	<td width="100">from</td> 
	<td width="100">pavement type</td>
	<td  width="100">obstruction</td>
	<td  width="100">High vegetation</td>
	<td  width="100">Scour</td>
	<td  width="100">shouder/carriage step</td>
	<td  width="100">Rutting/Depression</td>
	<td  width="100">Pothole(W x D x Nos)</td>
	<td  width="100">Cause of Defect</td>
	</tr>
		<?php $resul=mysql_query($query) or die('Error'.mysql_error());
	        ?>

	<?php while($Rest=mysql_fetch_array($resul)){?>
	<tr>
	<td  width="100"><?php echo $Rest['date'];?></td>
	 <td  width="100"><?php echo $Rest['location_from'];?></td>
	<td  width="100"><?php echo $Rest['pavement_type'];?></td>
   <td  width="100"><?php echo $Rest['sr_obstruction'];?></td>
	<td  width="100"><?php echo $Rest['sr_high_veges'];?></td>
	<td  width="100"><?php echo $Rest['sr_scour'];?></td>
	<td  width="100"><?php echo $Rest['sr_shoulder'];?></td>
	<td  width="100"><?php echo $Rest['sr_rutting'];?></td>
	<td  width="100"><?php $ans = $Rest['sr_pothole_width']*$Rest['sr_pothole_depth']*$Rest['sr_pothole_nos']; echo $ans;?></td>
	<td  width="100"><?php echo $Rest['sr_cause'];?></td>
	</tr>
	<?php } ?>
	 <input style="color:black;blackground-color:red;" type="button" value="print" onclick='window.print()'>
	 </table>
	 
	 <html>
    <head>
       <title>Road defects</title>
        <link rel="icon" 
              type="image/png" 
              href="images/road.png" />
    </head>
    <style>
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            width:200px;
            background-color:#f1f1f1 ;
        }
        li a{
            display:block;
            color:#000;
            padding:8px 16px;
            text-decoration: none;
            
        }
        li a:hover{
            background-color:#555;
            color:white;
			.active{
			backg
        }
        </style>
    <body>
         <ul>
             <li><a href="#"><span class="img"></span>Paved Roads(Bitumen)<span class="arrow"></span>&nbsp|</a>
                 <ul>
                    
                     <li> Surface
                     <ul>
                         <li><a href="">Cracking</a></li>
                          <li><a href="">Potholes</a></li>
                          <li><a href="">Rutting/Deformation</a></li>
                          <li><a href="">Heaving/Shoving</a></li>
                          <li><a href="">Stripping/fretting</a></li>
                          <li><a href="">Bleeding</a></li>
                          <li><a href="">Glazing</a></li>
                          <li><a href="">Edge Damage</a></li>
                          <li><a href="">Waving</a></li>
                          <li><a href="">Obstruction</a></li>
                          <li><a href="">Loss of surface texture</a></li>
                             
                     </ul>
                     </li>
                 </ul>
             </li>
             <li>  Concrete Roads
                   <ul><li>
                     Surfacing
                     <ul>
                         <li><a href="">Loss of srface texture</a></li>
                          <li><a href="">cracking</a></li>
                         <li><a href="">joint settlement</a></li>                             
                     </ul>
                       </li>
                 </ul>
             </li>
             <li> 
                 Unpaved Roads
                   <ul>
                     
                    <li>Carriageway <ul>
                         <li><a href="">Loss of camber</a></li>
                          <li><a href="">Rutting</a></li>
                          <li><a href="">Potholes</a></li>
                          <li><a href="">Corrugation</a></li>
                          <li><a href="">Erosion Gullies</a></li>
                          <li><a href="">Soft spots</a></li>
                          <li><a href="">obstruction</a></li>
                          <li><a href="">loss of gravel depth</a></li>
                          
                             
                     </ul>
                       </li>
                 </ul>
             </li>
             <li>
                 Shoulder
                   <ul>
                    
                    <li> Surface <ul>
                         <li><a href="">Obstruction</a></li>
                          <li><a href="">High Vegetation</a></li>
                          <li><a href="">Scour</a></li>
                          <li><a href="">Shoulder/Carriage steps</a></li>
                          <li><a href="">Rutting</a></li>
                          <li><a href="">Depression</a></li>
                          <li><a href="">Pothole</a></li>
                          
                             
                        </ul></li>
                 </ul>
             </li>
        </ul>
    </body>
</html>