<?php session_start();
//require_once 'config.php              ';

// Is the user already logged in? Redirect him/her to the private page

if(isset($_SESSION['username']))
{
header("Location: index.php");
exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> Login Reset</TITLE>

  <META name="Author" Content="Bit Repository">
  <META name="Keywords" Content="ajax, login, form, mootools">
  <META name="Description" Content="A nice & simple AJAX Login Form">
  



  <script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>

    <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
</HEAD>

 <BODY>

<div class="header"><img src = "images/basket.png" height = "100" width = "90"></div> 
<?php #include('admin.php'); 
?>
  <form action='reset.php' method='post'>
      <div style="margin-top:20px;margin-left:20px" width="50%">
      <fieldset >
         <!-- <legend>Password Reset</legend>-->
          <label>Enter email:</label>
          <input type="email" name="email" style="margin-bottom: 10px;">
          <input type="submit" name="submit" value="submit">
      </fieldset>
      </div>
     </form>
      </BODY>
</HTML>