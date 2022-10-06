<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>

<body>
	<div class="main">
		<div class="output">
			<input type="text" id='remove'>
		</div>
		<div class="input">
			<input type="text" maxlength="1" id='letter1'>
			<input type="text" maxlength="1" id='letter2'>
			<input type="text" maxlength="1" id='letter3'>
			<input type="text" maxlength="1" id='letter4'>
			<input type="text" maxlength="1" id='letter5'>
		</div>
		<button>SEARCH</button>
		<div class="results"></div>
	</div>
	<script src="scripts.js?v=<?php echo time(); ?>"></script>
</body>

</html>