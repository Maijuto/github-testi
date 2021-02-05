<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kertotaulu</title>
</head>
<body>
    <h1> Tervetuloa, syötä numero ja saat vastaukseksi luvun kertotaulun 1-10! </h1>
    <form action="kertotaulu2.php" method="POST">
    <input type="number" name="number">     <br>
    <input type="submit" name="table" value="laske"> 
</form>
<?php
$num=$_POST['number'];

if($num<=100)

{
  for ($i=1; $i<=10; $i++)
  {
    $mul=$num*$i;
    echo "$num * $i = $mul<br>";
   }
}
  else
  {
  echo "Jokin meni pieleen";
   }

?>
</body>
</html>
