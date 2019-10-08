<?php

echo '<p style="color:DeepPink;"> Welcome to my store! </p>';
$pw = $_POST["password"];
echo "Your password: " .$pw. "<br><br>";


$ss = $_POST["sweatshirt"];
$subSS = (int)$ss * 80;
$cb = $_POST["bracelet"];
$subCB= (int)$cb * 15;
$t = $_POST["tights"];
$subT = (int)$t * 65;
$subSP = $_POST["1"];
if($subSP == "0")
  $sp = "7 day";
  if($subSP == "50")
    $sp = "Overnight";
    if($subSP == "5")
      $sp = "3 day";
$total = (int)$subSS + (int)$subCB + (int)$subT + (int)$subSP;

echo "<table border =\"1\">";
echo '<tr>';
  echo '<td>' ." " . '</td>';
  echo '<td>' ."Quantity" . '</td>';
  echo '<td>' ."Cost per each" . '</td>';
  echo '<td>' ."Subtotal" . '</td>';
echo '</tr>';
echo '<tr>';
  echo '<td>' ."Adidas sweatshirt" . '</td>';
  echo '<td>' .$ss. '</td>';
  echo '<td>' ."$80.00" . '</td>';
  echo '<td>' ."$".$subSS . '</td>';
echo '</tr>';
echo '<tr>';
  echo '<td>' ."Custom braclet" . '</td>';
  echo '<td>' .$cb. '</td>';
  echo '<td>' ."$15.00" . '</td>';
  echo '<td>' ."$".$subCB . '</td>';
echo '</tr>';
echo '<tr>';
  echo '<td>' ."3/4 tights" . '</td>';
  echo '<td>' .$t. '</td>';
  echo '<td>' ."$65.00" . '</td>';
  echo '<td>' ."$".$subT . '</td>';
echo '</tr>';
echo '<tr>';
  echo '<td>' ."Shipping" . '</td>';
  echo '<td>' .$sp. '</td>';
  echo '<td>' ."$".$subSP . '</td>';
  echo '<td>' ."$".$subSP . '</td>';
echo '</tr>';
echo '<tr>';
  echo '<td>' ."Total Cost" . '</td>';
  echo '<td>' ."". '</td>';
  echo '<td>' ."" . '</td>';
  echo '<td>' ."$".$total . '</td>';
echo '</tr>';
echo '</table>';


?>
