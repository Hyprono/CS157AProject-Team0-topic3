<?php
	require_once "project-v1.php";
	$qArray = array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],
$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],
$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20'],$_POST['q21'],$_POST['q22'],$_POST['q23'],$_POST['q24'],$_POST['q25']);

	$qTotal = 0;
	$complete = true;
	$uncompleted = array();
	for($i = 1; $i <= count($qArray); $i++)
	{
		if($qArray[$i-1] == null)
		{	
			$complete = false;
			$uncompleted[] = $i;
		}
		else
		{
			$qTotal += $qArray[$i-1];
		}
	}
	if(count($uncompleted) != 0)
	{
		echo "There are uncomplete questions.Please answer these questions before resubmitting for an accurate result. Your unfinished questions are: ";
		$string = "";
		for($i = 0; $i<count($uncompleted); $i++)
		{
			$string = $string."$uncompleted[$i]";
			if($i != count($uncompleted)-1)
			{
				$string = $string.", ";
 			}
		}
		echo $string;
		die(print("."));
	}
	else{
	echo <<<_END
		<html><head><title>Form Upload</title></head><body>
		<div id="bottom">
				<div id="evaluation">
					<b>The sum of all your responses is your THI score>>></b>
					<textarea id="score" rows="1" readonly> $qTotal </textarea>
				</div>
				<div id="scale">
					0-16: Slight or no handicap (Grade 1)</br>
					18-36: Mild handicap (Grade 2) </br>
					38-56: Moderate handicap (Grade 3) </br>
					58-76: Severe handicap (Grade 4) </br>
					78-100: Catastrophic handicap (Grade 5)
				</div>
			</div>
		</body>
		</html>
_END;
	}
?>