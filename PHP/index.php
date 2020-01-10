<?php 
	include_once 'db_connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- 
	Name: Tarik Muharem
	Course: Web Application Development
	Assignment: Project1
	Due date: 24.11.2019
	Purpose: First update  -->
	<meta charset="utf-8">
	<meta name="author" content="Tarik Muharem">
	<meta name="description" content="Project2">
	<link href="../CSS/index.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../JS/index.js"></script>
	<title>Claws and Paws</title>
</head>
<body>
	<div class="parallax" id="top">
		<img class="logo" src="../Img/logo.png">
		<h2>Claws and Paws</h2>
		<div class="nav-bar">
			<ul class="content">
				<li><a href="../index.html">Home</a></li>
				<li><a href="#about-us">About us</a></li>
				<li><a href="index.php">Services</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#contact-info">Contact us</a></li>
			</ul>
		</div>
	</div>
	<div class="price_list">
		<table id="cjenovnik" style="margin-top: 10%; margin-left: 40%; padding: 30px; font-size: 30px; margin-bottom: 10%; background-color: orange; text-align: center;">
			<thead>
				<tr>
					<th>Service</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<tr style=""> 
					<td> 
					<?php 
						$sql = "SELECT name, price FROM price_list;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result)) {
								echo "<tr><td>".$row['name']."</td><td>".$row['price']."</td></tr><br>";
							}
						}
						?>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<script src="JS/index.js"></script>
</body>
</html>