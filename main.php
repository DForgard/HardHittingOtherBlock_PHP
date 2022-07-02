<?php
$isLoginCorrect = True;
$isPasswordCorrect = True;

$isUserConnected = $isLoginCorrect && $isPasswordCorrect;

if ($isUserConnected) {
  echo 'Bonjour utilisateur !';
} else {
  echo 'Bonjour inconnu ! ';
}