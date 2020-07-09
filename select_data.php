<?php

$connect = new mysqli("localhost","root","","controldatabase") or die('some error ecur');
 $sql = "SELECT R_IGHT,S_TOP,F_ORWARD,B_ACKWARD, L_EFT FROM direction ORDER BY id DESC LIMIT 1";
$query = mysqli_query($connect,$sql);
while($row = mysqli_fetch_assoc($query)){
  foreach ($row as $row) {
    print "$row";
  }
}

?>
