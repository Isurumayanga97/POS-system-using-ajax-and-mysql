<?php
?>

<div class="modal fade" id="edit<?php echo $urow['itemcode']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <?php
    $n=mysqli_query($conn,"select * from item where itemcode='".$urow['itemcode']."'");
    $nrow=mysqli_fetch_array($n);
    ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class = "modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h3 class = "text-success modal-title">Update Item</h3></center>
            </div>
            <form class="form-inline">
                <div class="modal-body">
                    itemcode: <input type="text" value="<?php echo $nrow['itemcode']; ?>" id="itemcode<?php echo $urow['itemcode']; ?>" class="form-control">
                    itemname: <input type="text" value="<?php echo $nrow['itemname']; ?>" id="itemname<?php echo $urow['itemname']; ?>" class="form-control">
                    itembrand: <input type="text" value="<?php echo $nrow['itembrand']; ?>" id="itembrand<?php echo $urow['itembrand']; ?>" class="form-control">
                    itempacksize: <input type="text" value="<?php echo $nrow['itempacksize']; ?>" id="itempacksize<?php echo $urow['itempacksize']; ?>" class="form-control">
                    itemqty: <input type="text" value="<?php echo $nrow['itemqty']; ?>" id="itemqty<?php echo $urow['itemqty']; ?>" class="form-control">
                    itemdate: <input type="text" value="<?php echo $nrow['itemdate']; ?>" id="itemdate<?php echo $urow['itemdate']; ?>" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['itemcode']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

