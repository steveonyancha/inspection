<?php session_start();
if(isset($_SESSION['username']))
{
unset($_SESSION['username']);

if(isset($_COOKIE[$cookie_name]))
{
// remove 'site_auth' cookie
setcookie ($cookie_name, '', time() - $cookie_time);
}

header("Location: login.php");
exit;
}
?>
