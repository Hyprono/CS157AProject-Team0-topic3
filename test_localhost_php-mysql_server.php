<?php
	require_once 'login.php';
	$conn = new mysqli($host_name,$user_name,$password,$database);
	if($conn->connect_error) die(mysql_fatal_error("Your user info is either incorrect or not in the system."));
	
	$selectDB = "USE fileDB";
	$selDB = $conn->query($selectDB);
	
	//code that allows user to upload a .txt file;
	echo <<<_END
		<html><head><title>PHP Form Upload</title></head><body>
		<form method='post' action='Assignment5.php' enctype='multipart/form-data'>
				Select File: <input type='file' name='filename' size='10'>
				<input type='submit' value='Upload'>
		<input type = 'hidden' name = 'search' value = 'yes'>
		<input type = 'hidden' name = 'filename'> value = 'yes'>
		<input type = 'submit' value = "Search">
		</form>
_END;
    
    
	if ($_FILES)
	{
		$name = strtolower($_FILES['filename']['name']);
		$filetype = $_FILES['filename']['type'];
		if($filetype != 'text/plain')
		{
			die("You have uploaded a file that is not in plaintext format. Please reload and try again.");
		}
		//uploading file
	       elseif(file_exists($name))
			move_uploaded_file($_FILES['filename']['tmp_name'], $name);
			echo "Successfully uploaded ".$name;
			$string = file_get_contents("$name");
			
			//instead of the contents, we could just have the path stored instead of $string; this would be better for larger files.
			$addFile = "INSERT INTO files($name,$string)";
			$result = $conn->query($addFile);
			if(!$result) 
			{
				echo "File insertion failed for: $name<br>Please try again.<br>".$conn->error."<br>";
			}
			else
			{
				$showtable = "SELECT * FROM files";
				$table = $conn->query($showtable);
				if(!$table) die("files does not exist yet");
				$rows = $table->num_rows;
				for($i = 0; $i < $rows; $i++)
				{
					$table->data_seek($i);
					$row = $result-> fetch_array(MYSQLI_ASSOC);
					echo "File name: $row['Name']<br>";
					echo "Contents: $row['Content'<br>]";
				}
			}
		}
		//search function
		elseif(isset($_Post['Name']) && isset($_POST['search']))
		{
			$givenName = get_post($conn, 'Name');
			$showtable = "SELECT * FROM files WHERE Name = $givenName";
			$table = $conn->query($showtable);
			if(!$table) die("files does not exist yet, reload page and try again please");
			$rows = $table->num_rows;
			for($i = 0; $i < $rows; $i++)
			{
				$table->data_seek($i);
				$row = $result-> fetch_array(MYSQLI_NUM);
				echo "File name: $row['Name']<br>";
				echo "Contents: $row['Content'<br>]";
		}	
	}
	
	//displaying entire database
	$showtable = "SELECT * FROM files";
	$table = $conn->query($showtable);
	if(!$table) die("files does not exist yet, reload page and try again please");
	$rows = $table->num_rows;
	for($i = 0; $i < $rows; $i++)
	{
		$table->data_seek($i);
		$row = $result-> fetch_array(MYSQLI_ASSOC);
		echo "File name: $row['Name']<br>";
		echo "Contents: $row['Content'<br><br>]";
	}
	
	$result->close();
	$conn->close();

	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}
?>

/*MySQL commands used in terminal
mysql service start
mysql - u root - ptoor
CREATE DATABASE fileDB;
USE fileDB;
CREATE TABLE files(Name VARCHAR(32), Content VARCHAR(1000));
GRANT ALL ON filesDB.* TO 'n0s1r^!@'@'localhost' IDENTIFIED BY 'Bg02tEn';*/

/*login file
<?php
	$host_name = 'localhost';
	$user_name = 'Bg02tEn';
	$password = 'n0s1r^!@'
	$database = 'filesDB';
?>
*/
