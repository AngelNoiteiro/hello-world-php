<!DOCTYPE html>
<html>
<head>
  <title>Hello world</title>
  <meta charset="utf-8" />
</head>
<body>
<h1>Hello world: apache/php</h1>
<?php
  $load = sys_getloadavg();
?>
  Horário do servidor: <?php echo date("c"); ?><br />
  Utilização do servidor (carga): <?php echo $load[0]; ?>
</body>
</html>
