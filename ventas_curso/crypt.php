
<?php

 require_once("class/config.php");
$password="";
$safepass=crypt($password,"mario");


print("contraseña no cifrada:".$password)."<br/>\n";
print "Contraseña:".$password.":cifrada crypt:".$safepass."<br/>\n";


$safepass=md5($password);
print "Contraseña:".$password.":cifrada MD5:".$safepass."<br/>\n";



$safepass=sha1($password);
print "Contraseña:".$password.":cifrada SHA1:".$safepass."<br/>\n";

//print_r($_SERVER);
foreach($_SERVER as $indice => $valor) {
    print "$indice => $valor.<br/>\n ";
}

