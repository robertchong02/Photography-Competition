<!DOCTYPE html>
<html lang="en">
<head>
    <title>Winner announcement</title>
    <link rel = "stylesheet" href = "../css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner Announcement</title>
    <style>
        img.logo{
          width: 160px;
          height: 128px;
          border: 5px groove;
        }
        
        body{
            margin: 0px;;
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            background-color: #eee;
        }

        
        /* *{
            border: 1px solid black;
        } */
        .flex{
            /*左右Flex Box*/
            display: flex;
            width:1070px;
        }
        .baiSe{
            background-color: white;
        }
        .flex1{
            /*占据全部区域*/
            flex:1;
        }
        .column{
            flex-direction: column;
        }

        /* This is nav bar styling */
        .topnav {
        padding: 0px;
        margin-left: 10px;
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
        font-weight: bold;
        font-family: Comic San
        

        }

        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        .topnav a.active {
        background-color: #04AA6D;
        color: white;
        }


        .boxModel{
            width: 320px;
            padding: 10px;
            border: 2px solid rgb(0, 0, 0);
            margin: 5px;
        }

        .button1 {
            background-color: #4CAF50;
            margin: 20px 0 20px 20px;
        } 
        .button {
            align:right;
            border: none;
            color: white;
            padding: 10px 22px;
            display:flex;
            align-items: center;
            display: inline-block;
            text-decoration: none;
            font-size: 14px;
            margin: 0px 15px 2px 2px;
            cursor: pointer;
            }
        
        input {
            padding:10px;
            border: none;
            background: #f1f1f1;
            font-size:14px;
        }

        form input {
            position: relative;
            right: 0;
            margin: auto;
            width: 90%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1.5px;
            font-family: "Old Standard TT", serif;
            background: linear-gradient(to left, #fefae0 50%, #DDa15e 50%) right;
            background-size: 200%;
            border: none;
            transition-duration: 0.5s;
            transition-timing-function: ease-out;
            text-align: center;
            cursor: pointer;

        }

        .post-container {
            padding-bottom:35px;
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 35%;
            height: 5%;
            font-family: Comic Sans;
            font-size: 1.2vw;
        }
        
    </style>
</head>

<body style="background-image:url('../image/bg1.png')">

    <!--上栏-->
    
        <!--头部栏-->
        <div class="topnav">
            <a href="logout.html">Logout</a>
            <a href="#Winner">Winner</a>
            <a class="active" href="adminhome.html">Home</a>
            <img class="logo" style="float: left" src="../image/logo.png" />
            <p style="float: left">APU Photography Competition</p>
        </div>
        <div class ="flex1 flex column" >
        <a href="adminhome.html">
            <button class="button button1"  style="margin-left:50px; margin-top:20px">BACK</button>
        </a>
        <h1 style="margin-left:480px">Winner Annoucement</h1>
        
        <form action = "winner.php" method = "POST">
        <!--nei rong qu-->
        <div style="height: auto; background-color:#A7CAD7; margin-left:100px"; class="flex">

            <!-- 左边栏 -->
            <!-- <form method="POST" action="winner.php" ></form> -->
            <div class="" style="width: auto;background-color:#A7CAD7">
                
                <div style="height: 100px;" class="flex flex column boxModel">
                <h2>Competition Title: </h2>
                <input type="text" placeholder="Enter Title Here" name="title" required>
                
                
                </div>
                <div style="height: 100px;" class="flex flex column boxModel">
                
                <h2>1st place winner: </h2>
                <input type="text" name="winnername1" required>

                </div>
                <div style="height: 100px;" class="flex flex column boxModel">

                <h2>2nd place winner: </h2>
                <input type="text" name="winnername2" required>
                
                </div>
                <div style="height: 100px;" class="flex flex column boxModel">
                                    
                <h2>3rd place winner: </h2>   
                <input type="text" name="winnername3" required>

                </div>

            </div>

            <!--右边栏-->
            <div class="" style="width: auto;">

                <div style="height: 100px;" class="flex flex column boxModel"></div>
                <div style="height: 100px;" class="flex flex column boxModel"></div>
                <div style="height: 100px;" class="flex flex column boxModel"></div>
                <div style="height: 100px;" class="flex flex column boxModel"></div>

            </div>

            <!--照片栏-->
            <div class="" style="width: auto;">

                <div style="height: 100px;" class="flex flex column boxModel ">
                    <!-- <input type="file" id="myFile" name="filename" ><br>
                    <br> -->

                    <!-- <input type="submit"><br> -->
                    
                </div>
                <div style="height: 100px;" class="flex flex column boxModel">

                    <input type="file" name="image" accept="image/*" required><br>
                    <br>
                    <!-- <input type="submit"><br> -->

                </div>
                <div style="height: 100px;" class="flex flex column boxModel">

                    <input type="file" name="image" accept="image/*" required><br>
                    <br>
                    <!-- <input type="submit"><br> -->

                </div>
                <div style="height: 100px;" class="flex flex column boxModel">
                
                    <input type="file" name="image" accept="image/*" required><br>
                    <br>

                    <!-- <input type="submit"><br> -->

                </div>

            </div>
        </div>
            <div class="post-container" style="margin-left:1030px;">
            <input type="submit" value="Post Annoucement">
            </div>



        </div>

    </form>
    

    

</body>
</html>