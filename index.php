<?php 
   
    error_reporting(0);
    session_start();
    session_destroy();

    if ($_SESSION['message'])
     {
     	$message=$_SESSION['message'];

     	echo "<script type='text/javascript'>

     	alert('$message');

     	</script>";

    }




?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<nav>
		<label class="logo">A. Y. MAI-KIFI TRUCKS DATABASE</label>
	    <ul>
	    	<li><a href="">Home</a></li>
	    	<li><a href="">Trucks</a></li>
	    	<li><a href="">NewTruck</a></li>
	    	<li><a href="login.php"  class="btn btn-success">Login</a></li>

	    </ul>

	 </nav>

	 <div class="section1">

	 	<label class="image_text">This is Truck Management System, with all information regarding Trucks</label>
	 	<img class="main_image" src="images.jpeg">
	 </div>

	 <center>
	 	<h1 class="adm"> Truck Register</h1>
	 



	 <div align="center" class="Registration_form">
	 	<form action="data_check.php" method="POST">
	 		
	 		<div class="adm_int">
	 			
	 			<label class="label_text">Plate Number</label>
	 			<input class="input_deg" type="text" name="plate_number">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 01</label>
	 			<input class="input_deg" type="date" name="date1">
	 		</div>

	 		<div class="adm_int">
	 			
	 			<label class="label_text">Tyre Number 01</label>
	 			<input class="input_deg" type="text" name="tyre1">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 02</label>
	 			<input class="input_deg" type="date" name="date2">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 02</label>
	 			<input class="input_deg" type="text" name="tyre2">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 03</label>
	 			<input class="input_deg" type="date" name="date3">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 03</label>
	 			<input class="input_deg" type="text" name="tyre3">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 04</label>
	 			<input class="input_deg" type="date" name="date4">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 04</label>
	 			<input class="input_deg" type="text" name="tyre4">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 05</label>
	 			<input class="input_deg" type="date" name="date5">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 05</label>
	 			<input class="input_deg" type="text" name="tyre5">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 06</label>
	 			<input class="input_deg" type="date" name="date6">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 06</label>
	 			<input class="input_deg" type="text" name="tyre6">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 07</label>
	 			<input class="input_deg" type="date" name="date7">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 07</label>
	 			<input class="input_deg" type="text" name="tyre7">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 08</label>
	 			<input class="input_deg" type="date" name="date8">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 08</label>
	 			<input class="input_deg" type="text" name="tyre8">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 09</label>
	 			<input class="input_deg" type="date" name="date9">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 09</label>
	 			<input class="input_deg" type="text" name="tyre9">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 10</label>
	 			<input class="input_deg" type="date" name="date10">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 10</label>
	 			<input class="input_deg" type="text" name="tyre10">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 11</label>
	 			<input class="input_deg" type="date" name="date11">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 11</label>
	 			<input class="input_deg" type="text" name="tyre11">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 12</label>
	 			<input class="input_deg" type="date" name="date12">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 12</label>
	 			<input class="input_deg" type="text" name="tyre12">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 13</label>
	 			<input class="input_deg" type="date" name="date13">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 13</label>
	 			<input class="input_deg" type="text" name="tyre13">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 14</label>
	 			<input class="input_deg" type="date" name="date14">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 14</label>
	 			<input class="input_deg" type="text" name="tyre14">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 15</label>
	 			<input class="input_deg" type="date" name="date15">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 15</label>
	 			<input class="input_deg" type="text" name="tyre15">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 16</label>
	 			<input class="input_deg" type="date" name="date16">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 16</label>
	 			<input class="input_deg" type="text" name="tyre16">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 17</label>
	 			<input class="input_deg" type="date" name="date17">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 17</label>
	 			<input class="input_deg" type="text" name="tyre17">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 18</label>
	 			<input class="input_deg" type="date" name="date18">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 18</label>
	 			<input class="input_deg" type="text" name="tyre18">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 19</label>
	 			<input class="input_deg" type="date" name="date19">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 19</label>
	 			<input class="input_deg" type="text" name="tyre19">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 20</label>
	 			<input class="input_deg" type="date" name="date20">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 20</label>
	 			<input class="input_deg" type="text" name="tyre20">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 21</label>
	 			<input class="input_deg" type="date" name="date21">
	 		</div>

	 		<div class="adm_int">

	 		<label class="label_text">Tyre Number 21</label>
	 			<input class="input_deg" type="text" name="tyre21">
	 		</div>

	 		<div class="adm_int">
	 			<label class="label_text">Date 22</label>
	 			<input class="input_deg" type="date" name="date22">
	 		</div>

	 		<label class="label_text">Tyre Number 22</label>
	 			<input class="input_deg" type="text" name="tyre22">
	 		</div>


	 		

	 		<div class="adm_int">
	 			
	 			<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
	 		</div>


	 	</form>


	 	</center>
	 </div>

	 <footer>
	 	<h3 class="footer_text">All @copyright reserved by harunaali@kust.edu.ng</h3>
	 </footer>

</body>
</html> 