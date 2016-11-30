<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<link href="rcss/StyleWebsite.css" rel="stylesheet" type="text/css"/>
<link rel="icon" href="rimages/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="rimages/favicon.ico" type="image/x-icon">
<script src="rjs/jquery.js"></script>
<script src="rjs/jquery-migrate-1.1.1.js"></script>
<script src="rjs/bgstretcher.js"></script>
<script src="rjs/forms.js"></script>
</head>
<body>
<div id="wrapper">
<div class="extra-block">
  <div class="row-top">
    <div id="log">
            <ul class="menu">
                    <li><a href="loginpage.php">Login</a></li>
                    <li><a href="regpage.php">Register</a></li>
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
              <li><a href="homepage.php">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="servicespage.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="current"><a href="contacts.php">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <section id="content">
    <div class="main-block">
      <div class="container_12">
        <div class="wrapper border-vert">
          <article class="grid_5">
            <h3>Postal Address</h3>
            <div class="map">
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
            </div>
            <dl class="address">
              <dt>The Company Name Inc.<br>
                8901 Marmora Road,<br>
                Glasgow, D04 89GR.</dt>
              <dd> <span>Freephone:</span> +1 800 559 6580 </dd>
              <dd> <span>Telephone:</span> +1 800 603 6035 </dd>
              <dd> <span>FAX:</span> +1 800 889 9898 </dd>
            </dl>
          </article>
          <article class="grid_5 prefix_2">
            <h3>Contact Form</h3>
            <form id="contact-form" action="#">
              <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
              <fieldset>
                <div>
                  <label class="name">
                    <input type="text" value="Name:">
                    <br>
                    <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div>
                  <label class="email">
                    <input type="email" value="E-mail:">
                    <br>
                    <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div>
                  <label class="phone">
                    <input type="tel" value="Phone:">
                    <br>
                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div>
                  <label class="message">
                    <textarea>Message:</textarea>
                    <br>
                    <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                </div>
                <div class="buttons-wrapper"><a class="button" data-type="reset">Clear</a><a class="button" data-type="submit">Send</a></div>
              </fieldset>
            </form>
          </article>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="block">
 <div id="footer">
            <div class="connect">
                <div>
                    <h1>FOLLOW OUR MISSIONS ON</h1>
                    <div>
                        <a href="https://www.facebook.com/phinda.enko/" class="facebook">facebook</a>
			<a href="https://twitter.com/tamiie_07" class="twitter">twitter</a>
			<a href="https://plus.google.com/u/0/" class="googleplus">googleplus</a>
                    </div>
                </div>
            </div>
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