<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Page</title>
<meta charset="utf-8">
<link href="rcss/StyleWebsite.css" rel="stylesheet" type="text/css"/>
<link href="rcss/StyleRegister.css" rel="stylesheet" type="text/css"/>
<link rel="icon" href="rimages/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="rimages/favicon.ico" type="image/x-icon">
<link href="rcss/StyleGallary.css" rel="stylesheet" type="text/css"/>
<script src="rjs/jquery.js"></script>
<script src="rjs/jquery-migrate-1.1.1.js"></script>
<script src="rjs/bgstretcher.js"></script>
<script src="rjs/forms.js"></script>

<link href="generic.css" rel="stylesheet" type="text/css" />
<link href="rangular/bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
<script src="rangular/bower_components/angular/angular.js"></script>
<script src="rangular/bower_components/toastr/toastr.js"></script>
<script src="rangular/bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
<div class="extra-block">
    <header>
    <div class="row-nav">
      <div class="main">
        <h1 class="logo"><a href="index.html"><img alt="" src="rimages/logo.png"></a></h1>
        <nav>
          <ul class="menu">
            <li><a href="homepage.php">Home</a></li>  
            <li class="current"><a href="loginpage.php">Login</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <section id="content">
    <form class="form-horizental" method="get" action="index.php">
        <div class="clear"></div> 
        <div id="welcomeMsg">
        <div id="leftline">
        </div>
        <div id="textWelcome">
            <span>Sign In</span>
        </div>
        <div id="rightLine">
        </div>
         </div> <br>
		<div class="login-box">
			<div class="box-header"><br/>
				<h2>Enter Details</h2>
			</div><br/><br/>
                    <div class="row">
                                 <div class="col-sm-6">
                      <label class="col-sm-3 control-label">
                        Email Address
                     </label>
                     <div class="col-sm-8">
                          <div class="fg-line">
                            <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input class="form-control" type="email" name="email"required="true">
                      </div>

                    </div></div></div>

                       <div class="col-sm-6">
                      <label class="col-sm-3 control-label">
                    Password
                     </label>
		               	<!--Make This a password field with validation-->
                    <div class="col-sm-8">
                          <div class="fg-line">
                            <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                       <span class="glyphicon glyphicon-lock"></span>
                        </span>
		              <input class="form-control" type="password" name="password" ng-required="true">
                      </div></div></div></div>

                  </div>
                    <br/>
            <div class="modal-footer">
              <button type="submit"  class=" btn btn-default btn-lg"  value="Login" name="btnLogin">Sign In</button>
                <span> </span><span> </span><span> </span>
                <!--<a class="btn btn-default btn-lg" role="button" name="btnSignUp" href="regpage.php" value="Register">Register</a>-->
            </div>
        </div>
      
      </form>
      
    </section>
</div>

<div class="block">
<div id="footer">
         <!--div class="connect">
            <!--div>
		<h1>FOLLOW OUR MISSIONS ON</h1>
            <div>
                <a href="https://www.facebook.com/phinda.enko/" class="facebook">facebook</a>
		<a href="https://twitter.com/tamiie_07" class="twitter">twitter</a>
		<a href="https://plus.google.com/u/0/" class="googleplus">googleplus</a>
            </div>
         </div>
    </div-->
    <div class="footnote">
        <div>
            <p>This application copyright © Royal Salon Project 2016. All rights reserved.</p>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>