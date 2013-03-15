<?php
	
	$conn=NULL;

	function connect()
	{
		$conn=mysql_connect("localhost","root","");
		$seldb = mysql_select_db("oicpdb");
	/* if ($conn && $seldb)
	echo "<script>alert('Successfully connected to Database and DB Selected');</script>"; */
	}
	
?>