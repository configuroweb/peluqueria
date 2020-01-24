<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
   $mobilenum=$_POST['mobilenum'];
    $gender=$_POST['gender'];
$details=$_POST['details'];
 
     
    $query=mysqli_query($con, "insert into  tblcustomers(Name,Email,MobileNumber,Gender,Details) value('$name','$email','$mobilenum','$gender','$details')");
    if ($query) {
echo "<script>alert('Cliente agregado satisfactoriamente.');</script>"; 
echo "<script>window.location.href = 'add-customer.php'</script>"; 
 } else {
echo "<script>alert('Algo salió mal. Inténtalo de nuevo.');</script>";  	
} }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>SPA | Agregar Servicio</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Agregar Cliente</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Agregar Cliente:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 <div class="form-group"> <label for="exampleInputEmail1">Nombre</label> <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de Cliente" value="" required="true"> </div> <div class="form-group"> <label for="exampleInputPassword1">Correo</label> <input type="email" id="email" name="email" class="form-control" placeholder="Correo" value="" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputEmail1">Número de Móvil</label> <input type="text" class="form-control" id="mobilenum" name="mobilenum" placeholder="Número de Móvil" value="" required="true" maxlength="10" pattern="[0-9]+"> </div>
							 <div class="radio">

                               <p style="padding-top: 20px; font-size: 15px"> <strong>Género:</strong> <label>
                                    <input type="radio" name="gender" id="gender" value="Hombre" checked="true">
                                    Mujer
                                </label>
                                <label>
                                    <input type="radio" name="gender" id="gender" value="Mujer">
                                    Hombre
                                </label>
                                <label>
                                    <input type="radio" name="gender" id="gender" value="No definido">
                                   No definido
                                </label></p>
                            </div>
							 	<div class="form-group"> <label for="exampleInputEmail1">Detalle</label> <textarea type="text" class="form-control" id="details" name="details" placeholder="Detalle" required="true" rows="12" cols="4"></textarea> </div>
							
							  <button type="submit" name="submit" class="btn btn-default">Agregar Cliente</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php } ?>