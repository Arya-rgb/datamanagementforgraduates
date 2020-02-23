<?php
/**
 * using mysqli_connect for database connection
 */

/* <?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'db_calon');

if (!$conn){
    echo 'gagal ';
}
?>
*/
$databaseHost = 'localhost';
$databaseName = 'db_calon';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>









