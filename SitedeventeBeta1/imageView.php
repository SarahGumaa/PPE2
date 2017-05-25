<?php
	$conn = mysqli_connect("localhost", "root", "", "basebeta");
    /*mysqli_select_db($conn ,"basebeta") or die(mysql_error());*/
   //Il faut faire une jointure pour que chaque utilisateur et sa propre photo en avatar
        $sql = "SELECT photo,idEmp,photoType,photoData FROM photo,employer WHERE photoId=idEmp ";
		$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["photoType"]);
        echo $row["photoData"];
	
	mysqli_close($conn);
?>