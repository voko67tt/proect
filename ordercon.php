<?php
$host = 'localhost';
$dbname = 'restic';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $tableNumber = $_POST['table_number'];
    $customerName = $_POST['customer_name'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO orders (table_number, customer_name, quantity) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$tableNumber, $customerName, $quantity]);
    $pdo = null;
    header('Location: index.html');
} catch (PDOException $e) {
    echo 'Помилка підключення до бази даних: ' . $e->getMessage();
    exit();
}

?>
