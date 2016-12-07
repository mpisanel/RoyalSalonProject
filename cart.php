<?php

    if(isset($_POST['submit'])) {

        foreach($_POST['quantity'] as $key => $val) {

            if($val==0) {

                unset($_SESSION['cart'][$key]);
            }
            else 
            {
                $_SESSION['cart'][$key]['quantity']=$val;
            }
        }
    }
    else if(isset($_POST['checkout'])) {
        ?>
  <h4>YOUR ORDER HAS BEEN PLACED. BELOW IS YOUR ORDER DETAILS:</h4><br/>
  
        <?php 
        require("orderdetails.php");
      }


?>
  <html>
  <head>

    <title>View Cart Items</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="rcss/StyleWebsite.css" rel="stylesheet" type="text/css"/>
        <link href="rcss/telInput.css" rel="stylesheet" type="text/css"/>
        <link href="rcss/StyleRegister.css" rel="stylesheet" type="text/css"/>
        <link href="generic.css" rel="stylesheet" type="text/css" />
        <link href="bower_components/angular/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet" type="text/css"/>
        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/toastr/toastr.js"></script>
       <script src="bower_components/ng-intl-tel-input/dist/ng-intl-tel-input.js" type="text/javascript"></script>

  </head>
  <body>
      <form method="post" action="serviceslist.php?page=cart">
            <div class="login-box">
			<div class="box-header"><br/>
				<h2><label>Service Items</label></h2><br/>
            </div>
    <br/>

    <table class='table table-hover '>

        <tr>
            <th><label>Service Detail</label></th>
            <th><label>Selected Quantity</label></th>
            <th><label>Unit Price<span></label></th>
            <th><label>Selected Total</label></th>
        </tr>

        <?php

            $sql="SELECT * FROM services WHERE service_id IN (";

                foreach($_SESSION['cart'] as $id => $value) {

                    $sql.=$id.",";
                }

                $sql=substr($sql, 0, -1).") ORDER BY name ASC";
                $query=mysql_query($sql);
                $totalprice=0;

                while($row=mysql_fetch_array($query)) {

                    $subtotal=$_SESSION['cart'][$row['service_id']]['quantity']*$row['price'];
                    $totalprice+=$subtotal;
                     /*$img_url="../AATinkers/Images/"*;*/
                     ?>
                    <tbody>
                    <tr>
                        <td class="col-sm-5">
                        <div class="media">
                            <!--a class="thumbnail pull-left" href="#"> <img class="media-object" src="</*?php echo $img_url.$row['aat_image'] */?>" style="width: 72px; height: 72px;"> </a-->
                            <div class="media-body">
                                <h4 class="media-heading"><label><?php echo $row['name'] ?></label></h4>
                                
                               </div>
                        </div></td>
                        <td class="col-sm-2 ">
                          <input type="text" style="height:35px;width:55px" name="quantity[<?php echo $row['service_id'] ?>]"
                                 value="<?php echo $_SESSION['cart'][$row['service_id']]['quantity'] ?>" />
                        </td>
                        <td class="col-sm-2 "><strong><label>R <?php echo $row['price'] ?></label></strong></td>
                        <td><strong><label>R <?php echo $_SESSION['cart'][$row['service_id']]['quantity']*$row['price'] ?></label></strong></td>
                         </tr>
                    <?php
                                  }
                                  ?>

                    <tr>

                        <td>   </td>
                        <td>   </td>
                        <td><h5><b>Grand Total<b></h5></td>
                        <td><h5><strong>R <?php echo $totalprice ?></strong></h5></td>
                    </tr>
                </tbody>
    </table>
<div class="modal-footer">

<label><b> Grand Total: R</b><?php echo $totalprice ?></label><br/>
<label>To remove an item set its quantity to 0.</label>

</div>
    <a class="btn btn-primary btn-lg active " role="button" href="serviceslist.php?page=products"><span class="glyphicon glyphicon-arrow-left"></span> Return to Products</a>
    <button  class=" btn btn-primary btn-lg active"  type="submit"  name="submit"><span class="glyphicon glyphicon-pencil"></span> Update Cart</button>
    <button  class=" btn btn-primary btn-lg active"  type="submit" name="checkout"><span class="glyphicon glyphicon-ok"></span> Check Out</button>
</div>
   </form> 
  </body>
  </html>
