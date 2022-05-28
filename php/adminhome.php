<!DOCTYPE html>
<html>

<head>
    <!-- Link to CSS -->
    <link rel = "stylesheet" href = "../css/main.css">
    <title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body style="background-image:url('../image/bg1.png')">
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="winnerannounce.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
    </div>
    <br>
    <div style="text-align:center">
        <h1>Welcome, &lt;Admin&gt;</h1>
        <div class="col-4">
        </div>
    </div>

    <div class="container" class="title2" style="background-color:#A7CAD7; border:solid 2px #A7CAD7">
        <div class="row">
            <div class="col">
                <h2>Function</h2>
                <div class="row">
                    <div class="col align-self-start">
                        <div class="Functions">
                        <a href="competition.php">
                        	<button type="button" class="btn btn-danger">All Competition</button><br />
                        </a>
                        <a href="report.php">
                            <button type="button" class="btn btn-danger mt-3">View Statistical Report</button><br />
                        </a>
                        <a href="adminemail.html">
                            <button type="button" class="btn btn-danger mt-3">Send Notification</button><br />
                        </a>
                        <a href="verifycontent.php">
                        <button type="button" class="btn btn-danger mt-3">Verify Content </button>
                        </a>
                        <a href="winnerannounce.php">
                            <button type="button" class="btn btn-danger mt-3">Winner Announcement</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <h2>Competition On Going</h2>
                <div class="row">
                    <div class="col align-self-start">
                        <button type="button" class="btn btn-success">
                            Competition 1
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-6" style="margin-bottom:100px">
                <h2>Competition Preparing</h2>
                <div class="row">
                    <div class="col align-self-start">
                        <button type="button" class="btn btn-info">Competition 2</button><br />
                        <button type="button" class="btn btn-info mt-3">Competition 3</button><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<h2 id="Winner" style="text-align:center">Winner</h2>
<div class="title" style="background-color:#A7CAD7">
	<p style="text-align:center; font-size:24px">Winner for the latest competition:</p>
	<div class="grid-container1" style="padding-left:80px">
		<div class="title" style="width:150px; height:150px;border:solid 2px black;background-color:#A7CAD7;"></div>
		<div class="title" style="width:150px; height:150px;border:solid 2px black;background-color:#A7CAD7;"></div>
		<div class="title" style="width:150px; height:150px;border:solid 2px black;background-color:#A7CAD7;"></div>
	</div>
	<div class="grid-container2"> 	
		<img alt="" src="1st.png" width="40px" height="60px" style="padding-left:140px">
		<img alt="" src="2nd.png" width="40px" height="60px" style="padding-left:120px">
		<img alt="" src="3rd.png" width="40px" height="60px" style="padding-left:100px">
	</div>
	<div class="grid-container2" style="padding-left:80px">
		<p>Name:</p>
		<p>Name:</p>
		<p>Name:</p>
	</div>
</div>

    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <h2>Function</h2>
                <div class="row">
                    <div class="col align-self-start">
                        <div class="Functions"></div> 
                        <button type="button" class="btn btn-danger">Add Competition</button><br>
                        <button type="button" class="btn btn-danger mt-3">View Statistical Report</button><br>
                        <button type="button" class="btn btn-danger mt-3">Send Email</button><br>
                        <button type="button" class="btn btn-danger mt-3">Verify Content</button>
                    </div>
                </div>  
            </div> -->
</body>

</html>