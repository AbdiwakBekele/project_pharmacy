<?php
include "db_con.php";

$id= $_GET['id'];



$sql="DELETE FROM drugType WHERE drug_id=$id";


$result=mysqli_query($conn,$sql);

if($result){
    header("Location: ManageDrug.php?msg=Deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>