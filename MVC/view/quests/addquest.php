<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Добавление задачи</title>
</head>
<body>
	<div class="container">
		<a class="col-md-2" href="sort=name">Все задачи</a>
	</div>

<form  method="POST" action="add" enctype="multipart/form-data">
<div class="container"> 
	<?php if (isset($errors)): ?>
		<?php foreach($errors as $error): ?>
			<blockquote><?php echo $error?></blockquote>
		<?php endforeach; ?>
	<?php endif; ?>	
	
	<input class="col-md-8" type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
	<input class="col-md-8" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
	
	<textarea class="col-md-8" name="text" placeholder="Text"><?php echo $text; ?></textarea><br>
	<input type="submit" name="add" value="Добавить"><br>
</div>
</form>


</body>
</html>