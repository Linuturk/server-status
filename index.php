<html>
<head><title><?php echo exec('hostname -f') ?></title></head>
<body>
<center>
<h1><?php echo exec('hostname -f') ?></h1>
<?php
$load = exec("uptime");
echo $load;
?>
</center>
</body>
</html>
