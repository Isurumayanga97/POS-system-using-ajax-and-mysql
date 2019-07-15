<?php
include('db-connection.php');
if(isset($_POST['show'])){
    ?>
    <table class = "table table-bordered alert-warning table-hover">
        <thead>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Item Brand</th>
        <th>Pack Size</th>
        <th>QTY</th>
        <th>Date</th>
        </thead>
        <tbody>
        <?php
        $quser=mysqli_query($conn,"select * from item");
        while($urow=mysqli_fetch_array($quser)){
            ?>
            <tr>
                <td><?php echo $urow['itemcode']; ?></td>
                <td><?php echo $urow['itemname']; ?></td>
                <td><?php echo $urow['itembrand']; ?></td>
                <td><?php echo $urow['itempacksize']; ?></td>
                <td><?php echo $urow['itemqty']; ?></td>
                <td><?php echo $urow['itemdate']; ?></td>

                <td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['itemcode']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['itemcode']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
                    <?php include('itemeditmodel.php'); ?>
                </td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
    <?php
}
