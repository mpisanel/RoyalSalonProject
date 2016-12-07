<html>

<head>
    <link href="rbower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/rbower_components/angular/angular.js"></script>
    <script src="rbower_components/angular/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/rbower_components/toastr/toastr.js"></script>
    <link href="rcss/StyleGallary.css" rel="stylesheet" type="text/css"/>
   <script src="rbower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>
</head>

 <body>

 <?php

    if(isset($_GET['action']) && $_GET['action']=="add"){

      echo "<div class='alert alert-info'>";
        echo "<label><strong>Added To Hair Style</strong></label>";
    echo "</div>";
    ?>
<?php
        $id=intval($_GET['id']);

        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity']++;

        }
		else
		{

            $sql_s="SELECT * FROM services WHERE service_id={$id}";
            $query_s=mysql_query($sql_s);

            if(mysql_num_rows($query_s)!=0){

                $row_s=mysql_fetch_array($query_s);

                $_SESSION['cart'][$row_s['service_id']]=array(
                        "quantity" => 1,
                        "price" => $row_s['price']
                    );
            }
            else
			{
                $message="This service id it's invalid!";
            }
        }
    }
?>

<?php
    if(isset($message)){

        echo "<h2>$message</h2>";
    }
?>
  <?php $sql="SELECT * FROM services";
	$query=mysql_query($sql);?>
          <table class='table table-hover'>
        <tr>
            <th><label>Service Detail</label></th>
            <th><label>Price<span></label></th>
            <th><label>Add Service</label></th>
        </tr>
      <tbody>
        <?php
	while ($row=mysql_fetch_array($query))
	{
		?> 

            
                    <tr>
                        <td class="col-sm-5">
                        <div class="media">
                               <div class="media-body">
                               <label><?php echo $row['name'] ?></label>
                                <h5 class=""></h5>
                            </div>
                        </div></td>
                       
                        <td class="col-sm-2 "><strong><label>R <?php echo $row['price'] ?></label></strong></td>
                        
                      <td><a class="btn btn-primary btn-sm active" role="button" href="serviceslist.php?page=products&action=add&id=<?php echo $row['service_id'] ?>">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Add to Hair Style</a></td>
		     </tr>

		<?php
	}

	?>
	<?php
  ?>
                </tbody>
 </table>

 </body>

  </html>
