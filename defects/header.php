<!DOCTYPE HTML Frameset DTD>
<html>
    <head>
       <title>Road defects</title>
        <link rel="icon" 
              type="image/png" 
              href="../images/road.png" />
			  <META name="Author" Content="Bit Repository">
  <META name="Keywords" Content="ajax, login, form, mootools">
  <META name="Description" Content="A nice & simple AJAX Login Form">
  



  <script type="text/javascript" src="../js/mootools-1.2.1-core-yc.js"></script>
  <script type="text/javascript" src="../js/process.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/fixedMenu_style2.css" />
    
    </head>
  <style>
       #divmenu,ul,li,li li{
           margin:0;
           padding:0;
                  }
       #divmenu{
           width:150px;
           height:27px;
       }
       #divmenu ul{
           line-height: 25px;
       }
       #divmenu li{
           list-style: none;
           position:relative;
           background: #3B5998;
       }
       #divmenu li li{
           outline-style: none;
           position:relative;
           background: #3B5998;
           left:148px;
           top:-27px;
       }
       #divmenu ul li a{
           width:148px;
           height:25px;
           display:block;
           text-decoration: none;
           text-align: center;
           font-family: Georgia, Times New Roman;
               color:#ffffff;
           border:1px solid #eee;
       }
       #divmenu ul ul{
           position:absolute;
           visibility: hidden;
           top:27px;
       }
       #divmenu ul li:hover ul{
           visibility: visible;
       }
       #divmenu li:hover{
           background-color: light#3B5998;
                  }
       #divmenu ul li:hover ul ul a:hover{
           background-color:light#3B5998;
       } 
       #divmenu a:hover{
           font-weight:bold;
       }
	   .header{
	      background:#3B5998;
	width:100%;
	height:70px;
	border-bottom:1px #FFF solid;
	   }
        </style>
    <body>
	<div class="header"></div> 
	<div style="margin-left:10%; margin-right:20%">
        <div id="divmenu">
         <ul class="navbar">
             <li><a href="#"><span class="img"></span>Paved Roads(Bitumen)<span class="arrow"></span>&nbsp</a>
                 <ul>
                    
                     <li> <a href="#"><span class="img"></span>Surface<span class="arrow"></span>&nbsp</a>
                     <ul>
                         <li><a href="cracking.php">Cracking</a></li>
                          <li><a href="pothole.php">Potholes</a></li>
                          <li><a href="rutting.php">Rutting/Deformation</a></li>
                          <li><a href="heaving.php">Heaving/Shoving</a></li>
                          <li><a href="fretting.php">Stripping/fretting</a></li>
                          <li><a href="bleeding.php">Bleeding</a></li>
                          <li><a href="glazing.php">Glazing</a></li>
                          <li><a href="edge.php">Edge Damage</a></li>
                          <li><a href="waving.php">Waving</a></li>
                          <li><a href="obstruction.php">Obstruction</a></li>
                          
                     </ul>
                     </li>
                 </ul>
             </li>
             <li>  <a href="#"><span class="img"></span>Concrete Roads<span class="arrow"></span>&nbsp</a>
                   <ul><li>
                    <a href="#"><span class="img"></span> Surfacing<span class="arrow"></span>&nbsp</a>
                     <ul>
                         <li><a href="texture.php">Loss of surface texture</a></li>
                          <li><a href="ccracking.php">cracking</a></li>
                         <li><a href="joint.php">joint settlement</a></li>                             
                     </ul>
                       </li>
                 </ul>
             </li>
             <li> 
                <a href="#"><span class="img"></span> Unpaved Roads<span class="arrow"></span>&nbsp</a>
                   <ul>
                     
                    <li><a href="#"><span class="img"></span>Carriageway<span class="arrow"></span>&nbsp</a> <ul>
                         <li><a href="camber.php">Loss of camber</a></li>
                          <li><a href="ruttin.php">Rutting</a></li>
                          <li><a href="pot.php">Potholes</a></li>
                          <li><a href="corrugation.php">Corrugation</a></li>
                          <li><a href="gully.php">Erosion Gullies</a></li>
                          <li><a href="soft.php">Soft spots</a></li>
                          <li><a href="obst.php">obstruction</a></li>
                          <li><a href="gdepth.php">loss of gravel depth</a></li>
                          
                             
                     </ul>
                       </li>
                 </ul>
             </li>
             <li>
                 <a href="#"><span class="img"></span>Shoulder<span class="arrow"></span>&nbsp</a>
                   <ul>
                    
                    <li> <a href="#"><span class="img"></span>Surface<span class="arrow"></span>&nbsp</a> <ul>
                         <li><a href="struction.php">Obstruction</a></li>
                          <li><a href="veges.php">High Vegetation</a></li>
                          <li><a href="scour.php">Scour</a></li>
                          <li><a href="shoulder.php">Shoulder/Carriage steps</a></li>
                          <li><a href="rat.php">Rutting</a></li>
                          <li><a href="depression.php">Depression</a></li>
                          <li><a href="poth.php">Pothole</a></li>
                          
                             
                        </ul></li>
                 </ul>
             </li>
        </ul>
        </div>
		
    