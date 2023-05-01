<?php
include "db_con.php";

$id= $_GET['id'];



$sql="DELETE FROM catagory WHERE catagory_id=$id";


$result=mysqli_query($conn,$sql);

if($result){
    header("Location: ManageCatagory.php?");
}
else{
    echo "Failed: " . mysqli_error($conn);
}

?>