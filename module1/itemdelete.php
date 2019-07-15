<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/15/2019
 * Time: 8:44 AM
 */
?>
<?php
include('db-connection.php');
if(isset($_POST['del'])){
    $custId=$_POST['itemcode'];
    mysqli_query($conn,"delete from item where itemcode='$itemcode'");
}
?>

