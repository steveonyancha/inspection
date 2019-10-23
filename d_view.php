<?php
        include('database/config.php');
    $id = $_POST['id'];
    
    if($_POST['submit']){
        
        $query = "SELECT inspection_type FROM road_info WHERE inspection_id='$id'";
        $result = mysql_query($query);
        if(!$result){
            echo "<script>
            alert('invalid inspection id,check the id before trying');
            </script>";
        }
        else{
		    echo "tttttttttttttt";
            $Result = mysql_fetch_array($result);
            if($Result >= 1){
               if($Result['inspection_type']=='pr'){
                   $query = "SELECT * FROM pr WHERE inspection_id='$id'";
                   $result = mysql_query($query);
                    @$Result = mysql_fetch_array('$result');
                   
                   if(!$result){
                       die('error:'.mysql_error());
                   }
                   else{
                       
                   }
               } 
               elseif($Result['inspection_type'] == 'ur'){
                      $query = "SELECT * FROM pr WHERE inspection_id='$id'";
                   $result = mysql_query($query);
                   
                   
                   if(!$result){
                       die('error:'.mysql_error());
                   }
                   else{
                       
                   }
                    
                }
            }
            else{
                #
            }
        }
    }
    
    
?> 