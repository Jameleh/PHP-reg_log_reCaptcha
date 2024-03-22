<?php

require_once('auth.php');
require_once('database.php');

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$new_password = $_POST['new_password'];
$confirm_new_password = $_POST['confirm_new_password'];

// Если пользователь ввел новый пароль, проверяем его совпадение
if (!empty($new_password)) {
    if ($new_password !== $confirm_new_password) {
        die("Новые пароли не совпадают.");
    }
    // Хэшируем новый пароль
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    // Обновляем пароль в базе
    $update_query = "UPDATE users SET name='$name', phone='$phone', email='$email', password='$hashed_password' WHERE id='$user_id'";
} else {
    // Если новый пароль не введен, обновляем профиль без изменения пароля
    $update_query = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id='$user_id'";
}

// Выполняем запрос на обновление профиля
if (mysqli_query($conn, $update_query)) {
    echo "Профиль успешно обновлен.";
} else {
    echo "Ошибка при обновлении профиля: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
