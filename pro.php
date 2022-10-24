<?php
    include("connection.php");
	include("header.php");	

	$fetch_id = $_GET["id"];
    $edit_query = "select * from products where id ='$fetch_id'";

    $run_edit = mysqli_query($con,$edit_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


     <!-- PHP Code of Product -->
	 <?php
	  
    while($row = mysqli_fetch_array($run_edit))
     { ?>

	<div class="container">
	<div  class="about">
<div class="spec">
			<h3 style="padding-top:-150px;">Product</h3>
				<div  class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		
		<div class="col-md-4 col-md-offset-2 about-right">
		<img class="img-responsive" id="bigimg" src="images/<?= $row['p_img'] ?>" style='margin-top:10px;'>
		</div>

		
		<div class="advantages">
			<div class="col-md-6  advantages-left ">
				<h3 style="padding-left:20px;"><?= $row['p_name'] ?></h3>
				<div class="advn-one">
					<div class="ad-mian">
						<div class="ad-right">
						<h4><a href="single.html">Price: <?= $row['p_price'] ?>$</a></h4>
						<p><h3 style=" font-size:20px;">Product Details:</h3><?= $row['p_details'] ?></p>
						<p><h3 style=" font-size:20px;">Product Category:</h3><?= $row['p_category'] ?></p>
						<p><h3 style=" font-size:20px;">Product Brand:</h3><?= $row['p_brand'] ?></p>
						
					
						</div>
						</div>
						</div>
                        
						<!-- Add Cart Code Start -->

						<form method="get" action="add_cart.php" enctype="multipart/form-data">
						<td class="t-data" >
						<div class="input-group number-spinner col-md-4 col-md-offset-2">
						
                         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">	
                         <input type="hidden" name="p_name" value="<?php echo $row['p_name'] ?>">
                         <input type="hidden" name="p_price" value="<?php echo $row['p_price'] ?>">
                         <input type="hidden" name="p_img" value="<?php echo $row['p_img'] ?>">
                         
						 <input type="number" min="1" max="10" name="qty" class="form-control text-center" value="1">
						
					  </div>
                  	  </td>

					<!-- End Here -->
                      
	 				<div class="add add-2">
						<button  class="btn-block btn-danger my-cart-btn my-cart-b" style="width:250px; margin-top:50px; margin-right:100px;">ADD To Cart</button>
					 </div>

				 </div>
	              </form>
						</div>
						</div>
			     

				
	<div class="col-md-2" style="cursor:pointer; height:110px; width:100px; margin-top:	-100px; margin-left:130px; border:1px solid gray;">
	<img onClick='ch (this.src)' class='img-responsive' src="images/<?= $row['p_img'] ?>">
	</div>
	
	<div class="col-md-2 " style="cursor:pointer; height:110px; width:100px; margin-top:-100px; margin-left:20px; border:1px solid gray;" >
	<img onClick="ch (this.src)" class="img-responsive" src="images/<?= $row['p_img1'] ?>">
	</div>

	<div class="col-md-2" style="cursor:pointer; height:110px; width:100px; margin-top:-100px; margin-left:20px; border:1px solid gray;">
	<img onClick="ch (this.src)" class="img-responsive" src="images/<?= $row['p_img2'] ?>">
	</div>

</div>
     
     <!-- End here -->
    

	<?php
	 } // End while bracket
    ?>

    <!-- Javascript Start -->
    <script>
		function ch(a){
			document.getElementById('bigimg').src = a;
		}

	</script>
	<!-- Javascript End -->

	<!-- Spinner Js Start -->
    <script>
$(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
	</script>
	<!-- End Here -->

    <div style="margin-top:100px;"></div>
	
	<!-- Include Footer -->
    <?php
     include("footer.php"); 
  ?>
  	<!-- End Here -->

</body>
</html>
