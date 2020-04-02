<?php
require_once 'lib/pseudocrypt.php';

echo "<pre>";
foreach(range(1, 10) as $n) {
 echo $n." - ";
 $hash = PseudoCrypt::hash($n, 6);
 echo $hash." - ";
 echo PseudoCrypt::unhash($hash)."<br/>";
}

?>
