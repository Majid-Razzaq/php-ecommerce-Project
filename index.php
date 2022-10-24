<?php
    include("connection.php");
	include("header.php");	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Shopping cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <!--Slider Image Code Start-->
   <!-- ==Carousel== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:10px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="index.php"> <img class="first-slide" src="images/slider.jpg" alt="First slide" ></a>
       
        </div>
        <div class="item">
         <a href="index.php"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide" style="height:355px;"></a>
         
        </div>
        <div class="item">
          <a href="index.php"><img class="third-slide " src="images/slider2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

   <!--End Here-->

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Special Offers</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Beauty Products</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Hand Bags</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Watches</a></li>  
					  <li class=""><a href="#tab4" data-toggle="tab">Wallets</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">								
							
						<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
	                
						<!-- Product1 Start from here Here -->
							<!--PHP Code -->
                          <?php

                          $fetch     = "select * from products where id = 9";
                          $run_fetch = mysqli_query($con,$fetch);

                          while($row = mysqli_fetch_array($run_fetch))
                            {?>
								<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
							<?php

                              echo "
	                             <img src='images/".$row['p_img']."' class='img-responsive'>
									<div class='offer'><p><span>Offer</span></p></div>
									</a>
									<div class='mid-1'>
										<div class='women'>
	                               <h6><a href='single.html'>$row[1]</a></h6>
	                              </div>
	                              <div class='mid-2'>
	                            	<p >($row[5])<label>$110.0</label><em class='item_price'>$$row[2]</em></p>
                                  ";
                               }
                                ?>
								
                           <!-- End Here -->
	                                <div class='block'>
			                        <div class="starbox small ghosting"> </div>
		                           </div>
		                           <div class="clearfix"></div>
	                                    </div>

							
									
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
										</div>
										
									</div>
								</div>
							</div>
							</form>
                   <!-- Product1 End Here -->


                   <!-- Product2 Code Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
										
									 <!--PHP Code -->
									 <?php

                                    $fetch     = "select * from products where id = 10";
                                    $run_fetch = mysqli_query($con,$fetch);

                                    while($row = mysqli_fetch_array($run_fetch))
                                   {?>
										<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
									<?php
		
	                                   echo "
	                                    <img src='images/".$row['p_img']."' class='img-responsive'>
		                                <div class='offer'><p><span>Offer</span></p></div>
		                                 </a>
		                                 <div class='mid-1'>
			                             <div class='women'>
		                                 <h6><a href='single.html'>$row[1]</a></h6>
		                                 </div>
		                                 <div class='mid-2'>
		                                 <p >($row[5])<label>$200.0</label><em class='item_price'>$$row[2]</em></p>
	                                              	";
	                                               }
	                                             ?>
                                          <!-- End Here -->
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
												<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
												</form>

							<!-- Product 2 Code End Here --> 
    


							<!-- Product 3 Code Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
								<!--PHP Code -->
								 <?php

                                 $fetch     = "select * from products where id = 11";
                                 $run_fetch = mysqli_query($con,$fetch);

                                while($row = mysqli_fetch_array($run_fetch))
								{?>
								<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
								<?php
	
                                     echo "
	                                   <img src='images/".$row['p_img']."' class='img-responsive'>
	                                   <div class='offer'><p><span>Offer</span></p></div>
	                                   </a>
	                                   <div class='mid-1'>
	                                   <div class='women'>
	                                   <h6><a href='single.html'>$row[1]</a></h6>
	                                   </div>
	                                    <div class='mid-2'>
	                                     <p>($row[5])<label>$200.0</label><em class='item_price'>$$row[2]</em></p>
	                        			  ";
	                                		   }
	                              		 ?>
	                                    <!-- End Here -->
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
											</form>
                           <!-- Product 3 code End Here-->


                           <!-- Product 4 Code Start-->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
										<!--PHP Code -->
								 <?php

                               $fetch     = "select * from products where id = 12";
                               $run_fetch = mysqli_query($con,$fetch);

                               while($row = mysqli_fetch_array($run_fetch))
							   {?>
								<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
							   <?php

	                            echo "
	                             <img src='images/".$row['p_img']."' class='img-responsive'>
	                             <div class='offer'><p><span>Offer</span></p></div>
	                             </a>
	                             <div class='mid-1'>
	                             <div class='women'>
	                             <h6><a href='single.html'>$row[1]</a></h6>
	                             </div>
	                             <div class='mid-2'>
	                             <p>($row[5])<label>$200.0</label><em class='item_price'>$$row[2]</em></p>
		                          ";
			                      }
		                         ?>
	                           <!-- End Here -->
	   	                       <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
										</div>
										</form>
									</div>
								
								</div>
							</div>
								<!-- Product 4 code End Here -->


                         <!-- product1 of HandBag1 Code Start-->
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<!--PHP Code -->
								 <?php

                                $fetch     = "select * from products where id = 13";
                                $run_fetch = mysqli_query($con,$fetch);

                                while($row = mysqli_fetch_array($run_fetch))
                                {?>
									<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
								   <?php
	                            echo "
	                            <img src='images/".$row['p_img']."' class='img-responsive'>
	                            <div class='offer'><p><span>Offer</span></p></div>
	                              </a>
	                            <div class='mid-1'>
	                            <div class='women'>
	                            <h6><a href='single.html'>$row[1]</a></h6>
	                            </div>
	                            <div class='mid-2'>
	                         	<p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
		                         ";
			                     }
		                        ?>
	                                  <!-- End Here -->
	                         <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
								</form>
								<!-- Product1 End Here-->


								<!-- Product2 Start-->

							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
										<!--PHP Code -->
								 <?php

                       $fetch     = "select * from products where id = 14";
                        $run_fetch = mysqli_query($con,$fetch);

                        while($row = mysqli_fetch_array($run_fetch))
                          {?>
								<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
							   <?php
	                       echo "
	                       <img src='images/".$row['p_img']."' class='img-responsive'>
	                        <div class='offer'><p><span>Offer</span></p></div>
	                       </a>
	                       <div class='mid-1'>
	                       <div class='women'>
	                       <h6><a href='single.html'>$row[1]</a></h6>
	                       </div>
                     	   <div class='mid-2'>
                       		<p>($row[5])<label>$200.0</label><em class='item_price'>$$row[2]</em></p>
	                      	 ";
	                   		  }
	                       	  ?>
	                          <!-- End Here -->
	                         <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                            </form>
							<!-- Product 2 End Here -->


                            <!-- Product3 Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
									<!--PHP Code -->
									<?php

                           $fetch     = "select * from products where id = 15";
                           $run_fetch = mysqli_query($con,$fetch);

                          while($row = mysqli_fetch_array($run_fetch))
						  {?>
							<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
						   <?php
	                            echo "
	                               <img src='images/".$row['p_img']."' class='img-responsive'>
	                               <div class='offer'><p><span>Offer</span></p></div>
	                               </a>
	                              <div class='mid-1'>
	                              <div class='women'>
                              	  <h6><a href='single.html'>$row[1]</a></h6>
	                                 </div>
	                               <div class='mid-2'>
                             		<p>($row[5])<label>$200.0</label><em class='item_price'>$$row[2]</em></p>
                             		 ";
                      			  }
                      		  ?>
                           	   <!-- End Here -->
		                           <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
								</form>
								<!-- Product 3 End here -->
 
							<!-- Product 4 Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
									<!--PHP Code -->
									<?php

                                $fetch     = "select * from products where id = 16";
                                $run_fetch = mysqli_query($con,$fetch);

                                while($row = mysqli_fetch_array($run_fetch))
								{?>
									<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
								   <?php
	                               echo "
	                                <img src='images/".$row['p_img']."' class='img-responsive'>
	                                <div class='offer'><p><span>Offer</span></p></div>
	                                 </a>
	                                 <div class='mid-1'>
	                                 <div class='women'>
	                                 <h6><a href='single.html'>$row[1]</a></h6>
	                                 </div>
	                                 <div class='mid-2'>
	                              	<p>($row[5])<label>$200.0</label><em class='item_price'>$$row[2]</em></p>
	                               	 ";
		                       	  }
	                             	  ?>
                             	   <!-- End Here -->
	                        	 <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						 </div>		  
					</div>
								</form>
						<!-- Product 4 End here -->


						<!-- Product Of Watch Start -->
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
											<!--PHP Code -->
								 <?php

                             $fetch     = "select * from products where id = 17";
                             $run_fetch = mysqli_query($con,$fetch);

                             while($row = mysqli_fetch_array($run_fetch))
                             {?>
	                         <form method='post' action='pro.php?id=<?=$row['id'] ?>'>
                             <?php
                             echo "
                            <img src='images/".$row['p_img']."' class='img-responsive'>
                             <div class='offer'><p><span>Offer</span></p></div>
                             </a>
                             <div class='mid-1'>
                             <div class='women'>
                             <h6><a href='single.html'>$row[1]</a></h6>
                             </div>
                             <div class='mid-2'>
                              <p>($row[5])<label>$20000</label><em class='item_price'>$$row[2]</em></p>
                               ";
                              }
                             ?>
	                       <!-- End Here -->
	  	               <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							</form>
							<!-- Product of watch1 End here -->

                        <!-- Product 2 Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
										<!--PHP Code -->
										<?php

