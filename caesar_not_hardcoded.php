<?php
 
 if($_SERVER['METHOD_REQUEST']=='POST'){
    $PLAINTEXT = $_POST['PLAINTEXT'];
    $KEY = $_POST['KEY'];
    $CIPHERTEXT = '';

    if(isset($_POST['ENCRYPT'])){
        $len = strlen($PLAINTEXT);
        for($i=0; $i<$len; $i++){
            $c = $PLAINTEXT[$i];
            if(ctype_alpha($c)){
                $base = ctype_lower($c)? 'a' : 'A';
                $c = (ord($c) - ord($base) - $KEY + 26) % 26 + ord($base);
            }
            $CIPHERTEXT .= chr($c);
        }
    }
    echo "<h2>CIPHERTEXT:</h2>";
    echo "<p>" . $CIPHERTEXT . "</p>";
 }

