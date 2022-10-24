<?php
include("connection.php");
include("Inc_admin_dash.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add FAQs</title>

<!--Font Awesome and online Links --->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--style1 css--->
<link rel="stylesheet" href="dash_css/style1.css">
<!--End Here--->

<body>

        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add FAQs</span>
				</h2>
		    </div>

            <div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Add New FAQs</h3>
         <hr>
 		<form method="post">
  <div class="form-group">
     <h4 style="padding-left:20px;">FAQ (Frequently Asked Questions)</h4>
    <input  type="text" name="faq" class="form-control cat" required="">
 
</div>

   <div class="form-group">
     <h4 style="padding-left:20px;">Reply!</h4>
    <input  type="text" name="ans" class="form-control cat" required="">
   </div>

  <button style="border-radius:10%; margin-left:20px;" name="btnadd" type="submit" class="btn  btn-dark">Add</button>
  <!-- PHP Start -->
  <?php
  if(isset($_POST['btnadd']))
		  {
			  $faq_Q = $_POST['faq'];
              $faq_A = $_POST['ans'];
			
			  $query = mysqli_query($con,"insert into faqs(question,answer)
			  values ('$faq_Q','$faq_A')");

              if($query > 0)
			  {
                echo"
                <div style='margin-top:5px;' class='alert alert-success' role='alert'>
                <b>Successfully!</b>FAQ added!
              </div>
                ";
			  }
			  else
			  {
				 echo "<script>alert('Failed!')</script>";
			  }
		  }
        ?>
      <!-- End Here -->
  </form>
</div>
           
			
	
                   
</body>
</html>
