<?php 
// Creating a variable to store the 
// info 
$ip_server = $_SERVER['SERVER_ADDR'];
$client_ip = $_SERVER['REMOTE_ADDR'];
$wan_ip = file_get_contents("http://bot.whatismyipaddress.com");   
?>
<!doctype html>
<html lang="en">
<head>
<title>Compunet Demo Highly Available Web Application</title>
</head>
<body>
<h1 style="text-align: center;">Compunet Demo Highly Available Web Application</h1>

<table style="margin-left: auto; margin-right: auto;" border="1" cellpadding="5">
<tbody>
<tr>
<td style="width: 45px;">
<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="server.png" alt="server" width="30" /></h1>
</td>
<td style="width: 353px;">
<h2 style="text-align: right;">Server Internal IP Address is:</h2>
</td>
<td style="width: 135px;">
<h3><?= $ip_server ?></h3>
</td>
</tr>
<tr>
<td style="width: 45px;">
<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="user.png" alt="user" width="45" /></h1>
</td>
<td style="width: 353px;">
<h2 style="text-align: right;">Client IP Address is:</h2>
</td>
<td style="width: 135px;">
<h3><?= $client_ip ?></h3>
</td>
</tr>
<tr>
<td style="width: 45px;">
<h1><img style="display: block; margin-left: auto; margin-right: auto;" src="cloud.png" alt="cloud" width="45" /></h1>
</td>
<td style="width: 353px;">
<h2 style="text-align: right;">Server WAN IP Address is:</h2>
</td>
<td style="width: 135px;">
<h3><?= $wan_ip ?></h3>
</td>
</tr>
</tbody>
</table>
</body>
</html>
