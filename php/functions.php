<?php


include('config.php');

$query = 'SELECT * FROM table ORDER BY id';

$result = mysqli_query($connection, $query);

$rows = array();

while($row = mysqli_fetch_array($result)) {
  $rows[] = $row;
} 

echo json_encode($rows);

?>