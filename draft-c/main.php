<?php
	require_once 'login.php';
	
	$menu = "		
		<html>
			<head>
				<title>Main Page</title>
				<style>
					div{ padding:10px; max-width: 660px; min-width:660px; }
					width:
					<link href = './tfi_css.css' rel = 'stylesheet' type = 'text/css'>
				</style>
			</head>
		<body>
		<br/><br/><br/>
		<div style='margin:0 auto;width:80%; box-shadow:2px 2px 2px 4px #ccc; width:660px; top-padding:30px;'>
			<div style:padding:20px;>
				<h3>Tinnitus Hyperacusis Center</h3>
				<a href='./main.php' style='float:right;margin-top:-70px;padding:40px;'>home / sign out</a>
				<h1>Interview Sign In</h1>
			</div>
			<form method='post' id='form1' enctype='multipart/form-data'>
				  <div style='padding:5px 25px'>
						<label for='thc' style='font-size:18px;'>THC#:
						<br/>
						<input type='text' name='thc' style='font-size: 20px;width:85%; background-color:#cef1ff; border-bottom: 1px dashed black;'>
  				</div>	
				  <div style='padding:5px 25px'>
						<label for='thc' style='font-size:18px;'>Patient THC#:
						<br/>
						<input type='text' style='font-size: 20px; width:85%; background-color:#cef1ff; border-bottom: 1px dashed black;'>
  				</div>
					<div style='padding:5px 25px'>
						<label for='thc' style='font-size:18px;'>Date:
						<br/>
						<input type='text' style='font-size: 20px;width:85%; background-color:#cef1ff; border-bottom: 1px dashed black;'>	
  				</div>
			</form>
			<br/>
			<button type='submit' form='form1' style='font-size:20px;width:100%;'value='Submit'>Submit</button>


			<div style='padding:20px 0px;width:660px;'>
				<input type = 'button' disabled value = 'Initial / Follow-up Interview' onclick=\"window.location.href = 'http://localhost/CS157A/submit_thi.php'\"
					style='font-size:16px;width:32%;background-color:#cef1ff;'
				/>
				<input type = 'button' value = 'Tinnitus Handicap Inventory' onclick=\"window.location.href = 'http://localhost/CS157A/submit_thi.php'\"
					style='font-size:16px;width:32%;background-color:#cef1ff;'
				/>
				<input type = 'button' value = 'Tinnitus Functional Index' onclick=\"window.location.href = 'http://localhost/CS157A/submit_tfi.php'\"
					style='font-size:16px;width:32%;background-color:#cef1ff;'
				/>
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
