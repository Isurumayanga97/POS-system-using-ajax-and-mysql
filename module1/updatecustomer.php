<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/9/2019
 * Time: 8:48 PM
 */
?>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/9/2019
 * Time: 5:06 PM
 */
?>
<?php
include('db-connection.php');
if(isset($_POST['edit'])){
    $custId=$_POST['custId'];
    $custName=$_POST['custName'];
    $custAddress=$_POST['custAddress'];
    $custEmail=$_POST['custEmail'];
    $custCity=$_POST['custCity'];
    $custBirthday=$_POST['custBirthday'];
    $custNic=$_POST['custNic'];
    $custSalary=$_POST['custSalary'];

    mysqli_query($conn,"update customer set custName='$custName', custAddress='$custAddress', custEmail='$custEmail', custCity='$custCity', custBirthday='$custBirthday', custNic='$custNic', custSalary='$custSalary'  where custId ='$custId'");
}
?>

