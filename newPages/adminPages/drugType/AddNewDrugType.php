<?php

include "db_con.php";

$sql="SELECT * FROM catagory";
$sql1="SELECT * FROM unit";
$all_categories=mysqli_query($conn,$sql);
$all_units=mysqli_query($conn,$sql1);

if(isset($_POST['submit']))
{
    // Store the Product name in a "name" variable
    $brand = $_POST['brand'];
    $generic =$_POST['generic'];
    $dosage= $_POST['dosage'];
    $price =$_POST['price'];
    // Store the Category ID in a "id" variable
    $catagory_id =$_POST['catagory'];
    $unit_id =$_POST['unit'];

    
   
    $sql_insert =
    "INSERT INTO drugTypetable(drugType_id,catagory_id, unit_id, brand, generic, dosage, price)
        VALUES (NULL,'$catagory_id','$unit_id','$brand','$generic','$dosage','$price')";
      
    
   
    if(mysqli_query($conn,$sql_insert)){
        header('Location: ManageDrugType.php?');
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yimarot Pharmacy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        .hr {
            margin-bottom: -4px;
            margin-top: 5px;
        }
        
        .navbar-nav .nav-item:hover {
            /* background-color: black; */
            color: rgb(247, 212, 10);
        }
        
        .navbar-nav .nav-item :active {
            color: blue;
        }
    </style>

</head>

<body>

   
    <div class="section bg-light" style="height:auto">
    <?php include "db_con.php"; ?>
        <div class="row">
        <div class="row">
            <div class="col-sm-2 collapse-horizontal bg-black" id="collapseExample">
                <div class=" font-weight-bold text-center pt-5 ">
                    <img src="../../images/logo.jpeg" style="max-width:100%; " alt="... " class="img-fluid rounded-circle ">
                    <p class="text-white ">Yimarot Pharmacy</p>


                </div>
                <ul class="navbar-nav d-flex ms-2 flex-column mt-4 w-100 font-size-20 text-white ">
                    <li class="nav-item ">
                        <a href="../Dashbord/dashbord.php" class="nav-link hover-overlay "><i class="bi bi-list-ul "></i> Dashboard</a>
                    </li>

                    <hr class="hr  " />
                    <li class="nav-item ">
                        <a href="../Catagory/ManageCatagory.php" class="nav-link "> <i class="bi bi-house-fill "></i> Manage Catagory Types</a>
                    </li>

                    <hr class="hr " />
                    <var><var>    <li class="nav-item ">
                    <a href="../unit/ManageUnitType.php" class="nav-link "> <i class="bi bi-house-fill "></i> Manage Unit Types</a>
                </li>
    
                <hr class="hr " /></var></var>
                    <li class="nav-item ">
                        <a href="../drugType/ManageDrugType.php" class="nav-link "><i class="bi bi-list-ul "></i>Manage Drag Type</a>
                    </li>

                    <hr class="hr " />
                    <li class="nav-item ">
                        <a href="../drug/ManageDrug.php" class="nav-link "><i class="bi bi-list-ul "></i>Manage Drug</a>
                    </li>

                    <hr class="hr " />
                    <li class="nav-item ">
                        <a href="../Cosmotics/ManageCosmotic.php" class="nav-link "><i class="bi bi-list-ul "></i>Manage Cosmotics</a>
                    </li>

                    <hr class="hr " />
                    <li class="mt-4">
                        <p>Inventory System | In Your Favor © 2023 All rights reserved | Designed By Omishtu-Joy</p>
                    </li>

                </ul>
            </div>




        <div class="col-sm-9 mt-2 container-fluid border border-end-0 ms-2   ">
                <div class="container mt-5">
                    <div class=" row shadow-lg p-3 mb-2 bg-white rounded ">
                        <div class="col-2 ">
                            <!-- <button class="btn " data-bs-toggle="collapse " id="menu-btn "><i class="bi bi-list-ul "></i></button> -->
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-list-ul "></i>
                          </button>
                        </div>
                        <div class=" h4 col-10 text-center "> <i class="bi bi-spotify "></i> Inventory System</div>
                    </div>
                </div>

                <div class="container mt-5 mb-4">
                    <div class=" row shadow-lg p-1 mb-2 bg-info rounded ">

                        <div class=" h5 col-10 text-center"> Add New Drug Type</div>
                    </div>
                </div>

              <div class="container border rounded ">
                    <form class="row g-3" action="AddNewDrugType.php" method="POST">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label"><i class="bi bi-file-earmark-text-fill"></i> Catagory Name</label>
                            <div class="container border p-2 rounded">
                                <select name="catagory" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                    <?php
                                     while ($category = mysqli_fetch_array(
                                        $all_categories,MYSQLI_ASSOC)):;
                                        // echo $cat

                                      
                                    ?>
                                    <option value="<?php echo $category["catagory_id"];
                                         // The value we usually set is the primary key
                                                 ?>">
                                          <?php echo $category["catagory_name"];
                                   // To show the category name to the user
                                        ?>
                                    </option>
                               <?php
                                      endwhile;
                               // While loop must be terminated
                               ?>


                      
                                </select>
                            </div>

                            <div class="valid-feedback">

                            </div>
                        </div>


                        <!-- unitttt -->
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label"><i class="bi bi-file-earmark-text-fill"></i> Unit Name</label>
                            <div class="container border p-2 rounded">
                                <select  name="unit" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <?php
                                     

                                        while ($unit = mysqli_fetch_array(
                                            $all_units,MYSQLI_ASSOC)):;
                                        
                                    ?>
                                    <option value="<?php echo $unit["unit_id"];
                                         // The value we usually set is the primary key
                                                 ?>">
                                          <?php echo $unit["unit_name"];
                                   // To show the category name to the user
                                        ?>
                                    </option>
                               <?php
                                      endwhile;
                               // While loop must be terminated
                               ?>
                                          </select>
                            </div>

                            <div class="valid-feedback">
                                good
                            </div>

                        </div>
                        <div class="col-md-4">
                            <label for="validationServer03" class="form-label"><i class="bi bi-info-circle-fill"></i> Brand Name</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" name="brand" placeholder="Brand Name" aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer04" class="form-label"><i class="bi bi-info-circle-fill"></i> Generic Name</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" name="generic" placeholder="Generic Name" aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer05" class="form-label"><i class="bi bi-info-circle-fill"></i> Dosage(mg) </label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" name="dosage" placeholder="Dosage in mg" aria-describedby="validationServer05Feedback" required>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer06" class="form-label"><i class="bi bi-info-circle-fill"></i> Price(ETB) </label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" name="price" placeholder="price" aria-describedby="validationServer05Feedback" required>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                fill-out
                            </div>
                        </div>

                        <div class="mb-2 mx-auto d-grid col-6">
                            <button name="submit" class="btn btn-primary" type="submit">Add New Drug</button>
                        </div>
                    </form>
                </div>
                

            
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js "></script>


</body>

</html>

</html>