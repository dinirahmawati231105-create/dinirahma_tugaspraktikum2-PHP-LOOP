<h2>1.loop while</h2>
<?php  
//PENGULANGANwhile
$hitung = 1;
while ($hitung <= 10){
  if ($hitung == 6)break;
  echo "angka - " . $hitung;
  echo "<br>";
  $hitung++;}
?>

<hr>
<h2>2.Break</h2>
<?php  
$i= 0;
while ($i < 5) {
  if ($i == 4) break;  
  echo "angka-". $i;
  echo "<br>";
  $i++;
} 
?>  
<hr>
<h2>3.loop break while</h2>
<?php  
$i = 2;

while ($i < 8) {
  if ($i == 5) break;  
  echo "angka-". $i;
  echo "<br>";
  $i++;
} 
?>  

<hr>
<h2>4.CONTINUE WHILE</h2>
<?php  
$i = 1;

while ($i < 5) {
  $i++;
  if ($i == 3) continue;  
  echo "siswa yang hadir-". $i;
  echo "<br>";
} 
?> 

<hr>
<h2>5.Alternatif syntax</h2>
<?php  
$i = 0;

while ($i < 5):
  echo "angka-" . $i;
  echo "<br>";
  $i++;
endwhile;
?>  

<hr>
<h2>6.loop do while</h2>
<?php
$counter = 1;
do{
    echo"siswa yang hadir -" . $counter ."<br>";
    $counter++; //increment proses namba nilai variabel
} while($counter <= 5);
?> 

<hr>
<h2>7.loop do while break</h2>
<?php  
$i = 1;

while ($i < 10) {
  if ($i == 8) break;  
  echo "daftar produk-". $i . "<br>";
  $i++;
} 
?>  