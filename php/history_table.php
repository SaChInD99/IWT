<?php
	include_once 'config2.php';
?>

<html>
<head>
    <title>IMAGINE wedding planners</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/js.js"></script>
    <script>
        document.wirte(Date());
    </script>
</head>
<body>
    <div class="productdata" id="tbl" style="border-style: groove; border-color: #04454B;">
        <table border="0" width="100%" class="table1">
            <tr>
                <th width="17%" align="left"><img class="logo" src="../images/logomain.png" width="200px" height="150px"></th>
                <th align="left"><h1 class="topic"><b>Wedding Planners</b></h1></th>
                <th width="33%" align="right">
                    <a href="login.html"><button class="b1"><b class="b3">Log-in</b></button></a><br /><br />
                    <a href="https://courseweb.sliit.lk/login/index.php"><button class="b1"><b class="b3">Sign-in</b></button></a>
                </th>
            </tr>
        </table>
        <hr class="hl" />
        <ul class="menu">
            <li class="left"><a href="https://courseweb.sliit.lk/login/index.php"><b class="b2">Home</b></a></li>
            <li class="left"><a href="Content.html"><b class="b2">Content</b></a></li>
            <li class="left"><a href="https://courseweb.sliit.lk/login/index.php"><b class="b2">Contact us</b></a></li>
            <li class="left"><a href="#"><b class="b2">About us</b></a></li>
        </ul>
        <br><br>
    </div>
	<br><br><br>
	
	<center><a href="../html/add_data.html"><button><h3>Add data to the table</h3></button></a>
	
	<br><br><br><br>
	<table border="0" width="90%" class="history_table">
	<tr style="background-color: whitesmoke;">
	<th>YEAR</th>
	<th>OUR VISION</th>
	<th>OUR ACHIEVEMENTS</th>
	<th>OUR GOALS</th>
	<th>NO. OF STAFF MEMBERS</th>
	<th>NO. OF BRANCHES</th>
	<th>EDITOR ID</th>
	</tr>
	<?php
	$sql = "select * from history";
	$result = $conn->query($sql);
	
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo"<tr style='background-color: whitesmoke;'><td>".$row["year"]."</td><td>".$row["vision"]."</td><td>".$row["achievements"]."</td><td>".$row["goals"]."</td><td>".$row["staff"]."</td><td>".$row["branches"]."</td><td>".$row["id"]."</td><td><a href='delete.php?rn= $row[id]'><button>delete</button></a></td></tr>";
		}
	}
	else{
		echo "Empty records!!!!!!";
	}
	
	echo "</table>";
	
	$conn->close();
	?>
	
	
	
	</center>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
    <div class="productdata" id="tbl" style="border-style: groove; border-color: #04454B;">
        <table width="100%">
           <tr><td><b>
                copyright@2020 Imagine Wedding planning Pvt.Ltd.All rights reserved<br />
                Payment method via<br />
                <a href="https://courseweb.sliit.lk/login/index.php">click here to view registered organizations.</a><br />
                <img src="../images/i4.jpg" width="180px" />
            </b></td>
            <td align="right">
                <h2>Follow us on
                <a href="https://www.facebook.com/login/"><img src="../images/fi1.png" width="40px" /></a>
                <br />
                <a href="https://www.google.com/search?ei=_0xwX6aSB5qU4-EPqMK6yA4&q=youtube&oq=yo&gs_lcp=CgZwc3ktYWIQARgAMgoIABCxAxCDARBDMgQIABBDMgcIABCxAxBDMgQIABBDMgQIABBDMgIIADIFCAAQsQMyBQgAELEDMgUILhCxAzIFCAAQsQM6BAgAEEc6CwgAELEDEIMBEJECOggIABCxAxCDAToCCC5QtApYqxRg-yNoAXACeAOAAdYBiAH1CpIBBTAuOC4xmAEAoAEBqgEHZ3dzLXdperABAMgBCMABAQ&sclient=psy-ab"><img src="../images/fi3.png" width="40px" /></a>
                <br />
                <a href="https://www.instagram.com/?hl=en"><img src="../images/fi2.jpg" width="40px" /></a>
                <br />
                <a href="https://twitter.com/login?lang=en"><img src="../images/fi4.png" width="40px" /></a></div></h2>
            </td>
            </tr>
        </table>
    </div>
</body>
</html>