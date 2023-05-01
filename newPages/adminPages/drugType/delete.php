<?php
include "db_con.php";

$id= $_GET['id'];



$sql="DELETE FROM drugTypetable WHERE drugType_id=$id";


$result=mysqli_query($conn,$sql);

if($result){
    header("Location: ManageDrugType.php?msg=Deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>