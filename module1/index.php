<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 6/17/2019
 * Time: 1:27 AM
 */
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



        <!--//////////////////////////////////////////Open-dashboard//////////////////////////////////////////////////////////////////////////-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="content">
                    <div class="alert alert-dark" role="alert">

                        <h4><a href="index.html" class="contentsidebar">Dashboard/</a>Overview</h4>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-100 cardone">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-user-check fa-3x"><strong style="color: red">245+</strong></i>
                                    </div>
                                    <div class="mr-5"><h2>Customers</h2></div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-warning o-hidden h-100 cardone">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-user-check fa-3x"><strong style="color: red">5624+</strong></i>
                                    </div>
                                    <div class="mr-5"><h2>Items</h2></div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-success o-hidden h-100 cardone">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="far fa-chart-bar fa-3x"><strong style="color: red">5624+</strong></i>
                                    </div>
                                    <div class="mr-5"><h2>Orders</h2></div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-danger o-hidden h-100 cardone">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-life-ring fa-3x"></i>
                                    </div>
                                    <div class="mr-5"><h2>Vieworder</h2></div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-area"></i>
                            Area Chart</div>
                        <img src="images/giphy.gif" alt="">
                        <div class="card-footer small text-muted">Updated yesterday at 10:01 PM</div>
                    </div>



                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="list-group">
                                    <a href="#" class="list-group-item active">
                                        <h4 class="list-group-item-heading">Status And Anylizing</h4>
                                    </a>
                                </div>
                                <br>
                                <img src="images/giphy%20(1).gif" alt="" style="width: 710px;height: 400px;border: 1px solid black">
                            </div>

                            <div class="col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading" style="font-size: 30px">
                                        <i class="fa fa-bell fa-fw" style="font-size: 40px"></i>Notifications Panel
                                    </div>
                                    <br>
                                    <div class="panel-body">
                                        <div class="list-group">

                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-envelope fa-fw"></i>Message Sent
                                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-tasks fa-fw"></i>New Task
                                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                            </a>

                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                            </a>
                                        </div>
                                        <a href="#" class="btn btn-info btn-block" style="margin-bottom: 10px;margin-top:5px">View All Alerts</a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="#"id="specialbtn"><i class="fas fa-arrow-circle-up fa-4x" style="color: red" id="aa"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--/////////////////////////////////////////////Close-Dashboard////////////////////////////////////////////////////////////////////////////    -->

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


