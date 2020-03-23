<?php
session_start();
error_reporting(0);
if(!$_SESSION["status"]){
    if(!$_SESSION["id"]){
        echo "<script>";
        echo "alert('URL??');";
        echo "window.location='../index.php';";
        echo "</script>";
    }        
}else{
include '../condb.php';
$id = $_SESSION["id"];
$sttr = $_SESSION["status"];
$sql = "SELECT * FROM stock_product";
$query = $condb->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <title>จัดการคลังสินค้า</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../DataTables/datatables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
            img{
   	float: left;
   	margin: 5px;
   	width: 60px;
   	height: 60px;
   }
    </style>
</head>

<body>
<?php include './Sidebar.php'; ?>

<!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
 <!-- Table Manage Stock -->
 <?php if($sttr == 'Admin'){
    include './Table_Stock.php'; 
 }else{
    include './Table_stock2.php';
 }
?>
    <!-- END Page Content  --></div>
    <script src="../js/jquery.min.js"></script>

    <script src="../DataTables/datatables.min.js" crossorigin="anonymous"></script>

    <script src="../js/main.js"></script>

    <script src="../js/popper.js"></script>
    
    <script src="../js/bootstrap.min.js"></script>
    
    <script >
    $('#Protable').DataTable();
    </script>
</body>

</html>
<?php } ?>