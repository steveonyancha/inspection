<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets').load('reserve_count.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds

var auto_refresh = setInterval(
function ()
{
$('#loadreserved').load('reservedbook.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds
</script>

<style>
#load_tweets{position:absolute; margin-top:-29px; font-size:15px; font-family:Verdana, Geneva, sans-serif; font-weight:bold; color:#000; z-index:5px;
margin-left:27px;}
.menuwrap{ width:960px; margin:auto;}
.menus{ width:100%;   background: #3B5998; height:32px;}

</style>

 

<div class="menus">
<div id="hotel">
<div class="menuwrap">
   <div class="menu">
        <ul>
        <li>
                <a href="#"><span class="img"><img src="icons/b_home.png"width='20px'  height='18px' style=" padding-top:3px;"></span>&nbsp;Home&nbsp;<span class="arrow"></span>&nbsp|</a>
                
                <ul>
                   
               <li><a href="index.php">Home</a></li>
                  
           
             
                </ul>
            </li>
			<li>
                <a href="#"><span class="img"><img width='20px'  height='18px' style=" padding-top:3px;"></span>&nbsp;Users<span class="arrow"></span></a>
                <ul>
                    <li><a href="?addUser">Add User</a></li>
                    <li><a href="?searchUser">Search User</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="img"><img src="images/basket.JPG"width='20px'  height='18px' style=" padding-top:3px;"></span>&nbsp;Task&nbsp;<span class="arrow"></span>&nbsp</a>
                
                <ul>
                   
               <li><a href="?addtask">add task</a></li>
			   <li><a href="?task">view task</a></li>
                
           
             
                </ul>
            </li>
             <div style="margin-left:70%; color:white" ><?php echo "Welcome "; echo $_SESSION['username'];?><a href="logout.php" >Logout/Signout</a></div>
            
        </ul>
    </div>
    <div id='inlineBox' class='popup_block'>
			<div id='inlineBoxAjax'></div>
		</div>
        </div></div>

     