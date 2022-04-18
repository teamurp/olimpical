<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Список олимпиад</title>
	<style type="text/css">
		.font{
			font-family: "Montserrat";
		}
	</style>
</head>
<body class="bg-dark">
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
		$query = mysqli_query($con, "SELECT * FROM olymp");
		$string = $query->fetch_assoc();
		$string2 = $query->fetch_assoc();
		$string3 = $query->fetch_assoc();
	 ?>
	<!--header-->
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
						<a href="list.php" class="nav-link active link-light" aria-current="page"><h4>Олимпиады</h4></a>
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
	<!--content-->
	<div class="col-9 mx-auto py-5" style="background-image: url(bg1.png); background-size: cover; background-attachment: fixed; background-position: 0% 0%; background-repeat: no-repeat;">
		<div class="bg-light shadow rounded mx-auto col-9 p-3 pb-3">
			<form action="addolymp.php" method="POST">
				<?php 
					echo "<h1>".$string['name']."</h1>";
				 ?>
				<p class="fw-bold">Регистрация: <b class="fw-bold fst-italic">16 сентября - 1 октября</b></p>
				<p>Дата проведения: 3 октября (Воскресенье)</p>
				<p>Турнир включен в Перечень олимпиад на 2021-2022 учебный год под 82 номером. Предметы астрономия и науки о Земле (соответствует предмету астрономия), биология, история, лингвистика (соответствует предметам русский язык, иностранный язык и математика), литература, математика, физика согласно Перечню имеют II уровень. Химии присвоен III уровень.</p>
				<p>
				При благоприятной эпидемиологической обстановке, оргкомитет Турнира надеется провести Заключительный тур Турнира 6 марта 2022 года. Подробности и правила проведения будут опубликованы ближе к дате проведения.</p>
				<input type="" name="olymp_id" value="<?php echo $string["id"] ?>" style="display: none;">
				<a><button class="btn btn-success">Напомнить</button></a>
			</form>
		</div>
		<div class="bg-light shadow rounded mx-auto col-9 p-3 mt-5 pb-3">
			<form action="addolymp.php" method="POST">
				<?php 
					echo "<h1>".$string2['name']."</h1>";
				 ?>
				<p class="fw-bold">Регистрация: <b class="fw-bold fst-italic">с 27 сентября</b></p>
				<p>1 октября открывается регистрация на Всесибирскую олимпиаду школьников — крупнейшую за Уралом предметную олимпиаду для учеников 7-11-х классов, увлеченных точными и естественными науками. Победители и призёры заключительного тура олимпиады среди 8-10 классов смогут побывать в Летней школе в Академгородке и поступить в СУНЦ НГУ.</p>
				<input type="" name="olymp_id" value="<?php echo $string2["id"] ?>" style="display: none;">
				<button class="btn btn-success">Напомнить</button>
			</form>
		</div>
		<div class="bg-light shadow rounded mx-auto col-9 p-3 my-5 pb-3">
			<form action="addolymp.php" method="POST">
				<?php 
					echo "<h1>".$string3['name']."</h1>";
				 ?>
				<p class="fw-bold">Регистрация: <b class="fw-bold fst-italic">с 1 октября</b></p>
				<p>1 октября открывается регистрация на Всесибирскую олимпиаду школьников — крупнейшую за Уралом предметную олимпиаду для учеников 7-11-х классов, увлеченных точными и естественными науками. Победители и призёры заключительного тура олимпиады среди 8-10 классов смогут побывать в Летней школе в Академгородке и поступить в СУНЦ НГУ.</p>
				<input type="" name="olymp_id" value="<?php echo $string3["id"] ?>" style="display: none;">
				<button class="btn btn-success">Напомнить</button>
			</form>
		</div>
	</div>
</body>
</html>
