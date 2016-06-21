<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scorpio</title>

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
                <a class="navbar-brand" href="home.php">Astroconnexion</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Emmanuel Nathan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
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
                            Scorpio <!--<small>Sun and Ascendant in Aries</small>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Sun and Ascendant in Scorpio
                            </li>
                        </ol>
                    </div>
                </div>

               
                <div class="ariesText">
                    <form name="astros">
                        <TABLE  border="0" cellspacing="1" cellpadding="1" align="center">
                            <div class="sunInScorpio" >
                                <h1>Sun in Scorpio</h1>
                                <p>
                                    Like Cancer, Scorpio is a water sign, but the two react in very different ways. For example, if you hurt one person Cancer, she will respond directly, will accuse the coup, expressing their feelings, whether by word, or by expressions. Already Scorpio is a fixed water sign mode, you can save hurts for an indefinite time, and that usually only reveal his feelings if this is it advantageous, and sometimes only when there is the opportunity for revenge.
                                    People who are born with the Sun in Scorpio are known for their strength and their determination. If you hear the stories of Scorpios people will probably notice that many of them have experienced trauma, lived adventures, challenges faced, etc. Or at least, you will realize that people who are not content to contemplate the outer layers of reality and exceeded the safe limits of the shallowness of the soul. What drives someone Scorpio is not the prestige. What matters to a Scorpio is the true power, not apparent. The person Scorpio despises the weak at the same rate that challenges the powerful.
                                </p>
                                <br>
                                <h1>Ascendant in Scorpio</h1>
                                <p>
                                    Scorpio is a water sign and fixed, female and phlegmatic nature, being nocturnal home and the enjoyment of Mars. Nowhere else in the zodiac, the planet Mars is so well positioned especially in the first decanate of the sign. It is a common ancestor in the northern hemisphere, since there it has long ascent, being less recurring in the southern hemisphere.

                                    <br>
                                    <br>
                                    In Hourly astrology this is an up great, but it will be difficult to extract the native a good context of the situation, because it is a naturally suspicious person, you must insist that it is more open. Usually when this upward appears the person is driven by some kind of trouble to ask the question, as it is, so someone reliable.

                                    <br>
                                    <br>
                                    In natal astrology, this sign indicates people look robust, stocky, muscular for men, and threatening and sexy features for women. If Mars is too weak, it can indicate fat, otherwise indicates a great-looking person, strong, imposing and willing and bold in its own position, and all this is true the more power you have Mars on the map. As Scorpion is a silent sign, one tends to shyness and be more defensive. It is famous the look upward in Scorpio, intense and penetrating, but I would say that even if the carrier of this person ascending born without eyes, his mere presence in an environment makes people around "tremble and despair." It has an intensity and as invasive and incisively to act even without saying a single word intimidate and commands respect. Physiologically indicates very strong and sturdy constitution of people, but if Mars is weak, the person ends up being more impulsive, clumsy and disorderly, which contributes to weaken health.

                                    <br>
                                    <br>
                                    They may have relationship problems, especially if Mars is in Air signs or fire, or weakened in any way, because in these cases can not maintain self control, crossing the line in their relationships, abusing the trust and acting in the person of despotic form and tyrannical. They are strong, demanding, persevering people, always finishing what they start and keeping his word to the end. Faithful, reliable and reformers hate stagnation, always looking for self improvement and purification of himself and the people around you.

                                </p>


                            </div>
                        </TABLE>

                </form>

                </div>    

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
