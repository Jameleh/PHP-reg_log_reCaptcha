<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Регистрация и авторизация</title>
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

<div>
  <h2>Авторизация</h2>
  <form action="login.php" method="post" id="login-form">
    <table>
      <tr>
        <th>Поле</th>
        <th>Значение</th>
      </tr>
      <tr>
        <td>Телефон или почта:</td>
        <td><input type="text" name="identifier"></td>
      </tr>
      <tr>
        <td>Пароль:</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="g-recaptcha" data-sitekey="6LfXt6ApAAAAAPorw4fenuyXZnadNuyGcAoq7um_"></div><br>
          <button data-callback='onSubmit' data-action='submit'>Submit</button>
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
