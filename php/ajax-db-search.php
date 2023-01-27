<?php
include ('../php/config.php');

$conn=mysqli_connect($host, $user, $password, $db);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }


if (isset($_GET['term'])) {

   $query = "SELECT * FROM airports WHERE ICAO LIKE '{$_GET['term']}%' LIMIT 10";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['ICAO'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>