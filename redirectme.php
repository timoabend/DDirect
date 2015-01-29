<?php
include('ipaddress.php');
$location = 'Location: http://' . $ipaddress;
header($location);
exit;
?>
