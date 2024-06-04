<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'avisales';

// Создание подключения к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Проверка, был ли отправлен POST-запрос
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение поискового запроса из POST-данных
    $searchQuery = $_POST['search'];

    // Подготовка и выполнение SQL-запроса
    $stmt = $conn->prepare("SELECT id, name, description FROM goods WHERE name LIKE ? OR description LIKE ?");
    $likeQuery = "%" . $searchQuery . "%";
    $stmt->bind_param("ss", $likeQuery, $likeQuery);
    $stmt->execute();
    $result = $stmt->get_result();

    // Проверка наличия результатов
    if ($result->num_rows > 0) {
        // Вывод результатов
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Description: " . $row["description"] . "<br>";
        }
    } else {
        echo "No results found";
    }

    // Закрытие подготовленного запроса и соединения
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
