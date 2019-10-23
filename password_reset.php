 <?php
    include('database/config.php');
    include('maili/config.php');
    $email = $_POST['email'];
    if($_POST['submit']){
        //check user id with the given email address
        $query = "SELECT id FROM tbusers WHERE email = '$email'";
        $result = mysql_query($query);
        if(!$result){
            die('error'.mysql_error());
          
        }
        else{
        $Results = mysql_fetch_array($result);
        if($Results >= 1) {       
         $encrypt = md5($Results['id']);
            $message = "Your password reset link send to your e-mail address";
            $to = 'onyancha.stephen@yahoo.com';
            $subject = "forget password";
            $from = 'stivinmo@gmail.com';
              $body='Hi, <br/> <br/>Your Membership ID is '.$Results['id'].' <br><br>Click here to reset your password http://127.0.0.1/rs/Roadinspection/reset.php?encrypt='.$encrypt.'&action=reset';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            mail($to,$subject,$body,$headers);
        }
        else
        {
            $message = "Account not found please signup now!!";
        }}
        
     } 
?>