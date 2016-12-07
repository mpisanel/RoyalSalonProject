<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta charset="utf-8">

<link rel="icon" href="rimages/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="rimages/favicon.ico" type="image/x-icon">
<link href="rcss/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="rcss/StyleWebsite.css" rel="stylesheet" type="text/css"/>
<link href="rcss/StyleGallary.css" rel="stylesheet" type="text/css"/>
<script src="rjs/jquery.js"></script>
<script src="rjs/jquery-migrate-1.1.1.js"></script>
<script src="rjs/bgstretcher.js"></script>
<script src="rjs/jquery.elastislide.js"></script>
<script src="rjs/jquery.fancybox.pack.js"></script>
<script>
$(document).ready(function () {
   $('#carousel').elastislide({
        imageW: 300,
        margin: 20,
        minItems: 3
    });
    $('.magnifier').fancybox();
    $(".view").hover(
        function () {
            $(this).find("img").stop().animate({
                opacity: 0.5
            }, "normal")
        },
        function () {
            $(this).find("img").stop().animate({
                opacity: 1
            }, "normal")
        })
})
</script>
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
            <li><a href="regpage.php">Register</a></li>
            <li><a href="about-us.html">Rewards</a></li>
            <li><a href="serviceslist.php">Services</a></li>
            <li><a href="contacts.php">Reports</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
  <section id="content">
      <div class="clear"></div> 
        <div id="welcomeMsg">
        <div id="leftline">
        </div>
        <div id="textWelcome">
            <span>Gallery</span>
        </div>
        <div id="rightLine">
        </div>
         </div> <br>  
    <div class="main-block">
      <div class="main">
        <!--h3>Our Gallery</h3-->
        <div id="carousel" class="es-carousel-wrapper ">
          <div class="es-carousel">
            <ul>
              <li>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img1.jpg" alt=""><span></span></a> </figure>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img4.jpg" alt=""><span></span></a></figure>
              </li>
              <li>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img2.jpg" alt=""><span></span></a> </figure>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img5.jpg" alt=""><span></span></a> </figure>
              </li>
              <li>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img3.jpg" alt=""><span></span></a> </figure>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img6.jpg" alt=""><span></span></a> </figure>
              </li>
              <li>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img1.jpg" alt=""><span></span></a> </figure>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img4.jpg" alt=""><span></span> </a></figure>
              </li>
              <li>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img2.jpg" alt=""><span></span></a> </figure>
                <figure class="img-rounded"><a class="view magnifier" data-fancybox-group="gallery" href="rimages/image-blank.png" title="Image Caption"><img src="rimages/page4-img5.jpg" alt=""><span></span></a> </figure>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
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
            <p>This site copyright © Royal Hair S 2016. All rights reserved.</p>
        </div>
    </div>
</div>
</div>
</body>
</html>