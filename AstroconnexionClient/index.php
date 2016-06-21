<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" href="../../favicon.ico">

        <title>Astroconnexion</title>

        <!-- Bootstrap -->
        <link href="css/index.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body class="login" >
        
        <div id="facebook-Bar">
          <div id="facebook-Frame">
            <div id="logo"> <a href="#index.php">Astroconnexion</a> </div>
            <div id="header-main-right">
              <div id="header-main-right-nav">
                <form method="get" action="function/loginUser.php" id="login_form" name="login_form">
                  <table border="0" style="border:none">
                    <tr>
                      <td ><input type="text" tabindex="1"  id="email" placeholder="Email" name="email" class="inputtext radius1" value=""></td
                      >
                      <td ><input type="password" tabindex="2" id="password" placeholder="Password" name="password" class="inputtext radius1" ></td>
                      <td ><input type="submit" class="fbbutton" name="login" value="Login" /></td>
                    </tr>
                    <tr>
                      <td><label>
                          <input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
                          <span style="color:#ccc;">Keep me logged in</span></label></td>
                      <td><label><a href="" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- header ends here -->
        
        <div class="loginbox radius">
          <h2 style="color:#141823; text-align:center;">Welcome to Astroconnexion</h2>
          <div class="loginboxinner radius">
            <div class="loginheader">
              <h4 class="title">Discover your Sun and Ascendant</h4>
            </div>
            <!--loginheader-->
            <div class="loginform">
              <form id="login" action="form/insertuser.php" method="post">
                <p>
                  <input type="text" id="firstName" name="firstName" placeholder="First Name" value="" class="radius mini" />
                  <input type="text" id="lastName" name="lastName" placeholder="Last Name" value="" class="radius mini" />
                </p>
                <p>
                  <input type="date" id="birthdate" name="birthdate" value="" class="radius" />
                </p>
                <p>
                  <input type="text" id="birthplace" name="birthplace" placeholder="Birthplace" class="radius" />
                </p>
                <p>
                  <input type="time" id="birthtime" name="birthtime" placeholder="Enter the time you had born" class="radius" />
                </p>
                <p>
                  <input type="email" id="email" name="email" placeholder="Enter your email" class="radius" />
                </p>
                <p>
                  <input type="password" id="password" name="password" placeholder="Password" class="radius" />
                </p>
                <p>
                  <button class="radius title" name="signup">Sign Up for Astroconnexion</button>
                </p>
              </form>
            </div>

            <!--loginform-->
          </div>
          <!--loginboxinner-->
        </div>
        <!--loginbox-->

    </body>
</html>