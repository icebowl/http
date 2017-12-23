<html><head><title>icebowl.cc</title></head>
<style>
body{
font-family: system-ui, sans-serif;
}

pre{
background-color: #fdf6e3   ;
color: #b58900;
font-family: system-ui , sans-serif;
border: solid 1px;
border-radius: 20px;
padding : 10px;
}

a{
font-family: system-ui , sans-serif;
	background-color:#cb4b16; ;
	color: #fff;
	font-size:20px;
	text-decoration:none;
	border: solid 1px;
border-radius: 5px;
padding : 2px;
	
}

a:hover{
	background-color: #dc322f; ;
	color:  #fdf6e3; ;
	text-decoration:none;
	
	
}


</style>
<body>
<center>
<a href = "index.php?v=0" class = "menu" >GAME SERVER ON</a>&nbsp; 
<a href = "index.php?v=1" class = "menu" >CHECK PS</a>&nbsp; 
<a href = "index.php?v=2" class = "menu" >GAME SERVER OFF</a>&nbsp;

<hr />
<?php
if (isset($_GET['v'])) {
	$thepost = $_GET['v']; // Default page
	} else {
		$thepost = -1;
	}
	
if ($thepost == -1) {
	$output = shell_exec('cal');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 0) {
	$output = shell_exec('nohup ./LinuxTestBuildv1_3.x86_64 >> /dev/null 2>&1 &');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 1) {
	$output = shell_exec('ps');
	 echo "OUTPUT";
	echo "<pre>$output</pre>";
}
if ($thepost == 2) {
        $output = shell_exec('pkill LinuxTestBuildv');
	 echo "OUTPUT";
        echo "<pre>$output</pre>";
}

?>

<hr />

</body>
</html>
