<?php
/**
* The html document for the thi form
*
*/

	require_once "main.php";
	echo <<<_END
	<!DOCTYPE HTML>
	<html>  
	<head>
		<title> THI </title>
		<link href="./thi_css.css" rel="stylesheet" type="text/css">
		<style>
			td div{ padding:10px; max-width: 600px; min-width:600px }
		</style>
	</head>
	<body>
	</br>
	</br>
	</br>

	<form method="post" action="submit_thi.php" enctype="multipart/form-data">
	<div id="page" class="center" style="box-shadow:2px 2px 2px 4px #ccc; width:660px;">
		<div>
				<div>
					<h1>Tinnitus Handicap Inventory (THI)</h1>
				</div>
				<blob style="border:1px solid black;width:600px;display:block;padding:10px;">
					<i>This form is for <u>informational purposes only</u> and should not take the place of consulation and evaluation by a healthcare professional</i>
				</blob>
			
			<div id="name_and_date">
				<div class="left">
					Your Name:  <input type="text" size="35" name="name">
				</div>
				<div class="right">
					Date: <input type="text" size="20" name="date">
				</div>
			</div>
			<div id="instructions">
				<B>Instructions:</B> The purpose of this questionnaire is to identify, quantify, and evaluate the difficulties that you may be experiencing because of tinnitus. When you have answered all the questions, add up your total score, based on the values of each response.
			</div>
		</div>

		<table id="questions" style='width:660px;''>
			<tr class="lightgray">
				<td class="row">
					<div>1. Because of tinnitus, it is difficult for you to concentrate?</div>
						<div class="right">
							<input type="radio" name="q1" value="4">Yes (4)
							<input type="radio" name="q1" value="2">Sometimes (2)
							<input type="radio" name="q1" value="0">Never (0)
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">2. Does the loudness of your tinnitus make it difficult for you to hear people?</div>
					<div class="right">
						<input type="radio" name="q2" value="4">Yes (4)
						<input type="radio" name="q2" value="2">Sometimes (2)
						<input type="radio" name="q2" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td>
					<div class="row left">3. Does your tinnitus make you angry?</div>
					<div class="row right">
						<input type="radio" name="q3" value="4">Yes (4)
						<input type="radio" name="q3" value="2">Sometimes (2)
						<input type="radio" name="q3" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">4. Does your tinnitus make you feel confused?</div>
					<div class="right">
						<input type="radio" name="q4" value="4">Yes (4)
						<input type="radio" name="q4" value="2">Sometimes (2)
						<input type="radio" name="q4" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">5. Because of your tinnitus, do you feel desperate?</div>
					<div class="right">
						<input type="radio" name="q5" value="4">Yes (4)
						<input type="radio" name="q5" value="2">Sometimes (2)
						<input type="radio" name="q5" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">6. Do you complain a great deal about your tinnitus?</div>
					<div class="right">
						<input type="radio" name="q6" value="4">Yes (4)
						<input type="radio" name="q6" value="2">Sometimes (2)
						<input type="radio" name="q6" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">7. Because of your tinnitus, do you have trouble falling asleep at night?</div>
					<div class="right">
						<input type="radio" name="q7" value="4">Yes (4)
						<input type="radio" name="q7" value="2">Sometimes (2)
						<input type="radio" name="q7" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">8. Do you feel as though you cannot escape your tinnitus?</div>
					<div class="right">
						<input type="radio" name="q8" value="4">Yes (4)
						<input type="radio" name="q8" value="2">Sometimes (2)
						<input type="radio" name="q8" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">9. Does your tinnitus interfere with your ability to enjoy your socail activites (such as going out to dinner, to the movies)?</div>
					<div class="right">
						<input type="radio" name="q9" value="4">Yes (4)
						<input type="radio" name="q9" value="2">Sometimes (2)
						<input type="radio" name="q9" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">10. Because of your tinnitus, do you feel frustrated?</div>
					<div class="right">
						<input type="radio" name="q10" value="4">Yes (4)
						<input type="radio" name="q10" value="2">Sometimes (2)
						<input type="radio" name="q10" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">11. Because of your tinnitus, do you feel that you have a terrible disease?</div>
					<div class="right">
						<input type="radio" name="q11" value="4">Yes (4)
						<input type="radio" name="q11" value="2">Sometimes (2)
						<input type="radio" name="q11" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">12. Does your tinnitus make itdifficult for you to enjoy life?</div>
					<div class="right">
						<input type="radio" name="q12" value="4">Yes (4)
						<input type="radio" name="q12" value="2">Sometimes (2)
						<input type="radio" name="q12" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">13. Does your tinnitus interfere with your job or household responsibilities?</div>
					<div class="right">
						<input type="radio" name="q13" value="4">Yes (4)
						<input type="radio" name="q13" value="2">Sometimes (2)
						<input type="radio" name="q13" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">14. Because of your tinnitus, do you find that you are often irritable?</div>
					<div class="right">
						<input type="radio" name="q14" value="4">Yes (4)
						<input type="radio" name="q14" value="2">Sometimes (2)
						<input type="radio" name="q14" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">15. Because of your tinnitus, is it difficult for you to read?</div>
					<div class="right">
						<input type="radio" name="q15" value="4">Yes (4)
						<input type="radio" name="q15" value="2">Sometimes (2)
						<input type="radio" name="q15" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">16. Does your tinnitus make you upset?</div>
					<div class="right">
						<input type="radio" name="q16" value="4">Yes (4)
						<input type="radio" name="q16" value="2">Sometimes (2)
						<input type="radio" name="q16" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">17. Do you feel that your tinnitus problem has placed stress on your reslationships with members of your family and friends?</div>
					<div class="right">
						<input type="radio" name="q17" value="4">Yes (4)
						<input type="radio" name="q17" value="2">Sometimes (2)
						<input type="radio" name="q17" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">18. Do you find it difficult to focus your attention away from your tinnitus and on other things?</div>
					<div class="right">
						<input type="radio" name="q18" value="4">Yes (4)
						<input type="radio" name="q18" value="2">Sometimes (2)
						<input type="radio" name="q18" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">19. Do you feel that you have no control over your tinnitus?</div>
					<div class="right">
						<input type="radio" name="q19" value="4">Yes (4)
						<input type="radio" name="q19" value="2">Sometimes (2)
						<input type="radio" name="q19" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">20. Because of your tinnitus, do you often feel tired?</div>
					<div class="right">
						<input type="radio" name="q20" value="4">Yes (4)
						<input type="radio" name="q20" value="2">Sometimes (2)
						<input type="radio" name="q20" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">21. Because of your tinnitus, do you feel depressed?</div>
					<div class="right">
						<input type="radio" name="q21" value="4">Yes (4)
						<input type="radio" name="q21" value="2">Sometimes (2)
						<input type="radio" name="q21" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">22. Does your tinnitus make you feel anxious?</div>
					<div class="right">
						<input type="radio" name="q22" value="4">Yes (4)
						<input type="radio" name="q22" value="2">Sometimes (2)
						<input type="radio" name="q22" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">23. Do you feel that you can no longer cope with your tinnitus?</div>
					<div class="right">
						<input type="radio" name="q23" value="4">Yes (4)
						<input type="radio" name="q23" value="2">Sometimes (2)
						<input type="radio" name="q23" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr>
				<td class="row">
					<div class="left">24. Does your tinnitus get worse when you are under stress?</div>
					<div class="right">
						<input type="radio" name="q24" value="4">Yes (4)
						<input type="radio" name="q24" value="2">Sometimes (2)
						<input type="radio" name="q24" value="0">Never (0)
					</div>
				</td>
			</tr>
			<tr class="lightgray">
				<td class="row">
					<div class="left">25. Does your tinnitus make you feel insecure?</div>
					<div class="right">
						<input type="radio" name="q25" value="4">Yes (4)
						<input type="radio" name="q25" value="2">Sometimes (2)
						<input type="radio" name="q25" value="0">Never (0)
					</div>
				</td>
			</tr>
			</table>
			<div class="center">
				<button type="submit" style="margin:20px 10px;width:600px;font-size:20px;" name="thi_form">Submit</button>
			</div>
	</div>
	</form>
	</body>
	</html>
	';
_END
?>
