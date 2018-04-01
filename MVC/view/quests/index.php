<!DOCTYPE html>
<html>
<head>
	<title>Задачи</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<a class="col-md-2" href="/sort=name">По имени</a>
		<a class="col-md-2" href="/sort=email">По email</a>
		<a class="col-md-2" href="/sort=ready">По завершенности</a>
		<a class="col-md-3" href="/add">Добавить задачу</a>
		<a class="col-md-3" href="/login">Вход</a>
	</div>
	<?php foreach ($questsList as $questsItem): ?>
		<div class="container">
				<div class="col-md-12 row" style="background-color: silver; margin: 5px; border-radius: 3px;">
					<div class="col-md-12 text-justify"><?php echo $questsItem['text']; ?></div>
					<div class="col-md-2"><?php echo $questsItem['ready']; ?></div>
					<div class="col-md-5"><?php echo $questsItem['name']; ?></div>
					<div class="col-md-5 text-right"><?php echo $questsItem['e_mail']; ?></div>
				</div>
		</div>
	<?php endforeach; ?>
	<div class="container">
	<?php foreach ($paginationLink as $link): ?>
		<a class="col-md-2" href="<?php echo $link['link']; ?>"><?php echo $link['num']; ?></a>
	<?php endforeach; ?>
	</div>
</body>
</html>