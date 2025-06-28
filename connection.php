
<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "database_471";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=database_471",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
