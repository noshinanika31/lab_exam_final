<?php
   $conn = mysqli_connect('localhost', 'root', '', 'company');
   $sql= "SELECT * from user";
   $result = mysqli_query($conn, $sql);
	
?>
<html>
<head>
<title >User data</title>
</head>
<body>
<td valign="top">
			<form>
                <input type="text" name="search" onkeyup="getData()" id="search" placeholder="search by name..." />
                <input type="button" name="searchSubmit" value="Search"/>         
            </form>
            <div id="searchData">
                
            </div>
        

		</td>
<table width = "600px" border="1" cellpadding = "1px" cellspacing="1px">
			<tr align="center">
				<td colspan="8" height = '100px' width ='500px' <h2  style="background-color:tomato">VIEW ALL USERS</h2></td>
				</tr>

<tr>
<th> ID</th>
<th> name</th>
<th> contact no</th>
<th> user name</th>
<th> Delete </th>
<th> Update </th>

</tr>


<?php
while($row = mysqli_fetch_assoc($result))  {
	
    echo "<tr>";	  
    echo "<td>".$row["id"]."</td>" ;
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["contactno"]."</td>";
    echo "<td>".$row["username"]."</td>";
	
	echo "<td><a href='deleteUser.php?id=".$row['id']."'>
	<input type='button' name='deleteUser' value='delete'></a>
	</td>"; 
	echo "<td><a href='editU.php?id=".$row['id']."'>
	<input type='button' name='editU' value='edit'></a>
	</td>";
	
    echo "</tr>";}
?>
	
</table>
</body>
<br>

<a href ="home.php" target="myframe">go back </a></td>
</html>