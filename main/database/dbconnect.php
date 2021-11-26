<?php
	$servername = "localhost"; //server name
	$username = "root";//username
	$pass = "";//password
	$dbname = "dbsrms"; //database name
	$link = mysqli_connect($servername,$username,$pass,$dbname);


	if ($link) {
		  "
			<script>
				window.alert('Successfully Connected to Database');
			</script>
		";
	}
?>
