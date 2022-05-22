<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Link to CSS -->
  <link rel = "stylesheet" href = "../css/main.css">
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>


<body style="background-image:url('../image/bg.gif')">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="editprofile.html">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="userhome.html">Home</a>
    <img class="logo" style="float: left;" src = "../image/logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>

<h2 id="home" style="margin:25px; text-align:center">Welcome!</h2>
<div class="flex-container">
	<div class=title style="width:800px; height:320px; font-size:16px; margin-bottom:90px; margin-left:80px">
	<form name="login" method="get"  style=" padding-left:300px">
		<table>
		<?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition WHERE CompetitionID = '6'");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
		$displayData = '
		<td>				
		<img src="data:image/jpg;base64, '.base64_encode($row["CompetitionImage"]).'" style="width:250px; height:230px">
		<tr>
		<td style="font-size:20px"><b>Open for Registration!!!</b></td>
		</tr>
		<tr><td></td></tr>
		<tr>
			<td style="text-align:left">Title</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="30" maxlength="50"/></td>
		</tr>
		<tr>
			<td style="text-align:left">Theme</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Theme"].'" name="theme" size="15" maxlength="15"/></td>
		</tr>
		<tr>
			<td style="text-align:left">Register Date</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["RegisterDate"].'" name="registerdate" size="15" maxlength="15"/></td>
		</tr>
		<tr>
			<td style="text-align:left">Deadline</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Deadline"].'" name="deadline" size="15" maxlength="15"/></td>
		</tr>
		<tr>
			<td style="text-align:left">Competition Date</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["CompetitionDate"].'" name="compdate" size="15" maxlength="15"/></td>
		</tr>
		<tr>
			<td style="text-align:left">Prize</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Prize"].'" name="prize" size="15" maxlength="8"/></td>
		</tr>
		<tr>
			<td style="text-align:left">Eligibility</td>
			<td>:</td>
			<td><input type="text" value = "'.$row["Eligibility"].'" name="eligibility" size="15" maxlength="8"/></td>
		</tr>
		<tr>
			<td><a href="compread2.html">Click here for more information...</a>
		</td>
		</tr>
		</td>';
		echo $displayData;  
	}
	?>	
		</table>
		
	</form>
	</div>

<div style="font-size:16px">
	<div style="padding-bottom:0px">
		<div class="title" style="text-align:center; width:300px; height:150px; margin-left:33px">
			<b style="font-size:17px">Competition 2 (Closed)</b><br/><br/>
			<a href="viewcotent.html">
				<button type="button" class="btn btn-primary">Click Here to Vote</button>
			</a>
		</div>
	</div>

	<div >
		<div class="title" style="text-align:center; margin:33px;width:300px; height:130px; padding-top:50px">
			<p>More Competitions...</p><br/><br/>
		</div><br/>
	</div>
</div>
</div>

<h2 id="Winner" style="margin:25px; text-align:center">Winner</h2>
<div class="title">
	<p style="text-align:center; font-size:24px">Winner for the latest competition:</p>
	<div class="grid-container1" style="padding-left:80px">
		<div class="title" style="width:150px; height:150px"></div>
		<div class="title" style="width:150px; height:150px"></div>
		<div class="title" style="width:150px; height:150px"></div>
	</div>
	<div class="grid-container2"> 	
		<img alt="" src="1st.png" width="40px" height="60px" style="padding-left:140px"/>
		<img alt="" src="2nd.png" width="40px" height="60px" style="padding-left:120px"/>
		<img alt="" src="3rd.png" width="40px" height="60px" style="padding-left:100px"/>
	</div>
	<div class="grid-container2" style="padding-left:80px">
		<p>Name:</p>
		<p>Name:</p>
		<p>Name:</p>
	</div>
</div><br/><vr/>

<h2 id="About" style="margin:25px; text-align:center">About Us</h2>
<div class="title" style="text-align:justify; margin:25px"> 
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras congue faucibus lectus. Nullam semper consequat neque, ac congue urna fermentum sit amet. In vehicula vulputate aliquet. Duis luctus congue ipsum. Vivamus lacinia ultrices justo, quis dignissim erat sodales ut. Sed a tincidunt lacus. Sed ac elit eros. Ut auctor ligula id massa viverra, nec bibendum sapien faucibus. Duis vitae volutpat velit. Aenean placerat arcu efficitur lacus tincidunt, eget aliquam velit sollicitudin. Integer eu lobortis mi, nec rhoncus diam. Vestibulum malesuada ultricies lacus at varius. Proin dolor nibh, facilisis vitae turpis sed, imperdiet efficitur odio. Proin vel diam ac eros vestibulum volutpat quis eget ex. Duis at massa lorem. Donec porttitor sodales neque, eu tempor ex ornare ac</p>
	<p>Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis libero ut nunc aliquet pellentesque. Aliquam erat volutpat. Aenean ac eros non mi dignissim fermentum quis vel elit. In laoreet porta purus, nec porta sem. Morbi dictum, ante non vehicula dapibus, lorem massa semper ex, nec mollis diam sapien sit amet nibh. Morbi maximus felis id ligula mollis elementum. Morbi sit amet luctus metus, ut suscipit sapien. Duis libero massa, vehicula vel fringilla eu, porttitor ac mauris. Nullam scelerisque turpis a leo euismod vestibulum. Donec ultrices augue eu tincidunt porttitor. Etiam euismod, lacus vitae tempus ultricies, sem felis iaculis dolor, at imperdiet nibh nisi sit amet nibh. Nullam ac aliquam nibh. Cras tempus tincidunt malesuada.</p>
	<p>Sed pulvinar fringilla justo sed malesuada. Integer magna ante, tempus sit amet lobortis sed, tincidunt et lorem. Cras commodo non sem at vestibulum. Sed dapibus, risus non fermentum congue, ex elit lobortis odio, congue pretium orci risus commodo lectus. Vestibulum ullamcorper gravida felis vitae pharetra. Aliquam magna diam, sollicitudin accumsan nunc vitae, porta accumsan ante. Suspendisse efficitur velit magna, quis fringilla mauris consectetur et. In sit amet fringilla orci. Proin a massa sapien. Etiam sit amet felis nec augue tempus tristique. Maecenas placerat ante nulla, dictum imperdiet erat sollicitudin id.</p>
	<p>Aenean nec viverra augue. Praesent non volutpat sapien, fringilla egestas mi. Proin vitae ligula ligula. Pellentesque fermentum cursus eleifend. Maecenas fringilla turpis ex, quis consectetur mauris volutpat quis. Aenean sed pulvinar purus. Vestibulum congue dolor egestas erat placerat, a hendrerit nulla fringilla. Praesent ornare lectus vitae iaculis facilisis. Quisque sit amet efficitur turpis, a tempor m</p>
</div>

<p style="text-align:center">Contact us via:
	<a href="email.html">  
		<button type="button" class="btn btn-primary">Email</button>  
	</a>
</p>

	
</body>

</html>
