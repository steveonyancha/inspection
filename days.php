<?php 
           $begin = $Row['begin'];
           $end = $Row['end'];
           
           today = date("Y-m-d");
           
           $begin = strtotime($begin); 
           $end = strtotime($end); 
           $today = strtotime($end); 
           $ttime = $end-begin;
           $days = $ttime/(60*60*24);
           $remaint = $end-today;
           $remaind = $remaint/(60*60*24);
           $perc = ($days/remaind)*100;
           
           if($perc >= 0){?>
           <div width="100%">
           <p style="background:green;" width="25%"></p>
           <?php } if(50 >= $perc && $perc >=25){>?
           <p style="background:yellow;" width="50%"></p>
           <?php } if(50 >= $perc && $perc >=25){?>
           <p style="background:amber;" width="75%"></p>
           <?php } if(100 >= $perc && $perc >= 75){ ?>
           <p style="background:red;" width="75%">
           <?php }?>