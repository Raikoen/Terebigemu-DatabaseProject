<!DOCTYPE HTML>
<html>
	<!--
		Kyle Cole
		ITS362 Final Project
		Terebigemu.net/editRatings.php
	-->
	
	<head>
		<title>
			Edit Videogame Ratings
		</title>
		<link rel="stylesheet" type="text/css" href="terebigemu.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="jquery-ui.min.css">
		<script src="jquery.js"></script>
		<script src="jquery-ui.min.js"></script>
		
		<script>			   
				$( 
					function() 
					{
						$( document ).tooltip();
					}
				);
 
				
				function Reload()
				{
					location.reload();
					return false;
				}
		</script>
	
	</head>
	
	<body>
	<center>
		<div> <!-- NINTENDO -->
			<?php
				require 'header.php';
				require_once 'dbconfig.php';
				try {
						$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
						// execute the stored procedure
						$sql = ('SELECT * FROM Nintendo');
					
						// call the stored procedure
						$q = $pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
					} 
					catch (PDOException $e)
					{
						die("Error occurred:" . $e->getMessage());
					}
			?>
		

			<h1 style ="color: white">Nintendo Videogame Ratings</h1>
       
			<table>
				<tr>
					<th>System</th>
					<th>Genre</th>
					<th>Game</th>
					<th>Rating</th>
				</tr>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['Name'] ?></td>
                    <td><?php echo $r['Genre'] ?></td>
                    <td><?php echo $r['Game'] ?></td>
					<td><?php echo $r['Rating'] ?></td>
					<td>		
						<?php echo
							"<a href='updateNintendo.php?System_ID= {$r['System_ID']}'  title = 'Edit this row'>Edit</a>";
                        ?>
					</td>
                </tr>
            <?php endwhile; ?>
			</table>
		</div>
	</center>
	<center>
		<div> <!-- SONY -->
	
			<?php
				require_once 'dbconfig.php';
				try {
						$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
						$sql = ('SELECT * FROM Sony');
					
						$q = $pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
					} 
					catch (PDOException $e)
					{
						die("Error occurred:" . $e->getMessage());
					}
			?>

			<h1 style ="color: white">Sony Videogame Ratings</h1>
       
			<table>
				<tr>
					<th>System</th>
					<th>Genre</th>
					<th>Game</th>
					<th>Rating</th>
				</tr>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['Name'] ?></td>
                    <td><?php echo $r['Genre'] ?></td>
                    <td><?php echo $r['Game'] ?></td>
					<td><?php echo $r['Rating'] ?></td>
					<td>			
						<?php echo
							"<a href='updateSony.php?System_ID= {$r['System_ID']}'  title = 'Edit this row'>Edit</a>";
                        ?>
					</td>  
                </tr>
            <?php endwhile; ?>
			</table>
		</div>
	</center>
	
	<center>
		<div> <!-- MICROSOFT -->
	
			<?php
				require_once 'dbconfig.php';
				try {
						$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
						$sql = ('SELECT * FROM Microsoft');

					$q = $pdo->query($sql);
					$q->setFetchMode(PDO::FETCH_ASSOC);
					} 
					catch (PDOException $e)
					{
						die("Error occurred:" . $e->getMessage());
					}
			?>

			<h1 style ="color: white">Microsoft Videogame Ratings</h1>
       
			<table>
				<tr>
					<th>System</th>
					<th>Genre</th>
					<th>Game</th>
					<th>Rating</th>
				</tr>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['Name'] ?></td>
                    <td><?php echo $r['Genre'] ?></td>
                    <td><?php echo $r['Game'] ?></td>
					<td><?php echo $r['Rating'] ?></td>
					<td>		
						<?php echo
							"<a href='updateMicrosoft.php?System_ID= {$r['System_ID']}'  title = 'Edit this row'>Edit</a> ";
                        ?>
					</td> 
                </tr>
            <?php endwhile; ?>
			</table>
		</div>
	</center>
	</body>
</html>