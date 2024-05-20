<?php
// Подключение к базе данных
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'login_main';

$conn = new mysqli($host, $username, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из базы данных по айди
$id = $_GET['id']; // Предположим, что айди передается в URL

$sql = "SELECT * FROM workspaces WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $description = $row['description'];
    $created_at = date("Y-m-d H:i:s");
}

$conn->close();
?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
    <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="text" name="description" value="<?php echo $description; ?>">
    <input type="submit" value="Обновить">
</form>