<?php

$a = rand(0, 100);
$b = $_GET['b'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Основы PHP</title>
	<style>
		
	</style>
</head>
<body>

<?php 

// Елси гет параметр не существует
if(!isset($_GET['b'])) {
	echo '<p>Введите число через get-параметр (например, ?b=92)</p>';
}
// Елси гет параметр существует
else {
	echo '<p>Переменная $a случайное число(между 0 и 100)</p>';
	echo '<p>Переменная $b число переданная get-параметром (заданное через ?b=)</p>';
	
	echo '<p>$a = '.$a.'</p>';
	echo '<p>$b = '.$b.'</p>';
	
	echo '<p>Теперь сравниваем их...</p>';
	
	// Если b > a
	if($b > $a) {
	echo "<p>Слишком много!</p>";
	}
	// Иначе ...
	else {
		// Если b > a
		if($b < $a) {
			echo "<p>Слишком мало!</p>";
		}
		// Иначе ...
		else {
			echo "<p>Вы угадали!!!</p>";
		}
	}
}

?>

</body>
</html>
