<?php

$connect = mysqli_connect("localhost","root","","controldatabase") or die('some error ecur');
if(isset($_POST['S'])){
$sql = mysqli_query($connect,"INSERT INTO direction(S_TOP) VALUE('S')");
if ($sql) {
  echo " SUCCSSESFUL INSERTED ";
}
else {
  echo "ERROR";
}
}

if(isset($_POST['R'])){
$sql = mysqli_query($connect,"INSERT INTO direction(R_IGHT) VALUE('R')");
if ($sql) {
  echo " SUCCSSESFUL INSERTED ";
}
else {
  echo "ERROR";
}
}

if(isset($_POST['F'])){
$sql = mysqli_query($connect,"INSERT INTO direction(F_ORWARD) VALUE('F')");
if ($sql) {
  echo " SUCCSSESFUL INSERTED ";
}
else {
  echo "ERROR";
}
}
if(isset($_POST['L'])){
$sql = mysqli_query($connect,"INSERT INTO direction(L_EFT) VALUE('L')");
if ($sql) {
  echo " SUCCSSESFUL INSERTED ";
}
else {
  echo "ERROR";
}
}
if(isset($_POST['B'])){
$sql = mysqli_query($connect,"INSERT INTO direction(B_ACKWARD) VALUE('B')");
if ($sql) {
  echo " SUCCSSESFUL INSERTED ";
}
else {
  echo "ERROR";
}
}
?>
