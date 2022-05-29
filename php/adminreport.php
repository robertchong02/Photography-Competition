<?php

include("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Statistic report</title>
    <style>
        .chartBox{
            width:300px;
        }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <link rel="stylesheet" href="../css/report.css">
</head> 

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif;">
    
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="adminwinnerannounce.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <img class="logo" style="float: left" src="../image/logo.png" />
        <p style="float: left">AP Photography Club</p>
    </div>
    <a href="adminhome.php">
            <button class="button button1">BACK</button>
    </a>    

    <h1 style="margin: 50px;font-size: 50px; border: 5px solid black; height: 100 px;text-align:center;">Competition Detail</h1>
    <?php
  			$fetchData = mysqli_query($con, "SELECT * FROM competition ORDER BY CompetitionID ASC LIMIT 1");
  			while($row = mysqli_fetch_assoc($fetchData)) 
  		{		
			
      $displayData = '
			<p style="margin: auto;font-size: 30px; border: 5px solid black; height:50 px; width: 500px; text-align:center;background-color:#A7CAD7; "><input type="text" value = "'.$row["CompetitionTitle"].'" name="title" size="30" maxlength="60" style="border: none; background-color:transparent;font-size:24px; text-align:center" readonly/></p>';
		echo $displayData;  
		}
    ?>	

    <!--Php for Statistical Chart-->

    <?php     


        $query = $con->query("SELECT COUNT(Customer_ID) AS 'mon', vcontentID AS 'total' FROM voting GROUP BY vcontentID");

        foreach($query as $data)
        {
            $x[] = $data['total'];
            $y[] = $data['mon'];
        }
    ?>

    <?php
        $fetchData = $con->query("SELECT monthname AS 'Months', amount AS 'amo' FROM test ");
    
        foreach($fetchData as $data_1){

            $tot = $data_1['amo'];
            $month= $data_1['Months'];
        }
    ?>

    <!--Php for commend Chart-->
    <!-- 左右Flex 布局 -->
    <div class = "flex-container" style="height:700px">

        <div class="baise" style="width: 500px; background-color: red;">
        </div>

        <div class="baise flex-container column" style="width: 500px;">
            <!--Statistic report Area-->
            <div class ="title" style="background-color:#A7CAD7;"> 
            <canvas id="voteChart"></canvas>
            </div>

            <!--Statistical Commend-->
            <div class= "title" style="background-color:#A7CAD7;">
            <canvas id= "commentChart"></canvas>
            </div>
        </div>
    </div>

    <!--Statistically Report JS-->
    <script>  
            const labels = <?php echo json_encode($x)?>;
            const data = {
            labels: labels,
            datasets: [{
                label: 'Statistical Report',
                data: <?php echo json_encode($y)?>,
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                    y: {
                        beginAtZero: true
                    }
                    }
                },
            };

            const voteChart = new Chart(
            document.getElementById('voteChart'),
            config
            );

        // comment Statistic
        // data of pie chart

        const comlab = <?php echo json_encode($month)?>;
        const dataCom = {
            labels: comlab,
            datasets: [{
                label: 'Comment Report',
                data: <?php echo json_encode($tot)?>,
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        // config commendReport
        
        const configCom={
            type: 'bar',
            data: dataCom,
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            },
        };
        // render comment report
        const commentChart = new Chart(
        document.getElementById('commentChart'),
        configCom
        ); 

        
    

    </script>
    
    
<!-- footer -->
<div class="footer column" style="font-size:14px" >
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
		<p style="text-align:center">Contact us by clicking
		<a href="https://api.whatsapp.com/send?phone=60163543712&text=Hello,%20I%20have%20questions%20regarding%20the%20AP%20Photo%20Competition%20%3E.%3C">here</a>
		</p>
	</div>
	<div style="text-align:center; font-size:10px">Copyright &copy; 2022 AP Photography Club</div></br>
</div></br>

</body>

</html>