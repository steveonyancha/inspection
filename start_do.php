 <?php
         include('database/config.php');
		 
	    $id = $_POST['id'];
		$district = $_POST['district'];
		$roadNo = $_POST['roadNo'];
		$roadType = $_POST['roadType'];
		$inspectionId = $_POST['inspectionId'];
        $inspectiontype =$_POST['inspectiontype'];
        $begin = $_POST['begin'];
        $end = $_POST['end']; 
        $distance = $_POST['distance']; 		
		//connection to database.
		
		if(isset($_POST['submit'])){
            
        $query ="SELECT email FROM tbuser WHERE id='$id'";
            $result = mysql_query($query);
            $Result = mysql_fetch_array($result,MYSQL_BOTH);
            
            if($Result >= 1){
		$query = "INSERT INTO road_info(id, district, roadNo, road_class, inspectionId,inspection_type,begin,end,distance) VALUES ('$id', '$district', '$roadNo', '$roadType', '$inspectionId','$inspectiontype','$begin','$end','$distance')";
		$result = mysql_query($query);
		if($result)
		  echo "<script>
		            alert('task successful created');
					history.back();
			    </script>";
			#header("Location:user.php?proceed");
		}
		else{
			 echo "<script>
		            alert('invalid inspector id!!Only assign registered inspector');
					history.back();
			    </script>";
		}}
            else{
                echo "<script language='JavaScript'>
                alert('inspector with the id does not exist!Only add the available inspector or add new inspector if registration form is submitted and approved');
                history.back();
                </script>";
            }
		
   
   ?>