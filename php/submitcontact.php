<?php
 require_once 'config3.php';
 
 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .message {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 3rem 4rem;
        border-radius: 6px;
        background-color: #303030;
        color: white;
    }

    button {
        margin: 20px;
        margin-bottom: 0px;
        padding: 10px;
        background-color: lightgreen;
        outline: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.2s ease-in-out;
    }

    button:hover {
        transform: scale(1.1);
    }

    button a {
        text-decoration: none;
        color: black;
    }
    </style>
</head>

<body>

<?php
    
    if(isset($_POST['submit'])){   
	   $Name = $_POST['field1'];
       $Email = $_POST['field2'];
       $PhoneNo = $_POST['field3'];
       $Subject = $_POST['field4'];
	   $Comment = $_POST['field5'];
	   $Rate = $_POST['field6'];
	   
	  $sql = "insert into contactus(c_name, c_email, c_phoneno, c_subject, c_comment, c_rate)values('$Name','$Email','$PhoneNo','$Subject','$Comment','$Rate');";
	  
	  if(mysqli_query($conn,$sql)){
		  //echo "<script>alert('Your feedback was recordered successfully!!!Kindly bare with us until we get back to you again')</script>";
		  
		  echo ("
				<div class='message'>
					<p>Your feedback was recordered successfully!!! Kindly bare with us until we get back to you again</p>
					<button><a href='../html/contactindex.html'>Next</a></button>
				</div>
				");
	  }
	  else{
		  //echo ("<script> alert('Error in inserting records!!please try again'); </script>");
		  //echo "Error";
		  echo ("
				<div class='message'>
					<p>Error in inserting records!!please try again</p>
					<button><a href='contactindex.html'>Back</a></button>
				</div>
				");
		  
	  }
	} 
	else {
		header("location:contactindex.html");
	}
	
	mysqli_close($conn);

?>

</body>

</html>
