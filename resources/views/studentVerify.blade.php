<?php
/*use Illuminate\Support\Facades\DB;
use App\students;

$student = DB::table('students')->where('accountStatus','=','inActive')->get();*/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Hostel Management System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <!-- <div class="sidebar" data-background-color="white" data-active-color="danger"> -->

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

<!-- <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href=" {{ url('dashboard') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div> -->

    <div class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notifications</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                        <li>
                            <a href="logOut">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <h2>Students Information</h2>
                <table class="table" border="1px">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Education</th>
                        <th>Institution</th>
                        <th>Mobile No</th>
                        <th>Local Guardian</th>
                        <th>Guardian Mobile No</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($t)>0)
                        @foreach($t as $t)
                            @if (!empty ($t->firstName) || !empty ($t->lastName) || !empty ($t->email) || !empty ($t ->dateOfBirth) || !empty ($t ->address) || !empty ($t->education) || !empty ($t->institution) || !empty ($t->localGuardian) || !empty ($t->guardianNo))
                                <tr>
                                    <td>{{ $t ->firstName }}</td>
                                    <td>{{ $t ->lastName }}</td>
                                    <td>{{ $t ->email }}</td>
                                    <td>{{ $t ->username }}</td>
                                    <td>{{ $t ->dateOfBirth }}</td>
                                    <td>{{ $t ->address }}</td>
                                    <td>{{ $t ->education }}</td>
                                    <td>{{ $t ->institution }}</td>
                                    <td>{{ $t ->mobileNo }}</td>
                                    <td>{{ $t ->localGuardian }}</td>
                                    <td>{{ $t ->guardianNo }}</td>
                                    <td><a href="studentDetails/{{$t->id}}" class="btn btn-default">Details</a></td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">No Payments Requests</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <!-- <ul>

                        <li>
                            <a href="#">

                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav> -->
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made by <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Pranta, Joy, Abir and Ashu.</a>
                    </div>
                </nav>
            </div>
        </footer>

        <!-- </div> -->
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
