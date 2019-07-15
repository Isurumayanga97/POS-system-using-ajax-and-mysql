<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 7/9/2019
 * Time: 8:32 PM
 */
?>
<div class="modal fade" id="edit<?php echo $urow['custId']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <?php
    $n=mysqli_query($conn,"select * from customer where custId='".$urow['custId']."'");
    $nrow=mysqli_fetch_array($n);
    ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class = "text-success modal-title">Update Customer</h3></center>
            </div>
            <form class="form-inline">
                <div class="modal-body">
                    custName: <input type="text" value="<?php echo $nrow['custName']; ?>" id="cname<?php echo $urow['custId']; ?>" class="form-control">
                    custAddress: <input type="text" value="<?php echo $nrow['custAddress']; ?>" id="caddress<?php echo $urow['custId']; ?>" class="form-control">
                    custEmail: <input type="text" value="<?php echo $nrow['custEmail']; ?>" id="cmail<?php echo $urow['custId']; ?>" class="form-control">
                    custCity: <input type="text" value="<?php echo $nrow['custCity']; ?>" id="ccity<?php echo $urow['custId']; ?>" class="form-control">
                    custBirthday: <input type="text" value="<?php echo $nrow['custBirthday']; ?>" id="cbirthday<?php echo $urow['custId']; ?>" class="form-control">
                    custNic: <input type="text" value="<?php echo $nrow['custNic']; ?>" id="cnic<?php echo $urow['custId']; ?>" class="form-control">
                    custSalary: <input type="text" value="<?php echo $nrow['custSalary']; ?>" id="csalary<?php echo $urow['custId']; ?>" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="submit" class="updateuser btn btn-success" value="<?php echo $urow['custId']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

