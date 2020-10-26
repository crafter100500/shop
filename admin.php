<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="col-12 bg-dark" style="height: 70px;">
	<form action="index.php">
		<button class="btn" style=" border: solid white ; color: white; margin-top: 15px;">Exit to the main menu</button>
	</form>
</div>
<div class="col-12" style="background-color: #3a3e42; height: 867px;">
	<form action="insert.php" method="GET">
		<div class="text-center" style="padding-top: 30px;">
			<input name="name" class="form-control mx-auto" placeholder="Название товара" style="width: 500px;">
			<input name="description" class="form-control mx-auto" placeholder="Описание товара"  style="width: 500px; height: 200px; ; margin-top: 20px;">
			<input name="price" class="form-control mx-auto" placeholder="Цена товара"  style="width: 500px;margin-top: 20px;">
			<input name="img" class="form-control mx-auto" placeholder="Картинка товара"  style="width: 500px;margin-top: 20px;">
			<button class="btn" style=" margin-top: 20px; border: solid white ; color: white;">Add to the list</button>
		</div>
	</form>
</div>
