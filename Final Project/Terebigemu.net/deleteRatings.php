<!DOCTYPE HTML>
<html>
	<!--
		Kyle Cole
		ITS362 Final Project
		Terebigemu.net/deleteRatings.php
	-->
	
	<head>
		<title>
			Delete Videogame Ratings
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
	
	<?php
			require 'header.php';
	?>
	<body>
	
	<center>
		<div> <!-- NINTENDO -->
		
			<script type="text/javascript">
				function deleteNintendoByID(System_ID)
				{
					if(confirm("Click OK to delete row "+System_ID))
					{
						window.location="nintendoAction.php?action=delete&System_ID="+System_ID;
					}
				}

			</script>
			
			<?php
			
				require_once 'dbconfig.php';
	
				try {
						$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					
						$sql = ('SELECT * FROM Nintendo');
				
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
					<td>
                        <?php echo
                        "<a href='javascript:deleteNintendoByID({$r['System_ID']})' title='Delete this row'>Delete</a>";
                        ?>
                    </td>
                </tr>
            <?php endwhile; ?>
			</table>	
		</div>
	
	</center>
	
	<center>
		<div> <!-- SONY -->
		
			<script type="text/javascript">
				function deleteSonyByID(System_ID)
				{
					if(confirm("Click OK to delete row "+System_ID))
					{
						window.location="sonyAction.php?action=delete&System_ID="+System_ID;
					}
				}

			</script>
	
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
					<td>
                        <?php echo
                        "<a href='javascript:deleteSonyByID({$r['System_ID']})' title='Delete this row'>Delete</a>";
                        ?>
                    </td>
                </tr>
            <?php endwhile; ?>
			</table>
		</div>
	</center>
	
	<center>
	
		<div> <!-- MICROSOFT -->
			<script type="text/javascript">
				function deleteMicrosoftByID(System_ID)
				{
					if(confirm("Click OK to delete row "+System_ID))
					{
						window.location="microsoftAction.php?action=delete&System_ID="+System_ID;
					}
				}

			</script>
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
					<td>
                        <?php echo
                        "<a href='javascript:deleteMicrosoftByID({$r['System_ID']})' title='Delete this row'>Delete</a>";
                        ?>
                    </td>
                </tr>
            <?php endwhile; ?>
			</table>
		</div>
	</center>
	</body>
</html>