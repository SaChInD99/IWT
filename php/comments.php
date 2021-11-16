<?php
	include_once 'config3.php';
?>


<html>
<head>
    <title>Imagine wedding planners</title>
    <link rel="stylesheet" href="../css/contactus.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amita:wght@700&display=swap" rel="stylesheet">

    <script src="js/news.js"></script>

</head>
<body>
    <div class="productdata" id="tbl" style="border-style: groove; border-color: #04454B;">
        <table border="0" width="100%" class="table1">
            <tr>
                <th width="17%" align="left"><img class="logo" src="../images/logomain.jpg" width="200px" height="150px"></th>
                <th align="left"><h1 class="topic"><b>Wedding Planners</b></h1></th>
                <th width="33%" align="right">
                    <a href="https://courseweb.sliit.lk/login/index.php"><button class="b1"><b class="b3">Log-in</b></button></a><br /><br />
                    <a href="https://courseweb.sliit.lk/login/index.php"><button class="b1"><b class="b3">Sign-in</b></button></a>
                </th>
            </tr>
        </table>
        <hr class="hl" />
        <ul class="menu">
            <li class="left"><a href="homepage.html"><b class="b2">Home</b></a></li>
            <li class="left"><a href="#"><b class="b2">Content</b></a></li>
            <li class="left"><a href="contactindex.html"><b class="b2">Contact us</b></a></li>
            <li class="left"><a href="https://courseweb.sliit.lk/login/index.php"><b class="b2">About us</b></a></li>
        </ul>
        <br><br>
    </div>
	
	<br><br><br><br>
	<center>
	<table width="90%" class="history_table">
	<tr>
	<th>NAME</th>
	<th>COMMENT</th>
	<th>RATE</th>
	</tr>
	<?php
	$sql = "select * from contactus";
	$result = $conn->query($sql);
	
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo"<tr><td>".$row["c_name"]."</td><td>".$row["c_comment"]."</td><td>".$row["c_rate"]."</td></tr>";
		}
	}
	else{
		echo "No comments!!!!!!";
	}
	
	//echo "</table>";
	
	$conn->close();
	?>
	</table>
	
	</center>
	<br><br><br><br><br><br><br>
	
    <div class="productdata" id="tbl" style="border-style: groove; border-color: #04454B;">
        <table width="100%">
            <tr>
                <td>
                    <b>
                        copyright@2020 Imagine Wedding planning Pvt.Ltd.All rights reserved<br />
                        Payment method via<br />
                        <a href="https://courseweb.sliit.lk/login/index.php">click here to view registered organizations.</a><br />
                        <img src="../images/i4.jpg" width="180px" />
                    </b>
                </td>
                <td align="right">
                    <h2>
                        Follow us on
                        <a href="https://www.facebook.com/login/"><img src="../images/fi1.jpg" width="40px" /></a>
                        <br />
                        <a href="https://www.google.com/search?ei=_0xwX6aSB5qU4-EPqMK6yA4&q=youtube&oq=yo&gs_lcp=CgZwc3ktYWIQARgAMgoIABCxAxCDARBDMgQIABBDMgcIABCxAxBDMgQIABBDMgQIABBDMgIIADIFCAAQsQMyBQgAELEDMgUILhCxAzIFCAAQsQM6BAgAEEc6CwgAELEDEIMBEJECOggIABCxAxCDAToCCC5QtApYqxRg-yNoAXACeAOAAdYBiAH1CpIBBTAuOC4xmAEAoAEBqgEHZ3dzLXdperABAMgBCMABAQ&sclient=psy-ab"><img src="../images/fi3.jpg" width="40px" /></a>
                        <br />
                        <a href="https://www.instagram.com/?hl=en"><img src="../images/fi2.jpg" width="40px" /></a>
                        <br />
                        <a href="https://twitter.com/login?lang=en"><img src="../images/fi4.jpg" width="40px" /></a>
                    </h2>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>