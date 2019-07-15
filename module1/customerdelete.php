<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/9/2019
 * Time: 8:58 PM
 */
?>
<?php
include('db-connection.php');
if(isset($_POST['del'])){
    $custId=$_POST['custId'];
    mysqli_query($conn,"delete from customer where custId='$custId'");
}
?>

