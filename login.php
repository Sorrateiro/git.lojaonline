<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  if ($user == "admin" && $pass == "1234") {
    $_SESSION["user"] = $user;
    header("Location: index.html");
  } else {
    echo "Login inválido!";
  }
}
?>

<form method="POST">
  <input type="text" name="username" placeholder="Usuário">
  <input type="password" name="password" placeholder="Senha">
  <button type="submit">Entrar</button>
</form>
