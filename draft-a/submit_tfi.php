<?php
	
	require_once "main.php";
	require_once "tfi.php";
	require_once "login.php";


	$newNr = $_SESSION['newID'];

	$qArray = array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],
$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],
$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20'],$_POST['q21'],$_POST['q22'],$_POST['q23'],$_POST['q24'],$_POST['q25']);
	$maxSkip = 7;
	$skipped = 0;
	$total = 0;
	$intrusive = 0;
	$sense_of_control = 0;
    $cognitive = 0;
    $sleep = 0;
    $auditory = 0;
    $relaxation = 0;
    $quality_of_life = 0;
    $emotional = 0;
    for($i = 1; $i <= count($qArray); $i++)
	{
		if($qArray[$i-1] == null)
		{	
			$skipped = $skipped + 1;
			if($skipped = $maxSkip)
			{
				die(print("You have skipped 7 or more questions, please answer more questions so that we can achieve an accurate analysis."));
			}
		}
		else
		{
			$total += $qArray[$i-1];
			if($i<=3)
			{
				$intrusive = $intrusive + $qArray[$i-1];
			}
			else if($i<=6)
			{
				$sense_of_control = $sense_of_control + $qArray[$i-1];
			}
			else if($i<=9)
			{
				$cognitive = $cognitive + $qArray[$i-1];
			}
			else if($i<=12)
			{
				$sleep = $sleep + $qArray[$i-1];
			}
			else if($i<=15)
			{
				$auditory = $auditory + $qArray[$i-1];
			}
			else if($i<=18)
			{
				$relaxation = $relaxation + $qArray[$i-1];
			}
			else if($i<=22)
			{
				$quality_of_life = $quality_of_life + $qArray[$i-1];
			}
			else if($i<=25)
			{
				$emotional = $emotional + $qArray[$i-1];
			}
		}
	}
	$conn = new mysqli($host_name, $user_name, $password, $database);

	$addEntry = $conn->prepare('INSERT INTO thi VALUES(?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?)');
	if($addEntry != false) {
	
		$addEntry->bind_param('iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii',$total,$intrusive,$sense_of_control,$cognitive,$sleep,$auditory,$relaxation,$quality_of_life,$emotional,$_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],
		$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],
		$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20'],$_POST['q21'],$_POST['q22'],$_POST['q23'],$_POST['q24'],$_POST['q25'],$newID);
		$addEntry->execute();
		$addEntry->close();
		
		$conn->close();
	}
?>