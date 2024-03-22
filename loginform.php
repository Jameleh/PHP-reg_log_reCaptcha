<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Авторизация</title>
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
  <h2>Авторизация</h2>
  <form action="login.php" method="post" id="login-form">
    <table>
    
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
