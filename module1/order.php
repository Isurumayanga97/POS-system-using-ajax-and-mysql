<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 6/17/2019
 * Time: 1:41 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order</title>

    <link rel="stylesheet" href="css/stylesheet.css">

    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="js/semantic.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>

<body>

<div class="d-flex" id="wrapper">

    <!--////////////////////////////////////////////Open-Sidebar//////////////////////////////////////////////////////////////////-->

    <div class="bg-light border-right" id="sidebar-wrapper" style="background-color:#666666!important;">

        <div class="sidebar-heading sidebarpos"><h3>Pos System </h3></div>
        <img src="images/dashnavimage.jpeg" alt="" class="sideimage">
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="fas fa-home"></i>Dashboard</a>
            <a href="customer.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="fas fa-user-check"></i>Customer</a>
            <a href="item.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="fas fa-archive"></i>Item</a>
            <a href="order.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="far fa-chart-bar"></i>Order</a>
            <a href="invoice.php" class="list-group-item list-group-item-action bg-dark sidetext"><i class="far fa-file-alt"></i>View Order</a>
        </div>
    </div>

    <!--////////////////////////////////////////////Close-Sidebar//////////////////////////////////////////////////////////////////-->

    <!--////////////////////////////////////////////////Open-Content/////////////////////////////////////////////////////////////////-->

    <div id="page-content-wrapper">
        <!--/////////////////////////////////////////////////Open-Headbar////////////////////////////////////////////////////////////-->
        <nav class="navbar navbar-expand-lg navbar-light border-bottom headbar" id="headbar">
            <button type="button" class="btn btn-danger" id="menu-toggle"><i class="fas fa-sliders-h fa-2x"></i></button>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: white!important;"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0" id="headicon">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Search From
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Order ID</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Order Name</a>
                        </div>
                    </li>


                    <button class="btn btn-primary searchicon" type="button">
                        <input type="search" placeholder="  Search" class="search">
                        <i class="fas fa-search fa-1x"></i>
                    </button>

                    <ul class="navbar-nav ml-auto ml-md-0">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-2x navicon"></i>
                                <span class="badge badge-danger headiconnum" >9+</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                                <a class="dropdown-item" href="#">New Notification</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-2x navicon"></i>
                                <span class="badge badge-danger headiconnum">7+</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                                <a class="dropdown-item" href="#">New Massages</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-2x navicon" style="color: #ffcc80"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Activity Log</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </div>
                        </li>
                    </ul>

                </ul>
            </div>
        </nav>
        <!--/////////////////////////////////////Close-Headbar///////////////////////////////////////////////////////////////////////-->

        <!--////////////////////////////////////Close-Custsection/////////////////////////////////////////////////////////////////////////   -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="content">

                    <div class="alert alert-dark" role="alert">

                        <h4><a href="index.php" class="contentsidebar">Dashboard/</a>Order Form</h4>
                    </div>
                    <h4 class="ui dividing header" style="font-size: 20px;color: #0e8c8c">Order Information</h4><br>
                    <div class="ui form">
                        <div class="two fields">

                            <div class="field">
                                <label style="font-size: 15px">Order ID</label>
                                <input placeholder="Order Id" type="text" id="orderid">
                            </div>
                            <div class="field">
                                <label style="font-size: 15px">Order Name</label>
                                <input placeholder="Order Name"  type="text" id="ordername">
                            </div>
                        </div>
                        <div class="two fields">

                            <div class="field">
                                <label style="font-size: 15px">Number Of Orders</label>
                                <input placeholder="No:Orders" type="text" id="numoforder">
                            </div>
                            <div class="field">
                                <label style="font-size: 15px">Store Keeper Name</label>
                                <input placeholder="Store Keeper Name" type="text" id="storekeepname">
                            </div>
                        </div>
                    </div>
                    <form class="ui form">
                        <form class="ui form">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label style="font-size: 15px">Date</label>
                                        <input  type="text" id="orderdate" placeholder="Date">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </form>
                    <br>
                    <table class="ui celled table" style="border: 1px solid black" id="orderfrom">
                        <thead>
                        <tr><th style="background: #ccccff">Order ID</th>
                            <th style="background: #ccccff">Order Name</th>
                            <th style="background: #ccccff">Number Of Orders</th>
                            <th style="background: #ccccff">Store Keeper Name</th>
                            <th style="background: #ccccff">Date</th>
                            <th style="background: #00b300">Edit</th>
                            <th style="background: #ff1a1a">Delete</th>
                        </tr></thead>
                        <tbody>

                        </tbody>
                    </table>

                    <div class="ui buttons" style="position: fixed;top: 106px;right: 14px;">
                        <button class="ui button" style="background-color: #0d71bb" id="btnorderadd">Add Item</button>
                        <div class="or"></div>
                        <button class="ui positive button" style="background-color: #a3a375" id="btnrefresh">Refresh From</button>
                    </div>

                </div>
                <!--////////////////////////////////////Close-Custsection/////////////////////////////////////////////////////////////////////////          -->


            </div>


            <div>
                <a href="#"id="specialbtn"><i class="fas fa-arrow-circle-up fa-4x" style="color: red" id="aa"></i></a>
            </div>
            <!--//////////////////////////////////////////////Close-Content/////////////////////////////////////////////////////////-->

        </div>
    </div>
</div>



<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/myjs.js"></script>
</body>
<footer>
    <div style="width: 100%;height: 60px;background-color: #666666;">
        <div id="socialicon">
            <button class="ui circular facebook icon button">
                <i class="fab fa-facebook-f"></i>
            </button>
            <button class="ui circular twitter icon button">
                <i class="fab fa-twitter"></i>
            </button>
            <button class="ui circular linkedin icon button">
                <i class="fab fa-linkedin-in"></i>
            </button>
            <button class="ui circular google plus icon button">
                <i class="fab fa-google"></i>
            </button>
        </div>
    </div>
</footer>
</html>

