<?php
  include("connection.php");
  include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
   

</head>
<body>


    <div class="banner-top">
	<div class="container">
		<h3 >Wishlist</h3>
		<h4><a href="index.php">Home</a><label>/</label>Wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- Code OF Cart -->
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>Wishlist</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>

      <?php if(isset($_SESSION['cart'])){ ?>

               <form action=""enctype="multipart/form-data">
<table class="table ">
    <?php
     $total_p = 0;
     $total_Q = 0;
    ?>
		  <tr>
          <th class="t-head head-it ">S.NO</th>
			<th class="t-head head-it ">ID</th>
			<th class="t-head">Product</th>
		<th class="t-head">Name</th>

			<th class="t-head">Qty</th>
            <th class="t-head">Price</th>
            <th class="t-head">Amount</th>
            <th class="t-head">Option</th>
		  </tr>

          <?php  $sr = 1; ?>
          
     <!-- PHP Code Start-->
                <?php
        
        $cart = $_SESSION['cart'];
        
        foreach($cart as $c)
        { ?>        
           
           <tr class="cross">
           
           <?php
            echo "<td class='t-data'>".$sr++."</td>";
            
       
         //Total Amount Code         
            $total_Q += $c['qty'];
            $total_p +=  ($c['qty'] * $c['p_price']);
         // Total Amount Code    
         
           ?>

            <?php echo "<td class='t-data'>".$c['id']."</td>"; ?>

            <!-- Image -->
			<td class="t-data">
			<?php echo " <img src='images/".$c['p_img']."' style='height:50px; width:50px;'>  ";?>
                             
				<div class="clearfix"> </div>
				
			 </td>

       <!-- Product Name-->
       <?php echo "<td  class='t-data'>".$c['p_name']."</td>"; ?>
      <!-- End Here -->
             
        <!-- For Qunatity-->
         <?php echo "<td  class='t-data'>".$c['qty']."</td>"; ?>
			<!-- End Here-->
            
        <!-- For Price-->
        <?php echo "<td class='t-data'>".$c['p_price']."</td>"; ?>
			<!-- End Here-->

       <!-- For Total Amount-->
            <?php echo "<td class='t-data'>Rs.".$c['p_price']*$c['qty']."</td>"; ?>
			<!-- End Here-->

      <!-- Delete Option-->
      <?php echo "<td class='t-data'><input type='submit' value='Delete' class='btn btn-danger'></td>";?>
			<!-- End Here -->

    </tr>


        <?php } ?>
        
         <tr>
             <td class="t-data" align="center" colspan="6"><strong> Yout Total Amount is:</strong></td>
         <td class="t-data"  ><strong>Rs.<?= number_format($total_p);?>/=</strong></td> 
         </tr>               

  </table>
  </form>
  
  <?php $cart = $_SESSION['cart'];
        
        foreach($cart as $c)
        { ?>        
       
  <form action="Cart_data.php?id=<?=$c['id'] ?>" method="Get">
  
  <input type="hidden" name='id' value="<?php echo $c['id']; ?>">	
  <input type="hidden" name='p_name' value="<?php echo $c['p_name'] ?>">
  <input type="hidden" name='p_price' value="<?php echo $c['p_price'] ?>">
  <input type="hidden" name='qty' value="<?php echo $c['qty'] ?>">
    <?php }?>
   <input style="float:right; margin-right:15px;" type="submit" value="Check Out Now" class="btn btn-success ">
   </form>

  
  <input style="float:right; margin-right:15px; font-style:italic; font-weight:bold;" type="submit" value="PayPal" class="btn btn-success ">
  <form action="index.php">
  <div class="add add-2" >
  <button style="float:left;" class="btn btn-danger my-cart-btn my-cart-b" >Continue Shopping</button>
  </div>
        </form>
 
  

    </div>
		 </div>			

        <?php
         }
        else
        {?>
<table class="table ">
    
		  <tr>
          <th class="t-head head-it ">S.NO</th>
			<th class="t-head head-it ">ID</th>
			<th class="t-head">Product</th>
		<th class="t-head">Name</th>

			<th class="t-head">Qty</th>
            <th class="t-head">Price</th>
            <th class="t-head">Amount</th>
		  </tr>

            <td class="t-data" align="center" colspan="7"><strong> Yout CART is Emplty:</strong></td>
         </tr>               

  </table>
  <form action="index.php" >
  <button style="float:right;" class="btn btn-danger my-cart-btn my-cart-b" >Continue Shopping</button>
  </form>
 
  

    </div>
		 </div>			

        <?php } ?>
<?php
  include("footer.php");
?>
</body>
</html>