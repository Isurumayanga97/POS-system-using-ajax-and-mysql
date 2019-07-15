
<?php
include 'db-connection.php';
if(isset($_POST['add'])){
    $custId  =$_POST['custId'];
    $custName =$_POST['custName'];
    $custAddress =$_POST['custAddress'];
    $custEmail =$_POST['custEmail'];
    $custCity = $_POST['custCity'];
    $custBirthday = $_POST['custBirthday'];
    $custNic =$_POST['custNic'];
    $custSalary =$_POST['custSalary'];

    mysqli_query($conn,"insert into customer (custId, custName,custAddress,custEmail,custCity,custBirthday,custNic,custSalary) values ('$custId','$custName ','$custAddress ','$custEmail ','$custCity ','$custBirthday ','$custNic ','$custSalary')");
}
?>







