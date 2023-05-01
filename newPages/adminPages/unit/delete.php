<?php
include "db_con.php";

$id= $_GET['id'];



$sql="DELETE FROM unit WHERE unit_id=$id";


$result=mysqli_query($conn,$sql);

if($result){
    header("Location: ManageUnitType.php?");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>