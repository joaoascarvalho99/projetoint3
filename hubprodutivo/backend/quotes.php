<?php
$quotes = [
  "A persistência vence o talento.",
  "Menos código, menos bugs.",
  "Aprender fazendo é aprender a sério.",
  "Primeiro funciona, depois melhora."
];
header("Content-Type: application/json");
echo json_encode($quotes[array_rand($quotes)]);
