<meta charset="utf-8">
<?php

	/*
		Kyle Cole
		ITS362 Final Project
		Terebigemu.net/microsoftAction.php
	*/
	
    require("dbconfig.php");
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
	{
        die("Connection failed: " . $conn->connect_error);
    }
   
    switch($_GET["action"])
	{
        case "add":
                
                $System_ID = $_POST["System_ID"];
                $Name = $_POST["Name"];
                $Genre = $_POST["Genre"];
				$Game = $_POST["Game"];
				$Rating = $_POST["Rating"];
				
                $sql = "CALL `Insert_Microsoft`('{$System_ID}','{$Name}','{$Genre}','{$Game}','{$Rating}')";

                if ($conn->query($sql) === TRUE)
				{
					echo "New record created successfully";
				} 
				else 
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
                
                echo "<br><a href='TGN Home.php'>RETURN</a>";
                break;
        case "delete":
                $System_ID=$_GET['System_ID'];
                $sql = "CALL `Delete_Microsoft`('{$System_ID}')";
             
                if ($conn->query($sql) === TRUE)
				{
                    echo "Record deleted successfully";
                }
				else 
				{
                    echo "Error deleting record: " . $conn->error;
                }
				
                echo "<br><a href='TGN Home.php'>RETURN</a>";
                break;
        case "update":
                $System_ID = $_POST["System_ID"];
                $Name = $_POST["Name"];
                $Genre = $_POST["Genre"];
                $Game = $_POST['Game'];
				$Rating = $_POST['Rating'];
				
                echo $System_ID . "\n";
                echo $Name."\n";
				echo $Genre."\n";
                echo $Game."\n";
				echo $Rating."\n";
 
               
                //call the stored procedure
                $sql = "CALL `Update_Microsoft`('{$System_ID}','{$Name}','{$Genre}','{$Game}','{$Rating}')";
                if ($conn->query($sql) === TRUE) 
				{
                    echo "Record updated successfully";
                } 
				else
				{			
                   echo "Error updating record: " . $conn->error;
                }
				
                echo "<br><a href='TGN Home.php'>RETURN</a>";
				
            break;
    }
?>