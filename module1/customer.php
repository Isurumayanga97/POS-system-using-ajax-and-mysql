<?php
include 'db-connection.php';

?>


<!----------------------------------Open-head---------------------------------------------------------------->
<?php
include 'head.php';
?>
<!----------------------------------Close-head---------------------------------------------------------------->

<body>

<div class="d-flex" id="wrapper">

    <!-----------------------------------Open-sidebar--------------------------------------------------------------->
    <?php
    include 'sidebar.php';
    ?>
    <!-----------------------------------Open-sidebar--------------------------------------------------------------->



    <div id="page-content-wrapper">

        <!------------------------------------------Open-headbar--------------------------------------------------------->
        <?php
        include 'headbar.php';
        ?>
        <!------------------------------------------Open-headbar--------------------------------------------------------->


        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12" id="content">

                    <div class="alert alert-dark" role="alert">

                        <h4><a href="index.php" class="contentsidebar">Dashboard/</a>Customer Form</h4>
                    </div>
                    <h4 class="ui dividing header" style="font-size: 20px;color: #0e8c8c">Customer Information</h4><br>




                    <form class="ui form" id="frmcustomer">
                        <div class="ui form">
                            <div class="two fields">
                                <div class="field">
                                    <label style="font-size: 15px">Customer ID</label>
                                    <input placeholder="Customer iD"  type="text" id="custId" name="CID">
                                </div>
                                <div class="field">
                                    <label style="font-size: 15px">Full Name</label>
                                    <input placeholder="Customer Name" type="text" id="custName" name="custname">
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label style="font-size: 15px">Address</label>
                            <input type="text" name="caddress" placeholder="Address" id="custAddress">
                        </div>
                        <div class="field">
                            <label style="font-size: 15px">E-Mail</label>
                            <input type="text" name="cmail" placeholder="E-Mail" id="custEmail">
                        </div>

                        <div class="ui form">
                            <div class="two fields">
                                <div class="field">
                                    <label style="font-size: 15px">City</label>
                                    <input type="text" name="ccity" placeholder="City" id="custCity">
                                </div>
                            </div>

                            <div class="ui form">
                                <div class="two fields">

                                    <div class="field">
                                        <label style="font-size: 15px">Birth Day</label>
                                        <input placeholder="Birth Day"  type="text" id="custBirthday" name="cbirthday">
                                    </div>
                                    <div class="field">
                                        <label style="font-size: 15px">NIC</label>
                                        <input placeholder="NIC"  type="text" id="custNic" name="cnic">
                                    </div>
                                </div>
                            </div>
                            <div class="ui form">
                                <div class="two fields">

                                    <div class="field">
                                        <label style="font-size: 15px">Salary</label>
                                        <input placeholder="Salary"  type="text" id="custSalary" name="Salary">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="ui buttons" style="position: fixed;top: 106px;right: 14px;">
                            <button class="ui button" style="background-color: #0d71bb" id="btncustadd" type="button">Add Customer</button>
                            <div class="or"></div>
                            <button class="ui positive button" style="background-color: #a3a375" id="btnrefresh" type="button">Refresh Form</button>
                        </div>
                    </form>


                    <br>

                    <div class="row">
                        <div id="userTable"></div>
                    </div>

                </div>
                <!--////////////////////////////////////Close-Custsection/////////////////////////////////////////////////////////////////////////          -->

                <div>
                    <a href="#"id="specialbtn"><i class="fas fa-arrow-circle-up fa-4x" style="color: red" id="aa"></i></a>
                </div>
            </div>


            <!--//////////////////////////////////////////////Close-Content/////////////////////////////////////////////////////////-->

        </div>
    </div>
</div>


<!--------------------------------Open-script-------------------------------------------------------------------->
<?php
include 'JS-controller.php';
?>
<!--------------------------------Open-script-------------------------------------------------------------------->


</body>

<!-----------------------------Open-footer----------------------------------------------->
<?php
include 'footer.php'
?>
<!-----------------------------Open-footer----------------------------------------------->

</html>

