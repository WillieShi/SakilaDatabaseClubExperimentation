<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Sakila Database</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>
						</br></br>
						<a href = "rentlist.php" >Rent List</a> </br></br></br>
                    </div>
						 <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
                      //  $db = mysqli_select_db("test", $connection);
						
						
									
                        $query = mysqli_query($connection,"select * from store");
						echo"<table width= '60%'>";
						    echo"<tr>";
							echo "<th width='10%'>Store&nbsp;ID</th>";
							echo "<th width='20%'>manager&nbsp;staffID</th>";
							echo "<th width= '40%'>Address&nbsp;ID</th>";
							echo "<th width= '30%'>last&nbsp;update</th>";
							
						    echo"</tr>";
                        while ($row = mysqli_fetch_array($query)) 
						{
                            echo"<tr>";
							echo "<td width='10%'>".$row['store_id']."</td>";
							echo "<td width='20%'>".$row['manager_staff_id']."</td>";
							echo "<td width= '40%'>".$row['address_id']."</td>";
							echo "<td width='30%'>".$row['last_update']."</td>";
						    echo"</tr>";
  
                        }
						echo"</table>";
                        ?>
                    
                    <div class="clear">
				
					
					</div>
					
                </div>
                <div class="clear">   </div>
				
            </div>        
     
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>