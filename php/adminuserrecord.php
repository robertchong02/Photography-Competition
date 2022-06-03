<?php
include("connect.php");
include("adminsession.php");
$AdminID = $_SESSION['adminID'];
?>

<!DOCTYPE html>
<html>

<head>
<style>
#userrecord {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  font-size:14px;
  margin:auto;
}

#userrecord td, #userrecord th {
  border: 1px solid #ddd;
  padding: 8px;
}

#userrecord tr:nth-child(even){background-color: #f2f2f2;}

#userrecord tr:hover {background-color: #ddd;}

#userrecord th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

  <!--Link to CSS-->
  <link rel = "stylesheet" href = "../css/adminaddcomp.css">

  <!--Link to picture-->
  <link rel = "icon" type = image/png href ="../image/logo.png">
  <title>Add competition</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/adminaddcomp.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif">

<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="adminhome.php">Winner</a>
  <a class="active" href="adminhome.php">Home</a>
  <a style="float:left; position:relative; bottom:20px;"><img class="logo" src = "../image/logo.png"></a>
  <a style="font-family: Comic San; font-weight:bold; position:relative; right:10cm" >AP Photography Club</a>
</div>

<p style="margin-left:50px; margin-top:20px">
<a href="adminhome.php">
    <button type="button" class="button button1">BACK</button>
</a>
</p>
<br>
<br>
<h2 style="text-align:center">User Records<h2>
<br>

<form  method="POST">
    <div class="flex-container">
	<input type="text" style="width:50%;border:1px solid grey" placeholder="Search using username" name="searchname" />
	<input type="submit" style="width:20%;border:1px solid grey"  value="Search" name="Search"/>
    <a href="adminuserrecord.php"> 
    <button type="button" style="width:10%;border:1px solid black;background: #fefae0; right;font-size:16px;margin-right:20px"> Reset </a> </button>
    </div>
</form>


<?php
                                    
            $searchusername = "";

            if(isset($_POST["Search"]))
            {
                $searchusername = $_POST['searchname'];
            }
            
            $searchResult = mysqli_query($con, "SELECT * FROM user WHERE Username LIKE '%$searchusername%';");
        ?>

<br><br>


    <table id="userrecord">
    <tr>
        <th>User ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Nationality</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($searchResult)) 
  		{		
			
      $displaySearch = '
            <tr>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Customer_ID"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Fname"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Lname"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Username"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Email"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["ContactNumber"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Gender"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["DoB"].'" readonly/></td>
                <td><input type="text" style="border:none;background:transparent" value = "'.$row["Nationality"].'" readonly/></td>
            </tr>';
            echo $displaySearch;  
        }
        ?>	
            </table>




<!-- footer -->
<div class="footer" style="font-size:14px; margin-top:1000px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px"> 
		<img class="logo" style="width:120px; height:100px" src = "../image/logo.png"></br></br>
	</div>
	<div>
		<p><b>Asia Pacific University</b></p>
		Jalan Teknologi 5, </br>
		Taman Teknologi Malaysia,</br>
		57000 Kuala Lumpur,</br>
		Wilayah Persekutuan Kuala Lumpur.
	</div>
	</div></br>
	<div>
    <p style="text-align:center">Kindly click <a href="https://web.whatsapp.com/">here</a> to contact with users.</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div>

</body>

</html>