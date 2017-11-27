<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Develop Site</title>
 

  
</head>

<body>
this sis a 
<? echo $task['due'];
?>

	<ul>

	<?php foreach ($task as $key => $value): ?>



		<li><strong><?= $key; ?></strong>: <?=  $value; ?></li>


	<?php endforeach; ?>

	</ul>
  
</body>
</html>