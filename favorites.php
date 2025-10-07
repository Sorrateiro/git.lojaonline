
<?php
session_start();
if (!isset($_SESSION["user"])) {
  echo "Faça login para ver seus favoritos.";
  exit;
}
// Simulação de favoritos
echo "<h1>Seus Favoritos</h1>";
echo "<ul><li>Produto 1</li><li>Produto 2</li></ul>";
?>
