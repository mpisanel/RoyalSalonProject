<?php
    include_once "connection.php";
    include_once "../royalsalonproject/rclasses/registerpage.php";
    $name = "";
    $surname = "";
    $address = "";
    $email = "";
    $phoneNo= "";
    $password = "";
    if(isset($_POST["btnSubmit"]))
    {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phoneNo = $_POST["phone"];
        $password = $_POST["password1"];
       
            if((class_exists("registerpage")))
            {
                $regObject = new registerpage();
            }
          
            $regObject->setName($name);
            $regObject->setSurname($surname);
            $regObject->setAddress($address);
            $regObject->setEmail($email);
            $regObject->setPhoneNo($phoneNo);
            $regObject->setPassword($password);
            
           
                try{
                    $regObject->registerCustomer($regObject->getName(),$regObject->getSurname(), 
                            $regObject->getAddress(), $regObject->getEmail(), $regObject->getPhoneNo(), $regObject->getPassword());
                }catch (Exception $e)
                {
                    $e->getMessage();
                }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register Page</title>
<meta charset="utf-8">
<link href="rcss/StyleWebsite.css" rel="stylesheet" type="text/css"/>
<link href="rcss/StyleRegister.css" rel="stylesheet" type="text/css"/>
<link href="rcss/StyleGallary.css" rel="stylesheet" type="text/css"/>
<link rel="icon" href="rimages/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="rimages/favicon.ico" type="image/x-icon">
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
<div class="row-top">
     <div id="log">
            <ul class="menu">
                <li><a href="homepage.php">Logout</a></li>
            </ul>
        </div>
            <div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120">
            <input type="submit" value="search" class="tfbutton">
		</form>
            </div>
  </div>
  <header>
    <div class="row-nav">
      <div class="main">
        <h1 class="logo"><a href="index.html"><img alt="" src="rimages/logo.png"></a></h1>
        <nav>
          <ul class="menu">
            <li><a href="adminhome.php">Admin-Home</a></li>
            <li><a href="about-us.html">Rewards</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contacts.php">Reports</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>

  <section id="content">
         <div id="welcomeMsg">
        <div id="leftline">
        </div>
        <div id="textWelcome">
            <span>Register Customer</span>
        </div>
        <div id="rightLine">
        </div>
         </div> <br>
        
 <div align="center">
  <a class="btn btn-primary btn-lg active" style="width:130px;" role="button" name="btnCust" href="regpage.php" value="Submit">Customer</a>
  <a class="btn btn-success btn-lg active" style="width:130px;" role="button" name="btnEmp" href="regemployee.php" value="Submit">Employee</a>
  <a class="btn btn-default btn-lg active" style="width:130px;" role="button" name="btnAdmin" href="regadmin.php" value="Submit">Admin</a>
</div>
      <br/>
      <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
      <div class="login-box">
			<div class="box-header"><br/>
				<h2>Enter Details</h2>
			</div><br/>
                    <div class="row">
                       <div class="col-sm-6">
                      <label class="col-sm-3 control-label">
                          Name
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user"></span></span>
                          </span>
                        <input class="form-control" type="text" name="name" required="true"/>
                        </div>
                        </div></div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                          Surname
                         </label>
                         <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                           <span class="glyphicon glyphicon-user"></span></span>
                            </span>
                            <input class="form-control" type="text" name="surname" required="true"/>
                            </div>
                        </div></div></div>
                      </div><br/>

                        <div class="row" >
                           <div class="col-sm-6">
                          <label class="col-sm-3 control-label">
                          Address
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                         <span class="glyphicon glyphicon-menu-hamburger"></span></span>
                          </span>
                         <input class="form-control" type="text" name="address" required="true" />
                        </div>
                        </div> </div></div>

                         <div class="col-sm-6">
                        <label class="col-sm-3 control-label">
                         Cell Number
                       </label>
                       <div class="col-sm-8">
                            <div class="fg-line">
                              <div class="input-group input-group-lg">
                          <span class="input-group-addon">
                           <span class="glyphicon glyphicon-phone"></span>
                          </span>
                          <input class="form-control" type="text" name="phone"required="true">
                        </div>

                            </div></div></div></div><br>

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
		                <input class="form-control" type="password" name="password1" ng-required="true">
                        </div></div></div></div>

                  </div>
				<br/>
              <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-lg"  value="Submit" name="btnSubmit">Submit</button>
		                    <span> </span><span> </span>
                        <a class="btn btn-default btn-lg" role="button" name="btnBack" href="adminhome.php" value="Back">Back</a>

               </div>
    </div>
      </form>
  </section>
</div>

<div class="block">
 <div id="footer">
            <!--div class="connect">
                <div>
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
                    <p>This site copyright © Royal Salon Project 2016. All rights reserved.</p>
                </div>
            </div>
        </div>
</div>
</div>
</body>
</html>