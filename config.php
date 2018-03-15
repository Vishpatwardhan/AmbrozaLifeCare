<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'localhost');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   /* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
