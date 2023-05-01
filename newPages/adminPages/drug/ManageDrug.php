



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
        <!-- <div class="row"> -->
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

               
                <div class="container">

<?php
if(isset($_GET['msg'])){
  $msg=$_GET['msg'];
  echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg. '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
 <div class="container col border  ps-4 rounded mt-4 ">
                
                <div class=" h3 pt-1 h3-lead">
                    <i class="bi bi-house-fill"></i> Drugs
                </div>
                <hr>
                <div class=" h3 pb-1 h3-lead">
                <?php 
                     $sql="SELECT * FROM drugType";
                     $result=mysqli_query($conn,$sql);
                     $count=mysqli_num_rows($result);
                     ?>
                        <p><?php echo $count?>
                </div>
            </div>
            <div class="row shadow-lg  rounded border mt-5 ">

                    <div class="col-5 ps-4 pt-2">
                      
                        <a href="AddDrug.php" class="btn btn-outline-secondary " role="button" >+ Refill/Add Drugs</a>
                    </div>
                    <div class=" col-7 p-2 ">
                        <div class="input-group" width="75">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <button type="button" class="btn btn-outline-primary">search</button>
                        </div>
                    </div>
                </div>
            </div>
  <div class=" mt-2 lead text-weight-bold bg-black text-white text-center">

Drug Table
</div>
<table class="table table-striped table-bordered">
<thead class="text-white bg-info text-center">
    <tr>
        <th scope="col-1">No</th>
        <th scope="col-1">Drug ID</th>
        <th scope="col-1">Catagory Name</th>
        <th scope="col-1">Brand Name</th>
        <th scope="col-1">Expire Date</th>
        <th scope="col-1">Price</th>
        <th scope="col-1">Amount</th>
        <th scope="col-1">Drug Exiry Status</th>

        <th scope="col-9" class="bg-secondary">Action</th>
    </tr>
</thead>
<tbody>
<?php

$no=0;
include "db_con.php";

$sql="SELECT drugType.drug_id , catagory.catagory_name, drugTypetable.brand , drugType.ExpireDate, drugTypetable.price, drugType.amount
FROM catagory
INNER JOIN drugTypetable ON catagory.catagory_id = drugTypetable.catagory_id
INNER JOIN drugType ON drugTypetable.drugType_id = drugType.drugType_id;
";


  $result=mysqli_query($conn,$sql);

  
  
  while($row=mysqli_fetch_assoc($result)){
   

    $no=$no+1;
  
    ?>
    
   
<tr>
    <th scope="row"><?php echo $no?></th>
    <td><?php echo $row["drug_id"]?></td>
    <td> <?php echo $row["catagory_name"]?></td>
    <td><?php echo $row["brand"]?></td>
    <td><?php echo $row["ExpireDate"]?></td>
    <td><?php echo $row["price"]?></td>
    <td><?php echo $row["amount"]?></td>
    <td><?php
    $currentDate = date('m-d-Y');
    //  echo  $currentDate;
    // echo $currentDate-$row["ExpireDate"];
    if($currentDate-$row["ExpireDate"]<=2){
        echo "warning";
       }else{
        echo "Good Status";
        }
    ?></td>



   
    <td>

    <i class="bi bi-people-fill text-primary"></i>

   <a href="delete.php?id=<?php echo $row["drug_id"]?>" class="btn">
    <i class="bi bi-trash3-fill text-danger"></i>
       </a>
    </td>
</tr>

    <?php


}

?>

    
 
   
   
</tbody>
</table>
              </div>
                

            
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js "></script>


</body>

</html>

</html>