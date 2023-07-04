<?php
 function generate_pw($passwordLenght) {
  $length=$passwordLenght;
  $pw = '';
  for($i = 0; $i < $length; $i++) {
    $pw .= chr(rand(44, 126));
  }
  return $pw;
}
?>