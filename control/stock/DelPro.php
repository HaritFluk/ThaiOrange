<?php
session_start();
include '../../condb.php';
$id = $_GET['delid'];
// echo $_SESSION["status"];
$sqldel = "DELETE FROM stock_product WHERE P_id = '$id'";
$querydel = $condb->query($sqldel);
if($querydel){
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น');";
    echo "window.location='../../ManageStock/Main.php';";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น')";
    echo "window.location='../../ManageStock/Main.php';";
    echo "</script>";
}
?>