<?php

require_once('auth.php');
require_once('database.php');

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Профиль</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        table {
            width: 100%;
        }

        table tr {
            margin-bottom: 20px;
        }

        table tr:last-child {
            margin-bottom: 0;
        }

        table td {
            padding: 10px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Профиль пользователя</h2>
    <form action="update_profile.php" method="post">
        <table>
            <tr>
                <td>Имя:</td>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>Телефон:</td>
                <td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
            </tr>
            <tr>
                <td>Почта:</td>
                <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Новый пароль:</td>
                <td><input type="password" name="new_password"></td>
            </tr>
            <tr>
                <td>Подтвердите новый пароль:</td>
                <td><input type="password" name="confirm_new_password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Сохранить"></td>
            </tr>
        </table>
    </form>
</body>
</html>
