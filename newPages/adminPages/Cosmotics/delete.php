<?php
include "db_con.php";

$id= $_GET['id'];



$sql="DELETE FROM cosmotics WHERE cosmotic_id=$id";


$result=mysqli_query($conn,$sql);

if($result){
    header("Location: ManageCosmotic.php?msg=Deleted successfully");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>