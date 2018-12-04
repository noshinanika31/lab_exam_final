<?php
    session_start();

    if(isset($_SESSION['name'])){
?>

<table width="50%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">  
			<table width="100%">
                <tr>
                    <td>
                       
                            <img height="48" src="logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="profile.php" target="iFrame"><?=$_SESSION['name']?></a>&nbsp;|
                        <a href="#">Logout</a>
                    </td>
                </tr>
			</table>
        </td>
    </tr>
    <tr>
        <td width="190" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
                <?php 
                if($_SESSION['type'] == 'admin')
                
              
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="profile.html" >View Profile</a></li>
                    <li><a href="viewuser.php" >View all Employee</a></li>
                    <li><a href="search.php" >search employee</a></li>
                    <li><a href="logout.php">Logout</a></li>
            
            
               
            </ul> ?>
        </td>
        <td valign="top">
			<form>
                <input type="text" name="search" onkeyup="getData()" id="search" placeholder="search by name..." />
                <input type="button" name="searchSubmit" value="Search"/>         
            </form>
            <div id="searchData">
                
            </div>
        

		</td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2018
        </td>
    </tr>
</table>

<?php
}else{
    header("location: login.php");
}?>

<script type="text/javascript">

    function getData(){
        var data = document.getElementById('search').value;

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchData").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "searchData.php?data="+data, true);
        xhttp.send(); 
    }

</script>