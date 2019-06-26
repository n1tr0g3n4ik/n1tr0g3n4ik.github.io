<?php
// SHA1,128,256,512 шифрование, использование - sha.php?type=512&password=|PWD|
  echo hash('sha'.$_GET['type'], $_GET['password']);
?>