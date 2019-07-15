<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/9/2019
 * Time: 5:42 PM
 */
?>
<?php
include('db-connection.php');
if(isset($_POST['show'])){
    ?>
    <table class = "table table-bordered alert-warning table-hover">
        <thead>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>E-Mail</th>
        <th>City</th>
        <th>Birthday</th>
        <th>NIC</th>
        <th>Salary</th>
        </thead>
        <tbody>
        <?php
        $quser=mysqli_query($conn,"select * from customer");
        while($urow=mysqli_fetch_array($quser)){
            ?>
            <tr>
                <td><?php echo $urow['custId']; ?></td>
                <td><?php echo $urow['custName']; ?></td>
                <td><?php echo $urow['custAddress']; ?></td>
                <td><?php echo $urow['custEmail']; ?></td>
                <td><?php echo $urow['custCity']; ?></td>
                <td><?php echo $urow['custBirthday']; ?></td>
                <td><?php echo $urow['custNic']; ?></td>
                <td><?php echo $urow['custSalary']; ?></td>

                <td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['custId']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['custId']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
                    <?php include('custeditmodel.php'); ?>
                </td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
    <?php
}

?>

