<?php
session_start();
include '../../condb.php';
$pass = $_POST['pass'];
$username  = $_POST['user'];
$password = md5($pass);
$fname = $_POST["Fname"];
$lname = $_POST["Lname"];
$add = $_POST["Add"];
$tel = $_POST["Phone"];
$idcard = $_POST["idcard"];

// echo $fname;
// echo $lname;
// echo $add;
// echo $tel;
// echo $username;
// echo $password;
// echo $idcard;

$check = "SELECT * FROM member";
$qcheck = $condb->query($check);
while( $result = mysqli_fetch_array($qcheck,MYSQLI_ASSOC)){
        // echo $result["M_User"];
        // echo $username;
        // echo $result["ID_card"];
        // echo $idcard;
        if($_POST["user"] == $result["M_User"]){
                echo "<script>";
                echo "alert('ข้อมูลนี้มีอยู่ในระบบแล้ว');";
                echo "window.location='../../ManageMember/Main.php';";
                echo "</script>";
                break;
                die;    
        }
        else if($_POST["idcard"] == $result["ID_card"]){
                echo "<script>";
                echo "alert('ข้อมูลนี้มีอยู่ในระบบแล้ว');";
                echo "window.location='../../ManageMember/Main.php';";
                echo "</script>";
                break;
                die; 
        }
}
$sql = "INSERT INTO `member`(`id`, `M_Fname`, `M_Lname`, `ID_card`, `M_User`, `M_Pass`, `M_Add`, `M_Tel`, `M_Status`)
                        VALUES(null,'".$fname."','".$lname."','".$idcard."','".$username."','".$password."','".$add."','".$tel."',2)";
                // echo $sql;
                $query = $condb->query($sql);
                if($query){
                        echo "<script>";
                        echo "alert('เพิ่มพนักงานเรียบร้อยแล้ว');";
                        echo "window.location='../../ManageMember/Main.php';";
                        echo "</script>";
                }else{
                        echo "<script";
                        echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
                        echo "window.location='../../ManageMember/Main.php';";
                        echo "</script>";
                }

?>