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
  <TITLE> Login</TITLE>
   <link rel="icon"
      type="image/png"
      href="images/road.png" />
  <META name="Author" Content="Bit Repository">
  <META name="Keywords" Content="ajax, login, form, mootools">
  <META name="Description" Content="A nice & simple AJAX Login Form">




  <script type="text/javascript" src="js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="js/process.js"></script>

    <link rel="stylesheet" type="text/css" href="css/fixedMenu_style2.css" />
  <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
</HEAD>

 <BODY style="background:url(images/498.jpg);">

<div class="header"><!--<img src = "images/basket.jpg" height = "100" width = "90">-->
 <h2 style="margin-left:37%; color:white; margin-top:0; ">Road Inspection Software Tool</h2>
</div>
<?php #include('admin.php');
?>

<center >
<!--Road inspection software tool is a web based application<br> to trasmit data from road inspection to
        the database-->
<?php
?>

<div id="status">
<div class="wrapstat">
 <br/> <br/>
 <br/>

<fieldset style="width:300px; margin-top:30px; margin:auto;">
<div style="margin-top:3px; height:4px; width:200px;"></div>
<div class="headwrap">
<div class="title">
<img src="images/users.png" height="35" style="float:left; margin-left:8px; margin-top:2px;">
<div style="float:left; font-size:20px; font-family:Verdana, Geneva, sans-serif; color: #3B5998; margin-top:8px;
">Login</div>
</div>

<div id="login_response"><!-- spanner --></div>

<form id="login" name="login" method="post" action="do_login.php">
<table align="center" width="400" border="0" style="margin-top:20px;">
<tr>
<td width="80" style="font-family:Verdana, Geneva, sans-serif; font-size:15px; border-radius: 4px;">Email</td><td>
<input id = "name" name = "username" style = "width:200px;padding:5px;" type='text' placeholder="enter email" style=" 

    /* background-color: #3B5998;  Green */
    border: 6;

    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;">

</td>
</tr>
<tr>
<td style="font-family:Verdana, Geneva, sans-serif; font-size:15px; border-radius: 4px;">Password</td>
<td align="left"><input type="password" name="password" style="width:200px; padding:5px;" placeholder="Enter password" style="

    /* background-color: #3B5998;  Green */
    border: 6;

    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	padding: 10px 24px;
	border-radius: 8px;"></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><input id="submit" type="submit" name="submit" value="Login" style="

     background-color: #3B5998; /* Green */

    border: 6;
    color: white;

    text-align: center;
    text-decoration: none;
    width:30%;
    font-size: 12px;
	padding: 10px 12px;
	border-radius: 4px;"></td>

<div id="ajax_loading"></div></td>
</tr>
<tr>
    <tr>
</table>
        <!--<a href='forget.html'>Forgot password?</a>-->

</form>
</fieldset>
    </div>
</div>
</div>
</center>

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCL3GHK9N3hoc-fww6N7Kv7SwXt99ojojo",
    authDomain: "inspection-7be6d.firebaseapp.com",
    databaseURL: "https://inspection-7be6d.firebaseio.com",
    projectId: "inspection-7be6d",
    storageBucket: "inspection-7be6d.appspot.com",
    messagingSenderId: "721406186300"
  };
  firebase.initializeApp(config);
</script>
 </BODY>
</HTML>
