<?php

//check username password, log in as user

include("connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){


    //Save User input to variable for checking purpose
    $username = mysqli_real_escape_string($con, $_POST['username2']);
    $password =mysqli_real_escape_string($con, $_POST['pw2']);

    //MySQL Query

    
    if(!empty($username) && !empty($password)){
        //read sdp database (usersignup db)

        $query ="SELECT * FROM usersignup WHERE Username ='$username' limit 1";
        $result= mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);

                    if($user_data['Password'] === $password){

                        
                        $_SESSION['ID'] = $user_data['ID'];

                        // example redirect to main.html    
                        
                        echo
                        '<script>

                        alert("Congrates.");
                        window.location.href = "userhome.php"

                        </script>';


                    }             
             
            }
        }

        echo
        '<script>

        alert("Wrong username or password !!");
        window.location.href = "userlogin.php"

        </script>';

    }else{

        echo
        '<script>

        alert("Wrong username or password !!");
        window.location.href = "userlogin.php"

        </script>';

    }

}



//close connection to db
mysqli_close($con);

?>








