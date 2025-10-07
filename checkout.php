<?php
session_start();
if (!isset($_SESSION["user"])) {
  echo "Você precisa estar logado para pagar.";
  exit;
}
// Aqui você processaria o pagamento
echo "Pagamento realizado com sucesso!";
?>
