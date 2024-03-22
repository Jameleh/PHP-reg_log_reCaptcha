<?php
require_once('database.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Проверка на совпадение паролей
if ($password !== $confirm_password) {
   
    $errorCode = '127'; // Change this to the desired error code
    $errorMessage = 'Пароли не совпадают.'; // Change this to the desired error message
    header("Location: error.php?code=$errorCode&message=$errorMessage");
    exit();

}

// Проверка на уникальность почты и телефона
$query = "SELECT * FROM users WHERE email='$email' OR phone='$phone'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $errorCode = '128'; 
 
    $errorMessage = 'Пользователь с таким email или телефоном уже существует.'; 
    header("Location: error.php?code=$errorCode&message=$errorMessage");
    exit();

}

// Хэширование пароля
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Вставка данных в базу
$query = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$hashed_password')";
mysqli_query($conn, $query);

echo "Регистрация успешна!";
?>
