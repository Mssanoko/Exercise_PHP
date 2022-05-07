<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TD QUIZZ PHP</title>
	<style>
		button {
			width: 250px;
			height: 30px;
		}
	</style>
</head>

<body>
	<h1>TD QUIZZ</h1>

	<form method="post" action="res.php" >
		<p>1 + 1 ?</p>
		<input type="radio" name="q1" value="1">
		<label>1</label>
		<input type="radio" name="q1" value="2">
		<label>2</label>
		<input type="radio" name="q1" value="3">
		<label>3</label>
		<hr>
		<p>6 * 2 ?</p>
		<input type="radio" name="q2" value="12">
		<label>12</label>
		<input type="radio" name="q2" value="22">
		<label>22</label>
		<input type="radio" name="q2" value="32">
		<label>32</label>
		<hr>
		<button>Valider</button>

	</form>

</body>

</html>