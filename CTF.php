<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib0.2.2');  
include('Crypt/RSA.php');

$rsa = new Crypt_RSA();
extract($rsa->createKey());

$plaintext = 'terrafrost';
$rsa->loadKey($privatekey);
$ciphertext = $rsa->encrypt($plaintext);
echo $ciphertext."<br>";
echo base64_encode($ciphertext)."<br>";

$rsa->loadKey($publickey);
echo base64_decode($ciphertext)."<br>";
echo $rsa->decrypt($ciphertext);

?>
