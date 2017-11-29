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
						<a href = "index.php" >index</a> </br></br></br>
						
						<a href = "statistics.php" >stat</a> </br></br></br>>
						
						
						
                    </div>
						 <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
						$actorQuery = mysqli_query($connection, "SELECT customer_id, first_name, last_name, count(payment_id) FROM customer LEFT JOIN payment USING (customer_id)
GROUP BY customer_id, first_name, last_name ORDER BY count(payment_id) DESC LIMIT 10");
					while($row = mysqli_fetch_array($actorQuery))
					{
						echo "<p>{$row['customer_id']} {$row['first_name']} {$row['last_name']} {$row['count(payment_id)']}</p>";
					}
					
						
						
						
						
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