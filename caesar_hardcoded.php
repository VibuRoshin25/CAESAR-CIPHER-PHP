<?php
$PLAINTEXT = 'Hello';
$KEY = 3;
$CIPHERTEXT = '';
$len = strlen($PLAINTEXT);
for ($i = 0; $i < $len; $i++) {
    $c = $PLAINTEXT[$i];
    if (ctype_alpha($c)) {
        $base = ctype_lower($c) ? 'a' : 'A';
        $c = (ord($c) - ord($base) - $KEY + 26) % 26 + ord($base);
    }
    $CIPHERTEXT .= chr($c);
}
echo "CIPHERTEXT:";
echo $CIPHERTEXT;
