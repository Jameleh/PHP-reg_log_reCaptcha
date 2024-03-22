<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Регистрация </title>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>
<div>
  <h2>Регистрация</h2>
  <form action="register.php" method="post">
    <table>
     
      <tr>
        <td>Имя:</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Телефон:</td>
        <td><input type="text" name="phone"></td>
      </tr>
      <tr>
        <td>Почта:</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Пароль:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td>Повторите пароль:</td>
        <td><input type="password" name="confirm_password"></td>
      </tr>
    </table>
    <input type="submit" value="Зарегистрироваться">
  </form>
</div>


</body>
</html>
