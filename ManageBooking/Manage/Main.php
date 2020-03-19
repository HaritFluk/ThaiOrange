<?php
session_start();
include '../../condb.php';
$sql = "SELECT * FROM booking AS A 
INNER JOIN booking_detail AS B 
ON A.Bo_id = B.Bo_id
INNER JOIN get_type AS C
ON  B.Get_type = C.Get_id
INNER JOIN member AS D
ON A.M_id = D.id
INNER JOIN stock_product AS E
ON A.P_id = E.P_id
LEFT JOIN buy AS F
ON A.Bo_id = F.Bo_id
WHERE F.Bo_id IS NULL";

$bill = "SELECT * FROM booking AS A 
INNER JOIN booking_detail AS B 
ON A.Bo_id = B.Bo_id
INNER JOIN get_type AS C
ON  B.Get_type = C.Get_id
INNER JOIN member AS D
ON A.M_id = D.id
INNER JOIN stock_product AS E
ON A.P_id = E.P_id
LEFT JOIN buy AS F
ON A.Bo_id = F.Bo_id
WHERE F.Bo_id IS NOT NULL";
$query = $condb->query($sql);
$query2 = $condb->query($bill);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Main Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../DataTables/datatables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="sb-nav-fixed">
<?php include './Sidebar.php'; ?>

<!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
<!-- Table Content  -->
<?php include './Table.php'; ?>
<?php include './Table2.php'; ?>
    <!-- END Page Content  --></div>
    <script src="../../js/jquery.min.js"></script>

    <script src="../../DataTables/datatables.min.js" crossorigin="anonymous"></script>

    <script src="../../js/main.js"></script>

    <script src="../../js/popper.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    
    <script src="../../js/bootstrap.min.js"></script>

    <script >
    $('#Bookingdt').DataTable();
    $('#Billtable').DataTable();
    </script>
</body>

</html>