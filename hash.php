<?php
$pass = $_GET["pass"];
if (CRYPT_BLOWFISH == 1) {
    echo crypt($pass, '$2a$10$OOv2wLxbNjUxVcc1sjysau') ;
}
?>
