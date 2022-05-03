<?php
$connection = mysqli_connect('localhost','root');
// if ($connection) {
// echo "Connection is Stable";    
// }

// else{
//     echo "Connection Failed";
// }
mysqli_select_db($connection, 'travel');
