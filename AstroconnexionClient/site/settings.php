 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Settings</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profile.php">Astroconnexion</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Wanderson</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 11:59 PM</p>
                                        <p>Será que vai dar pra passar, miga?</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Lucas Lobão</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 04:32 PM</p>
                                        <p>Eu acho que vai dar pra passar de boa. Eu to achando fácil.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Danilo Baptista</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 06:02 PM</p>
                                        <p>COMO QUE NÃO VAI DAR PRA PASSAR PORRA? SAI DE CASA, COMITEI PRA CARALHO.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Emmanuel Nathan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a href="signs.php"><i class="fa fa-fw fa-bar-chart-o"></i>Signs</a>
                    </li>
                    <li>
                        <a href="friendship.php"><i class="fa fa-fw fa-table"></i>Friends</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update your informations <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Edit
                            </li>
                        </ol>
                    </div>
                </div>
                <?php include('httpful.phar') ?>

                <?php
                $response = \Httpful\Request::get("http://localhost:83/Astroconnexion/user/?firstName={$_GET['firstName']}")->send();

                $request_response = json_decode($response->body);

                foreach($request_response as $value)
                {
                $firstName=$value->firstName;
                }
                foreach($request_response as $value)
                {
                $lastName=$value->lastName;
                }
                foreach($request_response as $value)
                {
                $birthplace=$value->birthplace;
                }
                foreach($request_response as $value)
                {
                $birthdate=$value->birthdate;
                }
                foreach($request_response as $value)
                {
                $birthtime=$value->birthtime;
                }
                foreach($request_response as $value)
                {
                $email=$value->email;
                }
                foreach($request_response as $value)
                {
                $password=$value->password;
                }
                ?>
                <h1>Altere os dados :</h1>
                <form action="updateuser.php" method="post" name="form1">
                     <table class="table"> 
                        <tr>
                           <td>Name:</td>
                           <td><input Placeholder="Inser the Name" class="form-control" type="firstName" name="firstName" value="<?php echo $firstName ?>" ></td>
                       </tr>
                       <tr>
                           <td>Last Name</td>
                           <td><input Placeholder="Insert the Last Name" class="form-control" name="lastName" value="<?php echo $lastName ?>"></td> 
                       </tr> 
                       <tr>
                           <td>Birthplace</td>
                           <td> <input Placeholder="Insert the birthplace" class="form-control" type="text" 
                           name="birthplace"  value="<?php echo $birthplace ?>"></td>
                       </tr> 
                       <tr>
                           <td>Birthdate:</td>
                           <td><input  Placeholder="Insert the birthdate" class="form-control"  name="birthdate" maxlength="8" value="<?php echo $birthdate ?>"></td>
                       </tr>
                       <tr>
                           <td>Birthtime:</td>
                           <td><input  Placeholder="Insert the birthtime" class="form-control"  name="birthtime" maxlength="8" value="<?php echo $birthtime ?>"></td>
                       </tr>
                       <tr>
                           <td>Email:</td>
                           <td><input  Placeholder="Insert the email" class="form-control"  name="email"  value="<?php echo $email ?>"></td>
                       </tr>
                       <tr>
                           <td>Password:</td>
                           <td><input  Placeholder="Insert the password" class="form-control"  name="password"  value="<?php echo $password ?>"></td>
                       </tr>
                                      
                       <tr>
                           <td>
                               <button class="btn btn-primary" type="submit"/>Update</button>
                           </td>
                       </tr>                      
                    </table>
                </form>    
                <!--
                <form id="login" action="updateuser.php" method="post">
                    <p>
                      <input type="text" id="firstName" name="firstName" placeholder="New First Name" value="" class="radius mini" />
                      <input type="text" id="lastName" name="lastName" placeholder="New Last Name" value="" class="radius mini" />
                    </p>
                    <p>
                      <input type="date" id="birthdate" name="birthdate" value="" class="radius" />
                    </p>
                    <p>
                      <input type="text" id="birthplace" name="birthplace" placeholder="New Birthplace" class="radius" />
                    </p>
                    <p>
                      <input type="time" id="birthtime" name="birthtime" placeholder="New Birthtime" class="radius" />
                    </p>
                    <p>
                    <p>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="radius" />
                    </p>
                      <input type="password" id="password" name="password" placeholder="New Password" class="radius" />
                    </p>
                    <p>
                      <button class="radius title" name="signup">Edit</button>
                    </p>
              </form>-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
