<!DOCTYPE HTML>
<html>
	<!--
		Kyle Cole
		ITS362 Final Project
		Terebigemu.net/addRatings.php
	-->
	
	<head>
		<title>
			Add Videogame Ratings
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
						$( "#tabs" ).tabs();
					}	 
				);
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
	
	<?php
			//displays the navigation menu from a header file
			require 'header.php';
	?>
	<body>
	
		<div id="tabs">
			<ul>		
				<li><a href="#tabs-1">Nintendo</a></li>
				<li><a href="#tabs-2">Sony</a></li>
				<li><a href="#tabs-3">Microsoft</a></li>
					
			</ul>
  
			<div id="tabs-1"> <!-- NINTENDO -->
				<?php
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
				
			<center>
				<h1 style="color: white">Nintendo Videogame Ratings</h1>
				<h3 style ="color: white">Enter a new videogame rating</h3>
       
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
			<br><br>
				<form action="nintendoAction.php?action=add" method="post">
					<input type="hidden" name="System_ID" value="<?php echo $_GET['System_ID']; ?>"/>
					
					<table width="320" border="0">
						<tr>
							<td align="right">ID:</td>
							<td><input type="text" name="System_ID"/></td>
						</tr>
						<tr>
							<td align="right">System:</td>
							<td><input type="text" name="Name"/></td>
						</tr>
						<tr>
							<td align="right">Genre:</td>
							<td><input type="text" name="Genre"/></td>
						</tr>
						<tr>
							<td align="right">Game:</td>
							<td><input type="text" name="Game"/></td>
						</tr>
						<tr>
							<td align="right">Rating:</td>
							<td><input type="text" name="Rating"/></td>
						</tr>
					
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="ADD"/>&nbsp;&nbsp;
								<input type="reset" value="RESET"/>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
	
		<div id="tabs-2"> <!-- SONY -->
	
			<?php
			
					require_once 'dbconfig.php';
					try {
							$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
							// execute the stored procedure
							$sql = ('SELECT * FROM Sony');
					
							// call the stored procedure
							$q = $pdo->query($sql);
							$q->setFetchMode(PDO::FETCH_ASSOC);
						} 
						catch (PDOException $e)
						{
							die("Error occurred:" . $e->getMessage());
						}
			?>
			<center>
		
				<h1 style="color: white">Sony Videogame Ratings</h1>
				<h3 style ="color: white">Enter a new videogame rating</h3>
       
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
				
				<br><br>
				
				<form action="sonyAction.php?action=add" method="post">
					<input type="hidden" name="System_ID" value="<?php echo $_GET['System_ID']; ?>"/>
					<table width="320" border="0">
						<tr>
							<td align="right">ID:</td>
							<td><input type="text" name="System_ID"/></td>
						</tr>
						<tr>
							<td align="right">System:</td>
							<td><input type="text" name="Name"/></td>
						</tr>
						<tr>
							<td align="right">Genre:</td>
							<td><input type="text" name="Genre"/></td>
						</tr>
						<tr>
							<td align="right">Game:</td>
							<td><input type="text" name="Game"/></td>
						</tr>
						<tr>
							<td align="right">Rating:</td>
							<td><input type="text" name="Rating"/></td>
						</tr>
					
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="ADD"/>&nbsp;&nbsp;
								<input type="reset" value="RESET"/>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
	
		<div id="tabs-3"> <!-- MICROSOFT -->
			<?php
			
				require_once 'dbconfig.php';
				try {
						$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
						// execute the stored procedure
						$sql = ('SELECT * FROM Microsoft');
					
						// call the stored procedure
						$q = $pdo->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
					} 
					catch (PDOException $e)
					{
						die("Error occurred:" . $e->getMessage());
					}
			?>
			
			<center>

				<h1 style="color: white">Microsoft Videogame Ratings</h1>
				<h3 style ="color: white">Enter a new videogame rating</h3>
       
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
				
				<br><br>
				
				<form action="microsoftAction.php?action=add" method="post">
					<input type="hidden" name="System_ID" value="<?php echo $_GET['System_ID']; ?>"/>
					<table width="320" border="0">
						<tr>
							<td align="right">ID:</td>
							<td><input type="text" name="System_ID"/></td>
						</tr>
						<tr>
							<td align="right">System:</td>
							<td><input type="text" name="Name"/></td>
						</tr>
						<tr>
							<td align="right">Genre:</td>
							<td><input type="text" name="Genre"/></td>
						</tr>
						<tr>
							<td align="right">Game:</td>
							<td><input type="text" name="Game"/></td>
						</tr>
						<tr>
							<td align="right">Rating:</td>
							<td><input type="text" name="Rating"/></td>
						</tr>
						
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="ADD"/>&nbsp;&nbsp;
								<input type="reset" value="RESET"/>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
	</div>
	</body>
</html>