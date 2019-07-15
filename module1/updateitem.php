<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/15/2019
 * Time: 8:45 AM
 */
?>
<?php
include('db-connection.php');
if(isset($_POST['edit'])){
    $custId=$_POST['itemcode'];
    $custName=$_POST['itemname'];
    $custAddress=$_POST['itembrand'];
    $custEmail=$_POST['itempacksize'];
    $custCity=$_POST['itemqty'];
    $custBirthday=$_POST['itemdate'];

    mysqli_query($conn,"update item set itemname='$itemname', itembrand='$itembrand', itempacksize='$itempacksize', itemqty='$itemqty', itemdate='$itemdate' where itemcode ='$itemcode'");
}
?>


