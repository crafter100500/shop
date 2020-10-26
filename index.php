
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title></title>
	
</head>
<body style="background-color:;">
	<?php  
		$connect = mysqli_connect("127.0.0.1", "root", "", "shop");

		$query = mysqli_query($connect, "SELECT * FROM info");

		$result0 = $query->fetch_assoc();
		$result1 = $query->fetch_assoc();
		$result2 = $query->fetch_assoc();
		$result3 = $query->fetch_assoc();
		$result4 = $query->fetch_assoc();
		$result5 = $query->fetch_assoc();
		$result6 = $query->fetch_assoc();
		$result7 = $query->fetch_assoc();
		$result8 = $query->fetch_assoc();
	?>
	<div class="col-12 " style="height: 75px;">
		<div class="row">
			<div class="col-10 mx-auto" style="height: 75px;">
				<div class="row">
					<div class="col-1" style="height: 75px;">
						<img src="img/1.png" class="w-100">
					</div>
					<div class="col-8" style="height: 75px;">
						<div class="row">
							<a class="mt-3 ml-5" style="font-size: 20px; color: black ; font-weight: bold; font-family: Arial;">Разные товары</a>
							<a class="mt-3 ml-5" style="font-size: 20px; color: black ; font-weight: bold; font-family: Arial;">Доставка</a>
							<a class="mt-3 ml-5" style="font-size: 20px; color: black ; font-weight: bold; font-family: Arial;">Отзывы</a>
							<a class="mt-3 ml-5" style="font-size: 20px; color: black ; font-weight: bold; font-family: Arial;">Рекомендуемые</a>
							<a href='http://20urok/admin.php' style="color: black; font-weight: bold;font-size: 20px;" class="mt-3 ml-5"> Панель админа </a>
						</div>
					</div>
					<div class="col-3" style="height: 75px;">
						<div class="row">
							<img src="img/2.png" class="ml-3" style="height: 75px; width: 100px;">
							<img src="img/3.png" class="ml-3" style="height: 75px; width: 100px;">
							<img src="img/4.png" class="ml-3" style="height: 75px; width: 100px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mt-3" style="height: 950px; background-image: url('https://www.rudys.paris/media/contenttype/push-home-brako.jpg'); background-size: 100% 100%;">
		<p class="text-center" style="font-family: Arial; font-weight: bold; font-size: 50px; color : white ; padding-top: 300px;">Сайт о моих предпочтениях!</p>
		<h1 class="text-center" style="font-family: Arial; font-weight: bold; font-size: 40px; color : white ;">Если хотите узнать больше.</h1>
		<button class="btn mt-3" style="color: white; width: 200px; margin-left: 850px; border: solid white;">Overview</button>
	</div>

	<div class="col-10 mx-auto mt-3" style="height: 2250px;">
		<div class="row">
			<div class="col-12  mx-auto">
				<div class="row">
					<div class="col-4 ">
						<?php        
							echo "<img class='w-100 mt-3' src=". $result0["img"] .">"; 	

					      	echo "<h1>". $result0['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result0["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result0['price']. " руб." ."</button>";
							            	
							
					    ?>
					</div>
					<div class="col-4 ">
						<?php         	
							echo "<img class='w-100 mt-3' src=". $result1["img"] .">";
					      	echo "<h1>". $result1['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result1["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result1['price']. " руб." ."</button>";
							            	
							
					    ?>
					</div>
					<div class="col-4 " style="height: 740px;">
						<?php         	
							echo "<img class='w-100 mt-3' src=". $result2["img"] .">";
					      	echo "<h1>". $result2['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result2["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result2['price']. " руб." ."</button>";
							            	
							
					    ?>
					</div>

				</div>
			</div>
			<div class="col-12  mx-auto mt-4" style="height: 740px;">
				<div class="row">
					<div class="col-4 " style="height: 740px;">
					<?php         	
							echo "<img class='w-100 mt-3' src=". $result3["img"] .">";
					      	echo "<h1>". $result3['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result3["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result3['price'] ."</button>";
							            	
							
					    ?>
					</div>
					<div class="col-4 " style="height: 740px;">
						<?php         	
							echo "<img class='w-100 mt-3' src=". $result4["img"] .">";
					      	echo "<h1>". $result4['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result4["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result4['price'] ."</button>";
							            	
							
					    ?>
					</div>
					<div class="col-4 " style="height: 740px;">
						<?php         	
							echo "<img class='w-100 mt-3' src=". $result5["img"] .">";
					      	echo "<h1>". $result5['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result5["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result5['price'] ."</button>";
							            	
							
					    ?>
					</div>
				</div>
			</div>
			<div class="col-12  mx-auto mt-4" style="height: 740px;">
				<div class="row">
					<div class="col-4 " style="height: 740px;">
					<?php         	
							echo "<img class='w-100 mt-3' src=". $result6["img"] .">";
					      	echo "<h1>". $result6['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result6["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result6['price'] ."</button>";
							            	
							
					    ?>
					</div>
					<div class="col-4 " style="height: 740px;">
						<?php         	
							echo "<img class='w-100 mt-3' src=". $result7["img"] .">";
					      	echo "<h1>". $result7['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result7["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result7['price'] ."</button>";
							            	
							
					    ?>
					</div>
					<div class="col-4 " style="height: 740px;">
						<?php         	
							echo "<img class='w-100 mt-3' src=". $result8["img"] .">";
					      	echo "<h1>". $result8['name'] ."</h1>";
					                            			
					      	echo "<p style='font-size:25px;'>". $result8["description"] ."</p>";

					      	echo "<button class='btn' style='font-size:25px; border: solid black;'>". $result8['price'] ."</button>";
							            	
							
					    ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>