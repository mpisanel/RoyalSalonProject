
<?php
    if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    require("connection.php");

    if(isset($_GET['page'])){

        $pages=array("products", "cart");

        if(in_array($_GET['page'], $pages)) {

            $_page=$_GET['page'];
        }
        else {

            $_page="products";
        }
    }
    else {

        $_page="products";
    }
?>
<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Cart Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
       <script src="/bower_components/angular/angular.js"></script>
    <script src="/bower_components/toastr/toastr.js"></script>
   <script src="bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>
    <link href="rcss/StyleTable.css" rel="stylesheet" type="text/css"/>
    <link href="rcss/StyleWebsite.css" rel="stylesheet" type="text/css"/>
    <link href="rcss/StyleGallary.css" rel="stylesheet" type="text/css"/>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
</head>

<body><div id="wrapper">
    <form method="get" action="serviceslist.php">
    
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
            <li><a href="regpage.php">Register</a></li>
            <li><a href="about-us.html">Rewards</a></li>
            <li><a href="serviceslist.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contacts.php">Reports</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
        <section id= "content">
             <div class="">

 <div id= "subContent">
<?php
	require($_page.".php");
?>
<?php
	if($_page!="cart")
	{
		?>
		<div id="sidebar">
			<h1>Hair Style</h1>
			<?php
				if(isset($_SESSION['cart']))
				{

					$sql="SELECT * FROM services WHERE service_id IN (";

					foreach($_SESSION['cart'] as $id => $value)
					{
						$sql.=$id.",";
					}

					$sql=substr($sql, 0, -1).") ORDER BY name ASC";
					$query=mysql_query($sql);

					while($row=mysql_fetch_array($query))
					{
						?>
							<p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['service_id']]['quantity'] ?></p>
						<?php
					}
					?>
                                                       
					<hr />
                                        <a class="btn btn-primary btn-lg active " role="button" href="serviceslist.php?page=cart" >Confirm Hair Style & Check Out</a>
					<?php
				}
				else
				{
					echo "<p>No services found. Please add service.</p>";
				}
			?>
		</div>
<?php }?>
 </div>
             </div>  
  </section>
	<div class="clear"></div>
		<div id="footer">
		
		<div class="footnote">
			<div>
				<p>This site copyright © African Art Tinkers 2016. All rights reserved.</p>
			</div>
		</div>
	</div>
  
	</form>
    </div>
</body>
</html>
