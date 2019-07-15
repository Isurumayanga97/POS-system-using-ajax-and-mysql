<?php
include 'db-connection.php';
if(isset($_POST['add'])){
    $itemcode=$_POST['itemcode'];
    $itemname =$_POST['itemname'];
    $itembrand =$_POST['itembrand'];
    $itempacksize =$_POST['itempacksize'];
    $itemqty = $_POST['itemqty'];
    $itemdate = $_POST['itemdate'];

    mysqli_query($conn,"insert into item (itemcode, itemname,itembrand,itempacksize,itemqty,itemdate) values ('$itemcode','$itemname','$itembrand ','$itempacksize ','$itemqty ','$itemdate ')");
}
?>