$fetch     = "select * from products where id = 18";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{?>
	<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
   <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->
	  		  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                     </form>
                     <!-- Product 2 End Here -->

					 <!-- Product 3 Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
									<!--PHP Code -->
									<?php

$fetch     = "select * from products where id = 19";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{?>
	<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
   <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->
	  			  <div class="block">
							<div class="starbox small ghosting"> </div>
					     	</div>
							<div class="clearfix"></div>
							</div>
								<div class="add">
							  <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
									</div>
									</div>
								</div>
							</div>
</form>
<!-- Product 3 End Here -->
                        
                        <!-- Product 4 Start-->

							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
										<!--PHP Code -->
										<?php

$fetch     = "select * from products where id = 20";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
        {?>
		<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
		  <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->
	  		  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
</form>
<!-- Product 4 End here-->

<!-- Product of Wallet Start -->
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane text-style" id="tab4">
							<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
											<!--PHP Code -->
											<?php

$fetch     = "select * from products where id = 21";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{?>
	<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
   <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->				  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
</form>
<!-- Product OF Wallet End here-->
                  
<!-- Product 2 Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
												<!--PHP Code -->
												<?php

$fetch     = "select * from products where id = 22";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{?>
	<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
   <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->			  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
</form>
<!-- Product 2 End here -->

<!-- Product 3 Start -->
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
												<!--PHP Code -->
												<?php

$fetch     = "select * from products where id = 23";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{?>
	<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
   <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->			  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                       </form>
					   <!-- Product 3 End Here -->

					   <!-- Product 4 Start-->
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
												<!--PHP Code -->
												<?php

$fetch     = "select * from products where id = 24";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{?>
	<form method='post' action='pro.php?id=<?=$row['id'] ?>'>
   <?php
echo "
<img src='images/".$row['p_img']."' class='img-responsive'>
<div class='offer'><p><span>Offer</span></p></div>
  </a>
<div class='mid-1'>
<div class='women'>
<h6><a href='single.html'>$row[1]</a></h6>
</div>
<div class='mid-2'>
 <p>($row[5])<label>$2500.0</label><em class='item_price'>$$row[2]</em></p>
 ";
 }
?>
	  <!-- End Here -->			  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                        </form>
						<!-- product 4 End here -->
							<div class="clearfix"></div>
						 </div>
					</div>
				</div>
			</div>
		
	</div>
	</div>
	</div>

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="index.php">
					<img src="images/product3.jpg" class="img-responsive img" style="height:285px; border:2px solid pink;">
					<div class="big-sa">
						<h6>New Collections</h6>
						<h3>Season<span>ing </span></h3>
						<p>Best Skin Care Brands: That'll Make Your Skin Glow; </p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="index.php">
					<img src="images/product2.jpg" class="img-responsive img" style="height:285px; border:2px solid gray;">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>Big <span>Sale</span></h3>
							<p>Red Line Watches Build Quality </p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="index.php">
					<img src="images/ki5.jpg" class="img-responsive img1" style="height:150px; width:350px; border:2px solid skyblue;">
					<div class="big-sale2">
						<h3><span>Beauty</span><br>Products</h3>		
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="index.php">
					<img src="images/bag4.jpg" class="img-responsive img1" style="height:130px; width:350px; margin-top:-20px; border:1px solid #9370DB;">
					<div class="big-sale3">
						<h3>Hand<span>Bags</span></h3>
						<p></p>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
 
<!--content-->
	<div class="product" style="margin-top:-70px;">
		<div class="container">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
				<!-- php Start -->
                <?php
				
$fetch     = "select * from products";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch)) { ?>

	<form method="post" action="pro.php?id=<?=$row['id'] ?>">

	   <div class='col-md-3 pro-1'>
								<div class='col-m'>
								<a href='#' data-toggle='modal' data-target='#myModal17' class='offer-img'>
										<img src="images/<?= $row['p_img'] ?>" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="#"><?= $row['p_name'] ?></a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>$9120</label><em class="item_price"><?= $row['p_price'] ?></em></p>
											
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
										   <button name="add_to_cart" class='btn btn-danger my-cart-btn my-cart-b'>View Details</button>
										 									
										</div>
									</div>
								</div>
							</div>
							
						 </form>

						 <?php
                          }
						  
						 ?>

				<!-- End here -->
				
				<div class="clearfix"></div>
						 </div>
		</div>
	</div>

	<!-- Include Footer -->
  <?php
     include("footer.php"); 
  ?>
  	<!-- End Here -->

</body>
</html>
