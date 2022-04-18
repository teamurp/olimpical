<?php 
	session_start();
	$con = mysqli_connect('Jino.ru', 'j32021264', '4uTXa8bYv', 'j26533641');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Курсы</title>
	<style type="text/css">
		.font{
			font-family: "Montserrat";
		}
		.red {
			background-color: #FF7B7B;
		}
		.orange {
			background-color: #FFB384;
		}
		.yellow {
			background-color: #FFE38C;
		}
		.green {
			background-color: #CAFF8E;
		}
		.cyan {
			background-color: #A4F7FF;
		}
		.blue {
			background-color: #8CABFF;
		}
		.magenta {
			background-color: #F58CFF;
		}
		.purple {
			background-color: #C28CFF;
		}
	</style>
</head>
<body style="background-image: url()">
	<div class="row m-0 py-3 shadow" style="background-image: url(header.png)">
		<div class="row mx-auto col-9 m-0">
			<div class="col-3">
				<div class="row">
					<div class="col-2 px-0">
						<img src="olymp.png" class="w-100">
					</div>
					<div class="col-6 px-0 mx-3">
						<img src="text1.png" class="w-100">
					</div>
				</div>
			</div>
			<ul class="nav col-6 nav-fill">
					<li class="nav-item">
						<a href="index.php" class="nav-link link-light" aria-current="page"><h4>Олимпиады</h4></a>
					</li>
					<li class="nav-item">
						<a href="tip.php" class="nav-link link-light"><h4>Советы</h4></a>
					</li>
					<li class="nav-item">
						<a href="course.php" class="nav-link link-light"><h4>Курсы</h4></a>
					</li>
			</ul>
			<div class="col-3">
				<div class="row">
					<div class="col-10 px-0">

					</div>
					<div class="col-2 px-0 py-2">
						<a href="account.php"><img src="account.png" class="w-75"></a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<h2 class="text-center mt-5">Список напоминаемых олимпиад</h2>
	<hr class="col-6 mx-auto my-5">
	<div class="col-8 mx-auto text-center">
		<?php 
			$query2 = mysqli_query($con, "SELECT * FROM olymp INNER JOIN notif ON notif.olymp_id=olymp.id");
			for($i=0;$i<$query2->num_rows;$i++){
				$string2=$query2->fetch_assoc();
				echo "<h3>".$string2["name"]."</h3>";
			}
		 ?>
	</div>
</body>
</html>