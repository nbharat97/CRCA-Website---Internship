<html>
<head>
<title>Events</title>
<link rel="stylesheet" href="style1.css" type="text/css"></link>
<style>
.button3 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	border-radius: 12px;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
	border-radius: 12px;
	
}
th{
	
	padding-left:50px;
	padding-right:50px;
	
}
td{
	
	padding-left:50px;
	padding-right:50px;
	
}


</style>
</head>
<body>
<div class="container">
<center><a><font color="blue" size="30px"><img src="logocentral.jpg" height="40" width="50">Central Railway Cultural Academy</font><a href="Home.php"><button class="button button2" style="width:70px" "height:50px;">Home</button></a><br>
<marquee><h4><font color="brown">Welcome to CRCA Website</font></h4></marquee>
<div class="nav">
<ul>
<li><a href="About.html">About CRCA</a></li>

<li><a href=" ">Structure of CRCA     <img src="8.png" width="15px" height="20px"></img></a>
<ul>
<li><a href=" ">Zonal HQ Apex Body</a></li>
<li><a href=" ">(CEC) Headquarter     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">Headquarter(All HQ Offices )     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">a. HQ  Executive body</a></li>
</ul>
</li>

<li><a href=" ">Division      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">a.Divn. Apex body </a></li>
<li><a href=" ">b. Divn. executive body     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">1. BB</a></li>
<li><a href=" ">2. NGP</a></li>
<li><a href=" ">3. BSL     <img src="9.png" width="15px" height="10px"></img></a>

<ul>
<li><a href=" ">ZRTI</a></li>
</ul>
</li>
<li><a href=" ">4. PA</a></li>
<li><a href=" ">5. SUR     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">WM/KWV</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href=" "> Workshop     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">a. W/S. Apex  body	</a></li>
<li><a href=" ">b. W/S/ Executive body      <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">1. CWM (PR)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href=" ">Dy. CMM(M)PR</a></li>
</ul>
</li>
<li><a href=" ">2. CWM(MTN)     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">Dy. M(CWE)MTN</a></li>
</ul>
</li>
<li><a href=" ">3. CWM S&T(BY)     <img src="9.png" width="15px" height="10px"></img> </a>
<ul>
<li><a href=" ">a.CM(P&S)BY</a></li>
<li><a href=" "> b.Dy.CMM(G)CRD </a></li>
</ul>
</li>
<li><a href=" ">4. CWM(POH)BSL     <img src="9.png" width="15px" height="10px"></img></a>
<ul>
<li><a href=" ">Dy.CMM(ACL)BSL</a></li>
</ul>
</li>
<li><a href=" ">5. Dy. CMM(TMW)NKRD</a></li>
<li><a href=" ">6. CWM(CEW)MMR</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a href="Awards.html">Achievements & Awards</a></li>
<li><a href="events1.php">Schedule of Events</a></li>
<li><a href="committee1.php">Executive Committee</a></li>
<li><a href="news.html">Latest News</a></li>
<li><a href="Contact1.php">Contact Us</a> </li>
<li><a href="login.html">Login</a></li>
</ul>
</div>

</div>
<br>
<br>
<br>
<br>
<br>
<?php
//make conncection

$con=mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con,'membersdb');

$sql = "SELECT * from members";

$record=mysqli_query($con,$sql);

?>
<center>
<table border="3" cellspacing="1" cellpadding="1" height="80px" width="300px" style="margin-top:100px";"text-align:center";>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Contact</th>
</tr>

<?php
echo "<center>";
while($records=mysqli_fetch_array($record))//we can also use assoc in place of array
{
	echo "<tr>" ;
	echo "<td>".$records['name']."</td>";
	echo "<td>".$records['designation']."</td>";
	echo "<td>".$records['contact']."</td>";
	echo "</tr>" ;
}
echo "</center>"
?>

</table>
</center>

</body>

<div class="footer">
<p style="padding:20px;">Site Managed and Maintained by Central Railways</p>
</div>
</div>
</html>