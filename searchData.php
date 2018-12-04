<?php

	require_once('db.php');

	$data 	= $_GET['data'];
	$conn = getConnection();

	$sql = "select * from user where name like '%$data%'";

	$result = mysqli_query($conn, $sql);

	echo  "<table width='100%'>";
    while($row = mysqli_fetch_assoc($result)){

        echo  "<tr border=1> <td><b>Name: </b></td> <td>".$row['name']."</td>
                    <td><b>Contact no: </b></td> <td>".$row['contactno']."</td>
                    <td>      </td> <td><a href='php/userDetails.php?contactno=".$row['contactno']."'>Details</a></td>
              </tr>";
    }
    echo "</table>";
?>