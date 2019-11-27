<?php
	require_once 'login.php';
	
	$menu = "		
		<html>
			<head>
				<title>Main Page</title>
				<style>
					div{ padding:10px; }
					<link href='.'/thi_css.css' rel='stylesheet' type='text'/'css'>
				</style>
			</head>
		<body>
		<div style='margin:0 auto;width:80%'>
			<form method='post' id='form1' enctype='multipart/form-data'>
				<label for='thc'>THC 
				<input type='text' name='thc'>
			</form>
			<button type='submit' form='form1' value='Submit'>Submit</button>
			<div>
				<input type = 'button' value = 'THI form' onclick=\"window.location.href = 'http://localhost/CS157A/submit_thi.php'\"/>
				<input type = 'button' value = 'TFI form' onclick=\"window.location.href = 'http://localhost/CS157A/submit_tfi.php'\"/>
			</div>
		</div>
		</html>
	";

	session_start();
	$conn = new mysqli($host_name, $user_name, $password, $database);
	if($conn->connect_error) {
		die(print("Your user info is either incorrect or not in the system."));
	}
	echo htmlspecialchars_decode($menu);
		
	if(isset($_POST['thc']))
	{
		$existAlready = 0;
		$thc = $_POST['thc'];
		//this query sees if user already exists
		$existPatient = "SELECT * FROM patient WHERE thc = '$thc';";
		
		if($conn->query($existPatient)->num_rows !== 0) {
			$existAlready = 1;
		}
		else {
			$addPatient = "INSERT INTO patient (thc) VALUES ('$thc');";
			$result = $conn->query($addPatient);
		}

		//patient is either in system or is added to system
		//now we add to the visit table
		if($existAlready == 1){
			//retrieves last visit number
			$lastVisit = "SELECT max(visit_nr) FROM visit WHERE patient_thc = '$thc';";
			if(!$lastVisit)
			{
				print($conn->connect_error);
			}
			$oldNr = $conn->query($lastVisit);
			$oldNr = $oldNr->fetch_row();
			$oldNr = end($oldNr);
			
			$newNr = $oldNr + 1;

			$date = date("Y") . "-" . date("m") . "-" . date("d");
			$comment = 'Great Person';
			$newVisit = "INSERT INTO visit(visit_nr, date, comments, patient_thc) VALUES('$newNr','$date','$comment','$thc');";
			$result = $conn->query($newVisit);
			if(!$result)
			{
				print($conn->connect_error);
			}
		}
		else
		{
			$newNr = 1;
			$date = date("Y") . "-" . date("m") . "-" . date("d");
			$comment = 'Nice Person';
			$newVisit = "INSERT INTO visit (visit_nr, date, comments, patient_thc) VALUES('$newNr','$date','$comment','$thc');";
			$result = $conn->query($newVisit) or trigger_error("Query Failed! SQL: $newVisit - Error: ".mysqli_error($conn), E_USER_ERROR);
			if(!$result)
			{
				print($conn->connect_error);
			}
		}
		$lastVisit = "SELECT max(visit_id) FROM visit WHERE patient_thc = '$thc';";
		$newID = $conn->query($lastVisit);
		$newID = $newID->fetch_row();
		$newID = end($newID);
		$_SESSION['newID'] = $newID;
		echo $_SESSION['newID'];
	}
?>
