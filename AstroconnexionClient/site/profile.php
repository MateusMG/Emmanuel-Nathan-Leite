<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#profile.php">Astroconnexion</a>
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
                        <a href="#profile.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
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
                            Profile <small>Sun and Ascendant</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Profile
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

                <h2 align="center">Welcome to your personal area</h2>
                <p>
                In your personal area you can discover your Sun and Ascedant and can read your horoscope to know what the stars reserve for you.
                </p>
                <hr>
                <br>
                <div>
               
                <div class="sunAsc">

                    <form name="astros">
                        <TABLE  border="0" cellspacing="1" cellpadding="1" align="center">
                        <tr>
                                <TD >
                                    <select name="dia">
                        <option>00
                        <option>01
                        <option>02
                        <option>03
                        <option>04
                        <option>05
                        <option>06
                        <option>07
                        <option>08
                        <option>09
                        <option>10
                        <option>11
                        <option>12
                        <option>13
                        <option>14
                        <option>15
                        <option>16
                        <option>17
                        <option>18
                        <option>19
                        <option>20
                        <option>21
                        <option>22
                        <option>23
                        <option>24
                        <option>25
                        <option>26
                        <option>27
                        <option>28
                        <option>29
                        <option>30
                        <option>31
                        </select><font color="black" size="4">DAY</font>
                                </TD>
                                <TD >
                                    <select name="mes">
                        <option>00
                        <option>01
                        <option>02
                        <option>03
                        <option>04
                        <option>05
                        <option>06
                        <option>07
                        <option>08
                        <option>09
                        <option>10
                        <option>11
                        <option>12
                        </select><font color="black" size="4">MONTH</font>
                                </TD>
                                <TD >
                                    <select name="ano">
                        <option>0000
                        <option>1931
                        <option>1932
                        <option>1933
                        <option>1949
                        <option>1950
                        <option>1951
                        <option>1952
                        <option>1953
                        <option>1963
                        <option>1964
                        <option>1965
                        <option>1966
                        <option>1967
                        <option>1968
                        <option>1985
                        <option>1986
                        <option>1987
                        <option>1988
                        <option>1989
                        <option>1990
                        <option>1991
                        <option>1992
                        <option>1993
                        <option>1994
                        <option>1995
                        <option>1996
                        <option>1997
                        <option>1998
                        <option>1999
                        <option>2000
                        <option>2001
                        <option>2002
                        </select><font color="black" size="4">YEAR</font>
                                </TD>
                                <TD >
                                <select name="hora">
                        <option>00
                        <option>01
                        <option>02
                        <option>03
                        <option>04
                        <option>05
                        <option>06
                        <option>07
                        <option>08
                        <option>09
                        <option>10
                        <option>11
                        <option>12
                        <option>13
                        <option>14
                        <option>15
                        <option>16
                        <option>17
                        <option>18
                        <option>19
                        <option>20
                        <option>21
                        <option>22
                        <option>23
                        <option>24
                        </select><font color="black" size="4">HOURS</font>
                                </TD>
                                <TD >
                            <select name="minuto">
                        <option>00
                        <option>01
                        <option>02
                        <option>03
                        <option>04
                        <option>05
                        <option>06
                        <option>07
                        <option>08
                        <option>09
                        <option>10
                        <option>11
                        <option>12
                        <option>13
                        <option>14
                        <option>15
                        <option>16
                        <option>17
                        <option>18
                        <option>19
                        <option>20
                        <option>21
                        <option>22
                        <option>23
                        <option>24
                        <option>25
                        <option>26
                        <option>27
                        <option>28
                        <option>29
                        <option>30
                        <option>31
                        <option>32
                        <option>33
                        <option>34
                        <option>35
                        <option>36
                        <option>37
                        <option>38
                        <option>39
                        <option>40
                        <option>41
                        <option>42
                        <option>43
                        <option>44
                        <option>45
                        <option>46
                        <option>47
                        <option>48
                        <option>49
                        <option>50
                        <option>51
                        <option>52
                        <option>53
                        <option>54
                        <option>55
                        <option>56
                        <option>57
                        <option>58
                        <option>59
                        </select><font color="black" size="4">MINUTES</font>
                                </TD>
                            </TR>
                        <tr><td colspan=5><font color="black" size="3">If the years listed, none is the birth leave this field blank, otherwise select it</font></tr>
                        <tr><td valign=bottom><input  type="button" name="Submit" value="Calculate" onClick="validar(document.astros)"></td>
                        <td colspan=4><br><font color="black" size="4">Sign:</font>
                        <input type="text" name="siga" size="15" maxlength="30" value="">
                        <font color="black" size="4">Regent:</font>
                        <input type="text" name="rege" size="15" maxlength="30" value="">
                        <font color="black" size="4">Ascendant:</font>
                        <input type="text" name="asce" size="15" maxlength="30" value="">
                        </td>
                        </tr>
                        </TABLE><br>
                        OBS: How it is not being done the horoscope. Your ascendant can be an sign before or after calculated.<br><br>
                        Here, new mathematical calculations were made and tabulated to indicate the ascendant according to the time of a particular time and place.<br>
                        The calculate of the ascendant is important because the astrological circle it is the horizon line (horizontal line that divides the two hemispheres) determining the 1st house of the birth chart that is being done. This process astrologers call "domification".
                        The domification method preferred by European astrologers is the monk Matheus Campanus, in sec III. The Americans astrologers prefer the friar Placidus Titus (1608).<br><br>
                        
                        <p>
                        In your Signs area you can read more about your Sign and Ascedent to discover a little more of yourself.
                        </p>
                </form>

                </div>    
                <hr>
                <br>
                <h3 align="center">Calculate here your Horoscope for today</h3>
                <div data-name="Today's Horoscope" align="center">
                    <iframe src="http://www.astrotheme.fr/partenaires/horoscope.php?partenaire=9999&lang=en" frameborder="0" width="600" height="580"></iframe>
                </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

    <script type="text/javascript">
        function validar(form) {
    
    var erro = 0;
    var odia = form.dia.selectedIndex;
    if ( odia <  1 ) erro = erro + 2;
    var omes = form.mes.selectedIndex;
    if ( omes <  1 ) erro = erro + 4;
    var ahora = form.hora.selectedIndex;
    if ( ahora <  1 ) erro = erro + 8;
    var ominuto = form.minuto.selectedIndex;
    var oano = form.ano.selectedIndex;
    var ponteiro1 =  omes * 30 + odia;  
    if (ponteiro1 < 111) ponteiro1 = ponteiro1 + 360;
    var i = 0;  var signo = 0; salto = 0; verao = 0;
    var indsigno = new Array(0,140,170,200,230,262,292,322,351,381,410,439,470);
    var signos = new Array('','Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricon', 'Aquarius', 'Pisces');
    var regentes = new Array('','Mars', 'Venus', 'Mercury', 'Moon', 'Sun', 'Mercury', 'Venus', 'Pluto', 'Jupiter', 'Saturn', 'Uranus', 'Neptune');

            
    if ( omes == 1) 
        {
        if ( (oano == 11) && (odia > 30) ) verao = 1;
        else
        if ( (oano == 23) && (odia < 32) ) verao = 1;
        else
        if ( (oano == 19) && (odia < 30) ) verao = 1;
        }
    else
    if ( omes == 2) 
        {
        if  (oano == 6)  verao = 1;
        else
        if  (oano == 7) verao = 1;
        else
        if  (oano == 8)  verao = 1;
        else
        if ( (oano == 17) && ( odia  < 15) ) verao = 1;
        else
        if ( (oano == 18) && ( odia < 8) ) verao = 1;
        else
        if ( (oano == 20) && ( odia < 12) ) verao = 1;
            else
        if ( (oano == 21) && ( odia  < 18) ) verao = 1;
        else
        if ( (oano == 22) && ( odia  < 20) ) verao = 1;
        else
        if ( (oano == 24) && ( odia < 21) ) verao = 1;
            else
        if ( (oano == 25) && ( odia  < 20) ) verao = 1;
        else
        if ( (oano == 26) && ( odia < 12) ) verao = 1;
        else
        if ( (oano == 27) && ( odia < 17) ) verao = 1;
            else
        if ( (oano == 29) && ( odia < 22) ) verao = 1;
        else
        if ( (oano == 30) && ( odia  < 28) ) verao = 1;
        else
        if ( (oano == 31) && ( odia < 19) ) verao = 1;
        else
        if ( (oano == 32) && ( odia  < 18) ) verao = 1;
        }
    else
    if ( omes == 3) 
        {   
        if (oano == 2)  verao = 1;
        else
        if (oano == 10)  verao = 1;
        else
        if (oano == 11)  verao = 1;
        else
        if (oano == 12)  verao = 1;
        else
        if ( (oano == 13) && ( odia  < 2) ) verao = 1;
        else
        if ( (oano == 14) && ( odia < 2) ) verao = 1;
        else
        if ( (oano == 16) && ( odia  < 16) ) verao = 1;
        else
        if ( (oano == 28) && ( odia  < 2) ) verao = 1;
        }
    else
    if ( omes == 4) 
        {
        if ( (oano == 5) && ( odia < 17) ) verao = 1;
        }
    else
    if ( omes == 10) 
        {
        if ( (oano == 1) && ( odia  > 2 ) && ( ahora > 11) ) verao = 1;
        else
        if ( (oano == 2) && ( odia > 2 ) && ( ahora  > 23) ) verao = 1;
        else
        if ( (oano == 9) && ( odia > 22)  ) verao = 1;
        else
        if ( (oano == 16) && ( odia> 23) ) verao = 1;
        else
        if ( (oano == 17) && ( odia > 24) ) verao = 1;
        else
        if ( (oano == 18) && ( odia  > 15) ) verao = 1;
        else
        if ( (oano == 19) && ( odia  > 14) ) verao = 1;
        else
        if ( (oano == 20) && ( odia  > 20) ) verao = 1;
        else
        if ( (oano == 21) && ( odia  > 19) ) verao = 1;
        else
        if ( (oano == 22) && ( odia  > 24) ) verao = 1;
        else
        if ( (oano == 23) && ( odia > 16) ) verao = 1;
        else
        if ( (oano == 24) && ( odia  > 15) ) verao = 1;
        else
        if ( (oano == 25) && ( odia  > 14) ) verao = 1;
        else
        if ( (oano == 26) && ( odia > 5) ) verao = 1;
        else
        if ( (oano == 27) && ( odia > 5) ) verao = 1;
        else
        if ( (oano == 28) && ( odia  > 10) ) verao = 1;
        else
        if ( (oano == 29) && ( odia > 2) ) verao = 1;
        else
        if ( (oano == 30) && ( odia  > 7) ) verao = 1;
        else
        if ( (oano == 31) && ( odia  > 13) ) verao = 1;
        }
    else
    if ( omes == 11) 
        {
        if ( (oano == 11) && ( odia > 29) ) verao = 1;
        else
        if  (oano == 12)  verao = 1;
        else
        if  (oano == 13)  verao = 1;
        else
        if ( (oano == 15) && ( odia > 1) ) verao = 1;
        else
        if ( (oano == 32) && ( odia  > 2) ) verao = 1;
        }
    else
    if ( omes == 12)
        {
        if  (oano == 4)  verao = 1;
        else
        if  (oano  == 5)  verao = 1;
        else
        if  (oano == 6)  verao = 1;
        else
        if  (oano == 7)  verao = 1;
        else
        if ( (oano == 9) && ( odia > 8) ) verao = 1;
        }

    if ( verao == 1 ) 
            {
                     if ( ahora > 0 ) ahora = ahora - 1; 
            }

    while (signo == 0) 
            { 
                if ( ponteiro1  <  indsigno[i] ) signo = i; 
                i++;
            }
                        
    if  ( (ahora > 6 ) && ( ahora<= 8) ) salto = 0;
    else
    if ( (ahora > 8 ) && ( ahora<= 10) ) salto = 1;
    else
    if ( (ahora > 10 ) && ( ahora<= 12) ) salto = 2;
    else
    if ( (ahora > 12 ) && ( ahora<= 14) ) salto = 3;
    else
    if ( (ahora > 14 ) && ( ahora<= 16) ) salto = 4;
    else
    if ( (ahora > 16 ) && ( ahora<= 18) ) salto = 5;
    else
    if ( (ahora > 18 ) && ( ahora<= 20) ) salto = 6;
    else
    if ( (ahora > 20 ) && ( ahora<= 22) ) salto = 7;
    else
    if ( (ahora > 22 ) && ( ahora<= 24) ) salto = 8;
    else
    if ( (ahora > 0 ) && ( ahora<= 2) ) salto = 9;
    else
    if ( (ahora > 2 ) && ( ahora<= 4) ) salto = 10;
    else
    if ( (ahora > 4 ) && ( ahora<= 6) ) salto = 11;

    if ( erro == 2 ) alert("Missing the day of birth, so the result will be invalid");
    else
    if ( erro == 4 ) alert("Missing the month of birth, so the result will be invalid");
    else
    if ( erro == 8 ) alert("Missing the hour of birth, so the result will be invalid");
    else
    if ( erro == 6 ) alert("Missing the day and month of birth, so the result will be invalid");
    else
    if ( erro == 10 ) alert("Missing the day and hour of birth, so the result will be invalid");
    else
    if ( erro == 12) alert("Missing the month and hour of birth, so the result will be invalid");
    else
    if ( erro == 14 ) alert("Missing the day, month and hour of birth, so the result will be invalid");

    erro = 0;
        
    form.siga.value= signos[signo];
    form.rege.value= regentes[signo];
    signo = signo + salto; 
    if (signo > 12) signo = signo - 12;
      form.asce.value= signos[signo];
    
    }

    </script>

</body>

</html>
