  <style type="text/css">
  body {
    color: purple;
    background-color: <?php $color = substr(md5(time()), 0, 6); echo "#"; echo $color;?> }
  </style>
<?php

$color = substr(md5(time()), 0, 6);

echo '<a href="http://192.168.0.95/asir1_victorzayas/asir1.php">Página de Victor Zayas</a>';
echo "<br>";
echo "Aarón Martín López";
echo "<br>";
echo '<a href="http://192.168.0.90/asir1_pablo/asir1.php">Página de Pablo Moreta</a>';
  $archivo="visitas.txt";
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $proceso=fopen($archivo,"a") or die("basura");
  $ip=$_SERVER['REMOTE_ADDR'];
  $hoy = date('Y-m-d H:i:s');
  $datos="La ip es:".$ip." y fecha: ".$hoy." con Navegador".$user_agent."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);

?>