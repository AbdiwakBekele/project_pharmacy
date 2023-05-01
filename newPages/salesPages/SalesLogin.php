<?php      
    include 'db_con.php';  
    $email = $_POST['email'];  
    $password = $_POST['pswd'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from Login where email = '$email' and password = '$password' and user_type='sales'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location:ManageSales.php");
exit();
        }  
        else{  
             
        }     
?>  





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .background1 {
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3)0%, rgba(255, 255, 255, 0.3) 100%), url("../images/1.jpg");
            background-size: cover;
            max-width: 1330px;
            height: 620px;
            opacity: 0.9;
        }
        
        .container {
            position: relative;
            width: auto;
        }
        
        .image {
            display: block;
            width: auto;
            height: 400px;
        }
        
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #305b69;
            overflow: hidden;
            width: 0;
            height: 100%;
            transition: .5s ease;
        }
        
        .container:hover .overlay {
            width: 100%;
        }
        
        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            white-space: nowrap;
        }
    </style>
</head>

<body>


    <div class="background1 " id="mainbody">
        <div class="container-fluid pt-5 col-8 shadow my-auto " id="index">
            <div class="row">
                <div class="col-4">
                    <div class="container ps-2 ms-0">
                        <img src="../images/p1.avif" alt="admin" class=" image">
                        <div class="overlay">
                            <div class="text">hello i am sales man</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 border  pt-5">
                    <form action="SalesLogin.php" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                          </label>
                        </div>
                        <a href="../Admin/DashBoard/dashbord.html"><button type="submit" name="submit" class="btn btn-primary col-5 ms-5">Login</button></a>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>