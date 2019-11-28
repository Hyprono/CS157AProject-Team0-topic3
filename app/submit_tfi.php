<?php
	
	require_once "tfi.php";
	require_once "login.php";
	require_once "main.php";
	session_start();
	$newID = $_SESSION['newID'];
	$qArray = array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],
$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],
$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20'],$_POST['q21'],$_POST['q22'],$_POST['q23'],$_POST['q24'],$_POST['q25']);
	$maxSkip = 7;
	$skipped = 0;
	$total = 0;
	
	$intrusive = 0;
	$iNum = 0;
	
	$sense_of_control = 0;
	$scNum = 0;
    
    $cognitive = 0;
	$cNum = 0;
    
    $sleep = 0;
	$sNum = 0;
    
    $auditory = 0;
	$aNum = 0;
    
    $relaxation = 0;
	$rNum = 0;

    $quality_of_life = 0;
    $qlNum = 0;

    $emotional = 0;	
    $eNum = 0;

    for($i = 1; $i <= count($qArray); $i++){
		if($qArray[$i-1] == null){	
			$skipped = $skipped + 1;
			if($skipped == $maxSkip){
				die(print("<br/><br/><br/><div class='center' style='padding:20px;box-shadow:2px 2px 2px 4px #ccc'>
						<h3>Hint:</h3>
						<span>You have skipped 7 or more questions, please answer more questions so that we can achieve an accurate analysis.
						</span>
						<br/>
						</div><br/><br/><br/>"));
			}
		}else{
			$total += $qArray[$i-1];
			if($i<=3){
				$intrusive = $intrusive + $qArray[$i-1];
				$iNum++;
			}else if($i<=6){
				$sense_of_control = $sense_of_control + $qArray[$i-1];
				$scNum++;
			}else if($i<=9){
				$cognitive = $cognitive + $qArray[$i-1];
				$cNum++;
			}else if($i<=12){
				$sleep = $sleep + $qArray[$i-1];
				$sNum++;
			}else if($i<=15){
				$auditory = $auditory + $qArray[$i-1];
				$aNum++;
			}else if($i<=18){
				$relaxation = $relaxation + $qArray[$i-1];
				$rNum++;
			}else if($i<=22){
				$quality_of_life = $quality_of_life + $qArray[$i-1];
				$qlNum++;
			}else if($i<=25){
				$emotional = $emotional + $qArray[$i-1];
				$eNum++;
			}
		}
	}

	$total = ($total/(25-$skipped))*10;
	$intrusive = ($intrusive/$iNum)*10;
	$sense_of_control = ($sense_of_control/$scNum)*10;
    $cognitive = ($cognitive/$cNum)*10;
    $sleep = ($sleep/$sNum)*10;
    $auditory = ($auditory/$aNum)*10;
    $relaxation = ($relaxation/$rNum)*10;
    $quality_of_life = ($quality_of_life/$qlNum)*10;
    $emotional = ($emotional/$eNum)*10;

	echo <<<_END
		<html>
			<head>
				<title>Form Upload</title>
			</head>
			<body>
			<br/><br/><br/>
			<div class='center' style='padding:20px;box-shadow:2px 2px 2px 4px #ccc'>
				<h3>Results:</h3>
				<div id="evaluation">
					<b>The sum of all your responses is your TFI score:</b>
					<textarea id="score" rows="1" readonly> $total </textarea>
				</div>
				<div id='scale'>
					<u style="line-height:30px;">Subcategory Scores:</u>
					<br/>$intrusive / 100 - Intrusive          
					<br/>$sense_of_control / 100 - Sense of Control
					<br/>$cognitive / 100 - Cognative          
					<br/>$sleep / 100 - Sleep     
					<br/>$auditory / 100 - Auditory
					<br/>$relaxation / 100 - Relaxation
					<br/>$quality_of_life / 100 - Quality of Life
					<br/>$emotional / 100 - Emotional
				</div>
			</div>	
			<br/><br/><br/><br/>
			</body>
		</html>
_END;

	

	$conn = new mysqli($host_name, $user_name, $password, $database);
	$addEntry = $conn->prepare('INSERT INTO tfi VALUES(?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?)');	
	$addEntry->bind_param('iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii',$total,$intrusive,$sense_of_control,$cognitive,$sleep,$auditory,$relaxation,$quality_of_life, $emotional,$_POST['q1'],$_POST['q2'],$_POST['q3'], $_POST['q4'], $_POST['q5'],$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20'],$_POST['q21'],$_POST['q22'],$_POST['q23'],$_POST['q24'],$_POST['q25'],$newID);
	$addEntry->execute();
	$addEntry->close();
	
	$conn->close();
?>