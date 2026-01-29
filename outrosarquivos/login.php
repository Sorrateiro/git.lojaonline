<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
</html>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"] ?? '';
  $pass = $_POST["password"] ?? '';
  if ($user === "admin" && $pass === "1234") {
    $_SESSION["user"] = $user;
    header("Location: index.html");
    exit;
  } else {
    $erro = "Login inválido!";
  }
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Usuário" required>
  <input type="password" name="password" placeholder="Senha" required>
  <button type="submit">Entrar</button>
</form>
<?php if (!empty($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
