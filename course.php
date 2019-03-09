<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.html">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Event</a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <a href="event.php">Add Event</a>
                                    </li>
                                    <li>
                                        <a href="?">View</a>
                                    </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"> Lactures</a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <a href="lacture.php">Add Lectures</a>
                                    </li>
                                    <li>
                                        <a href="?">View</a>
                                    </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"> Staff</a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <a href="staff.php">Add Staff</a>
                                    </li>
                                    <li>
                                        <a href="?">View</a>
                                    </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">Course</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="course.php">Add Course</a>
                                </li>
                                <li>
                                    <a href="?">View</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"> Results</a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <a href="results.php">Add Result</a>
                                    </li>
                                    <li>
                                        <a href="?">View</a>
                                    </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="fess.php">Fees</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="login.php"> Logout</a>

                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Course</h1>
                    </div>
                    <!-- /.col-lg-12 -->
    <div id="formdiv">
<form class="form-horizontal"  method="POST" action="addcourse.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">COURSE :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="course" placeholder="ADD COURSE">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="text">SEM :</label>
    <div class="col-sm-9"> 
        <select  class="form-control" name="sem" placeholder="SEM">
            <option>sem-1</option>
            <option>sem-2</option>
            <option>sem-3</option>
            <option>sem-4</option>
            <option>sem-5</option>
            <option>sem-6</option>

    </select>
      <!-- <input type="text" class="form-control" name="sem" placeholder="SEM">
   -->  </div>
  </div>
  <div class="form-group" >
    <label class="control-label col-sm-2" for="tetx">SUBJECT :</label>
    <div class="col-sm-9"> 
      <input type="text" class="form-control" name="subject[]" placeholder="SUBJECT" multiple/>
    </div>
    <span class="glyphicon glyphicon-plus" id="subplus" style="cursor:pointer;margin-top:10px">  </span>
  </div>
  <div id="strappend"></div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script>
                      $(document).ready(function(){
                        var str="";
                    str+="<div class='form-group subfield'>";
                    str+="<label class='control-label col-sm-2' for='text'>SUBJECT :</label>";
                    str+="<div class='col-sm-9'> ";
                    str+="<input type='text' class='form-control' name='subject[]' placeholder='SUBJECT' multiple/>";
                    str+= "</div>";
                    str+="<span class='glyphicon glyphicon-minus subminus'  style='cursor:pointer;margin-top:10px'></span>";
                    str+= "</div>";
                   
                        $("#subplus").click(function(){
                            $("#formdiv").find("#strappend").append(str);
                            
                        })
                        $(document).on("click",".subminus",function(){
                            $(this).closest(".subfield").remove();
                           
                        })
                    });
            </script>
  <!-- <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div> -->
  <div class="form-group"> 
    <div class="col-sm-offset-6 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>               
     </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
