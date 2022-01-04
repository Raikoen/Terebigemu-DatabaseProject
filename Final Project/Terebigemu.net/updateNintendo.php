<meta charset="utf-8">
<html>
	<!--
		Kyle Cole
		ITS362 Final Project
		Terebigemu.net/updateNintendo.php
	-->
	
  <head>
      <title>Update Nintendo Videogame Ratings</title>
      <link rel="stylesheet" type="text/css" href="terebigemu.css">
  </head>

  <body>
  		
	<?php
		require 'header.php';
			
		require_once 'dbconfig.php';
	
		try 
		{
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
	
	<center>
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
                </tr>
            <?php endwhile; ?>
        </table>
	</center>
        <br>

      <?php
	  
		
          require("dbconfig.php");
          try 
		  {
              $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
          } 
		  catch (PDOException $e) 
		  {
              die("Error occurred:" . $e->getMessage());
          }
          
          $sql = ('SELECT * FROM Nintendo');

          $q = $pdo->query($sql);
          $q->setFetchMode(PDO::FETCH_ASSOC);
          $r = $q->fetch()
      ?>
		<center>
			<h2 style="color: white">Edit Rating for Row <?php echo $_GET['System_ID'];?></h2>
			
			<form action="nintendoAction.php?action=update" method="post" name="formEdit">
				<input type="hidden" name="System_ID" value="<?php echo $_GET['System_ID']; ?>"/>
				
				<table width="320" border="0">	
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="Name" value=""/></td>
					</tr>
					<tr>
						<td align="right">Genre:</td>
						<td><input type="text" name="Genre" value=""/></td>
					</tr>
					<tr>
						<td align="right">Game:</td>
						<td><input type="text" name="Game" value=""/></td>
					</tr>
					<tr>
						<td align="right">Rating:</td>
						<td><input type="text" name="Rating" value=""/></td>
					</tr>
			
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="Submit"/>&nbsp;&nbsp;
							<input type="reset" value="RESET"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
  </body>
</html>