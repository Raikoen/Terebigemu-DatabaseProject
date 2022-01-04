<!DOCTYPE HTML>
<html>
	<!-- 
		Kyle Cole
		ITS362 Final Project
		Terebigemu.net/TGN Home.php
	-->
	
	<head>
		<title>
			TGN Home
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
			<img src="Terebigemu.net.png" width="700" height="150">
		</center>
		
		<div style="text-align: center">
				
			<h1 style="color:white">Welcome to Terebigemu.net!</h1>
		
			<a href="addRatings.php" title="Insert table data">Add Rating</a> |  
			<a href ="editRatings.php" title="Edit table data">Edit Rating</a> | 
			<a href="deleteRatings.php" title="Delete table data">Delete Rating</a>		
		</div>
		
		<center>
		<br>
		<div id="article", style="color: white">
			Review your favorite video games using our website.<br><br>
			Click on <a href="addRatings.php">Add Rating</a>, 
			<a href="editRatings.php">Edit Rating</a>, 
			or <a href="deleteRatings.php">Delete Rating</a> 
			to get started. <br><br>
		</div>
		</center>
				
		<div> <!-- NINTENDO -->
				
			<?php
			
					require_once 'dbconfig.php';
	
					try {
							$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
							//Select statement to print table contents
							$sql = ('SELECT * FROM Nintendo');
					
							
							$q = $pdo->query($sql);
							$q->setFetchMode(PDO::FETCH_ASSOC);
						} 
						catch (PDOException $e)
						{
							die("Error occurred:" . $e->getMessage());
						}
			?>
			
			<center>
				<h3 style ="color: white">Nintendo Videogame Ratings</h3>
       
				<table>
					<tr>
						<th>ID</th>
						<th>System</th>
						<th>Genre</th>
						<th>Game</th>
						<th>Rating</th>
					</tr>
					<?php while ($r = $q->fetch()): ?>
					<tr>
						<td><?php echo $r['System_ID'] ?></td>
						<td><?php echo $r['Name'] ?></td>
						<td><?php echo $r['Genre'] ?></td>
						<td><?php echo $r['Game'] ?></td>
						<td><?php echo $r['Rating'] ?></td>
					</tr>
				<?php endwhile; ?>
				</table>

			<br>

			</center>
		</div>
			
 
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
			
			<center>

				<h3 style ="color: white">Sony Videogame Ratings</h3>
       
				<table>
					<tr>
						<th>ID</th>
						<th>System</th>
						<th>Genre</th>
						<th>Game</th>
						<th>Rating</th>
					</tr>
					
				<?php while ($r = $q->fetch()): ?>
					<tr>
						<td><?php echo $r['System_ID'] ?></td>
						<td><?php echo $r['Name'] ?></td>
						<td><?php echo $r['Genre'] ?></td>
						<td><?php echo $r['Game'] ?></td>
						<td><?php echo $r['Rating'] ?></td>
					</tr>
				<?php endwhile; ?>
				</table>

			<br>
			</center>
		</div>
		
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
			
			<center>

				<h3 style ="color: white">Microsoft Videogame Ratings</h3>
       
				<table>
					<tr>
						<th>ID</th>
						<th>System</th>
						<th>Genre</th>
						<th>Game</th>
						<th>Rating</th>
					</tr>
					
				<?php while ($r = $q->fetch()): ?>
					<tr>
						<td><?php echo $r['System_ID'] ?></td>
						<td><?php echo $r['Name'] ?></td>
						<td><?php echo $r['Genre'] ?></td>
						<td><?php echo $r['Game'] ?></td>
						<td><?php echo $r['Rating'] ?></td>
                   
					</tr>
				<?php endwhile; ?>
				</table>
			</center>
		
		</div>
			
	</body>
</html>

		

	
