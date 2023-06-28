<!DOCTYPE html>
<html>
<head>
<link href="<?= url("assets/web/css/register.css"); ?>" rel="stylesheet">
</head>
<body>
  <h1>Cadastro</h1>
  <form action="login.html" method="post">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>
    
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
