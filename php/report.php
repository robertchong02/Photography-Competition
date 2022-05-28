<!DOCTYPE html>
<html>

<head>
    <title>Statistic report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="index.css">
    <style>
    img.logo {
        width: 160px;
        height: 128px;
        border: 5px groove;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        padding: 0px;
        margin-left: 10px;
        overflow: hidden;
    }

    .topnav a {
        display: block;
        float: right;
        color: #f2f2f2;
        text-align: center;
        padding: 24px 26px;
        text-decoration: none;
        font-size: 17px;
        background-color: #333;
    }

    .topnav p {
        float: left;
        margin-left: 10px;
        font-size: 32px;
        padding: 0px;
        margin-top: 17px;
        font-family: Comic San;
        font-weight: bold;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #04aa6d;
        color: white;
    }

    /* content box */
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .callout {
        position: fixed;
        bottom: 35px;
        right: 20px;
        margin-left: 20px;
        max-width: 300px;
    }

    .callout-header {
        padding: 25px 15px;
        background: #555;
        font-size: 30px;
        color: white;
    }

    .callout-container {
        padding: 15px;
        background-color: #ccc;
        color: black;
    }

    .closebtn {
        position: absolute;
        top: 5px;
        right: 15px;
        color: white;
        font-size: 30px;
        cursor: pointer;
    }

    .closebtn:hover {
        color: lightgrey;
    }

    .container1 {
        position: absolute;
    }

    /* for h1 title */
    .h1{
        color: black;
        font-size: 70 px;
        margin: 0 px;
        background-color: rgb(100, 98, 98);
        border: 5px solid gray;
    }

    .title{
    border:solid 4px black;
    padding:25px;
    margin:40px auto 40px auto;
    margin-bottom:50px;
    text-align:center;
    width: 450px;
}
    
    </style>
    

</head>

<body style="background-image:url('../image/bg1.png')">
    <div class="topnav">
        <a class="active" href="#home">Home</a>
            <a href="#Winner">Winner</a>
            <a href="#Logout">Logout</a>
            <img class="logo" style="float: left;" src = "../image/logo.png">
            <p style="float: left;">AP Photography Club</p>
    </div>
    <h1 style="margin: 50px;font-size: 50px; border: 5px solid black; height: 100 px;text-align:center;">Competition Detail</h1>
    <p style="margin: auto;font-size: 30px; border: 5px solid black; height:50 px; width: 500px; text-align:center;background-color:#A7CAD7; ";>Number of Voting: 0 votes</p>
    
    <div class ="title" style="background-color:#A7CAD7;"> 
    <p style="font-size: 30px;">"Results:"</p>
    <p style="font-size: 20px;">username 1 = 0 votes</p>
    <p style="font-size: 20px;">username 2 = 0 votes</p>
    <p style="font-size: 20px;">username 3 = 0 votes</p>
    <p style="font-size: 20px;">username 4 = 0 votes</p>
    </div>
    
<div class="container " style="text-align: right; margin:30px">
    <div class="">
        <a href="adminhome.html">
        <button type="button" class="btn btn-success mt-3 mr-5">
                Back
        </button>
        </a>
    </div>
</div>