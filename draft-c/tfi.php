<?php
	require_once "main.php";

	echo <<<_END
	<!DOCTYPE HTML>
	<html>  
	<head>
		<title> TFI </title>
		<link href = "./tfi_css.css" rel = "stylesheet" type = "text/css">
		<style type = "style/css">
		</style>
	</head>
	<body>
	<br/><br/><br/>
	<form method='post' action='submit_tfi.php' enctype='multipart/form-data'>
		<div id="body" class="center" style="box-shadow:2px 2px 2px 4px #ccc">
			<br/>
			
			<br/>
			<div id="header">
				<h1 id="title" >Tinnitus Functional Index</h1>
				<br>
				<br>
				<div id="info">
					Today's Date <input id="date" type="date">
					<div id="name_div">Your Name <input id="name" type="text" size="45"></div>
				</div>
			</div>
			<br/>
			<br/>
			<br/>
			<table id="questions">
				<tr class="border">
					<td class="border">
						<b>Please read each question carefully. To answer a question, select ONE of the numbers that is listed for that question.</b>
					</td>
				</tr>
				<tr class="border gray">
					<td class="border">
						<b>I. Over the Past Week...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
								1. What percentage of your time awake were you consciously <b>AWARE</b> OF your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Never aware</i>&#8594;
										<input type="radio" name="q1" value="0">0%&nbsp
										<input type="radio" name="q1" value="10">10% &nbsp
										<input type="radio" name="q1" value="20">20%&nbsp
										<input type="radio" name="q1" value="30">30%&nbsp
										<input type="radio" name="q1" value="40">40%&nbsp
										<input type="radio" name="q1" value="50">50%&nbsp
										<input type="radio" name="q1" value="60">60%&nbsp
										<input type="radio" name="q1" value="70">70%&nbsp
										<input type="radio" name="q1" value="80">80%&nbsp
										<input type="radio" name="q1" value="90">90%&nbsp
										<input type="radio" name="q1" value="100">100%&nbsp
										&#8592;<i>Always aware</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
								2. How <b>STRONG</b> or <b>LOUD</b> was your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Not at all strong or loud</i>&#8594;
										<input type="radio" name="q2" value="0">0&nbsp
										<input type="radio" name="q2" value="1">1&nbsp
										<input type="radio" name="q2" value="2">2&nbsp
										<input type="radio" name="q2" value="3">3&nbsp
										<input type="radio" name="q2" value="4">4&nbsp
										<input type="radio" name="q2" value="5">5&nbsp
										<input type="radio" name="q2" value="6">6&nbsp
										<input type="radio" name="q2" value="7">7&nbsp
										<input type="radio" name="q2" value="8">8&nbsp
										<input type="radio" name="q2" value="9">9&nbsp
										<input type="radio" name="q2" value="10">10&nbsp
										&#8592;<i>Extremely strong or loud</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
								3. What percentage of your time were you <b>ANNOYED</b> by your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>None of the time</i>&#8594;
										<input type="radio" name="q3" value="0">0%&nbsp
										<input type="radio" name="q3" value="10">10%&nbsp
										<input type="radio" name="q3" value="20">20%&nbsp
										<input type="radio" name="q3" value="30">30%&nbsp
										<input type="radio" name="q3" value="40">40%&nbsp
										<input type="radio" name="q3" value="50">50%&nbsp
										<input type="radio" name="q3" value="60">60%&nbsp
										<input type="radio" name="q3" value="70">70%&nbsp
										<input type="radio" name="q3" value="80">80%&nbsp
										<input type="radio" name="q3" value="90">90%&nbsp
										<input type="radio" name="q3" value="100">100%&nbsp
										&#8592;<i>All of the time</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>SC. Over the PAST WEEK...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									4. Did you feel <b>IN CONTROL</b> in regard to your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Very much in control</i>&#8594;
										<input type="radio" name="q4" value="0">0&nbsp
										<input type="radio" name="q4" value="1">1&nbsp
										<input type="radio" name="q4" value="2">2&nbsp
										<input type="radio" name="q4" value="3">3&nbsp
										<input type="radio" name="q4" value="4">4&nbsp
										<input type="radio" name="q4" value="5">5&nbsp
										<input type="radio" name="q4" value="6">6&nbsp
										<input type="radio" name="q4" value="7">7&nbsp
										<input type="radio" name="q4" value="8">8&nbsp
										<input type="radio" name="q4" value="9">9&nbsp
										<input type="radio" name="q4" value="10">10&nbsp
										&#8592;<i>Never in control</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									5. How easy was it for you to <b>COPE</b> with your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Very easy to cope</i>&#8594;
										<input type="radio" name="q5" value="0">0&nbsp
										<input type="radio" name="q5" value="1">1&nbsp
										<input type="radio" name="q5" value="2">2&nbsp
										<input type="radio" name="q5" value="3">3&nbsp
										<input type="radio" name="q5" value="4">4&nbsp
										<input type="radio" name="q5" value="5">5&nbsp
										<input type="radio" name="q5" value="6">6&nbsp
										<input type="radio" name="q5" value="7">7&nbsp
										<input type="radio" name="q5" value="8">8&nbsp
										<input type="radio" name="q5" value="9">9&nbsp
										<input type="radio" name="q5" value="10">10&nbsp
										&#8592;<i>Impossible to cope</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									6. How easy was it for you to <b>IGNORE</b> your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Very easy to ignore</i>&#8594;
										<input type="radio" name="q6" value="0">0&nbsp
										<input type="radio" name="q6" value="1">1&nbsp
										<input type="radio" name="q6" value="2">2&nbsp
										<input type="radio" name="q6" value="3">3&nbsp
										<input type="radio" name="q6" value="4">4&nbsp
										<input type="radio" name="q6" value="5">5&nbsp
										<input type="radio" name="q6" value="6">6&nbsp
										<input type="radio" name="q6" value="7">7&nbsp
										<input type="radio" name="q6" value="8">8&nbsp
										<input type="radio" name="q6" value="9">9&nbsp
										<input type="radio" name="q6" value="10">10&nbsp
										&#8592;<i>Impossible to ignore</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>C. Over the PAST WEEK...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									7. Your ability to <b>CONCENTRATE</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q7" value="0">0&nbsp
										<input type="radio" name="q7" value="1">1&nbsp
										<input type="radio" name="q7" value="2">2&nbsp
										<input type="radio" name="q7" value="3">3&nbsp
										<input type="radio" name="q7" value="4">4&nbsp
										<input type="radio" name="q7" value="5">5&nbsp
										<input type="radio" name="q7" value="6">6&nbsp
										<input type="radio" name="q7" value="7">7&nbsp
										<input type="radio" name="q7" value="8">8&nbsp
										<input type="radio" name="q7" value="9">9&nbsp
										<input type="radio" name="q7" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									8. your ability to <b>THINK CLEARLY</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q8" value="0">0&nbsp
										<input type="radio" name="q8" value="1">1&nbsp
										<input type="radio" name="q8" value="2">2&nbsp
										<input type="radio" name="q8" value="3">3&nbsp
										<input type="radio" name="q8" value="4">4&nbsp
										<input type="radio" name="q8" value="5">5&nbsp
										<input type="radio" name="q8" value="6">6&nbsp
										<input type="radio" name="q8" value="7">7&nbsp
										<input type="radio" name="q8" value="8">8&nbsp
										<input type="radio" name="q8" value="9">9&nbsp
										<input type="radio" name="q8" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									9. Your ability to <b>FOCUS ATTENTION</b> on other things besides your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q9" value="0">0&nbsp
										<input type="radio" name="q9" value="1">1&nbsp
										<input type="radio" name="q9" value="2">2&nbsp
										<input type="radio" name="q9" value="3">3&nbsp
										<input type="radio" name="q9" value="4">4&nbsp
										<input type="radio" name="q9" value="5">5&nbsp
										<input type="radio" name="q9" value="6">6&nbsp
										<input type="radio" name="q9" value="7">7&nbsp
										<input type="radio" name="q9" value="8">8&nbsp
										<input type="radio" name="q9" value="9">9&nbsp
										<input type="radio" name="q9" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>SL. Over the PAST WEEK...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									7. How often did your tinnitus make it difficult to <b>FALL ASLEEP or STAY ASLEEP</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Never had difficulty</i>&#8594;&#8594;
										<input type="radio" name="q10" value="0">0&nbsp
										<input type="radio" name="q10" value="1">1&nbsp
										<input type="radio" name="q10" value="2">2&nbsp
										<input type="radio" name="q10" value="3">3&nbsp
										<input type="radio" name="q10" value="4">4&nbsp
										<input type="radio" name="q10" value="5">5&nbsp
										<input type="radio" name="q10" value="6">6&nbsp
										<input type="radio" name="q10" value="7">7&nbsp
										<input type="radio" name="q10" value="8">8&nbsp
										<input type="radio" name="q10" value="9">9&nbsp
										<input type="radio" name="q10" value="10">10&nbsp
										&#8592;<i>Always had difficulty</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									11. How often did your tinnitus cause you difficulty in getting <b>AS MUCH SLEEP</b> as you needed?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Never had difficulty</i>&#8594;
										<input type="radio" name="q11" value="0">0&nbsp
										<input type="radio" name="q11" value="1">1&nbsp
										<input type="radio" name="q11" value="2">2&nbsp
										<input type="radio" name="q11" value="3">3&nbsp
										<input type="radio" name="q11" value="4">4&nbsp
										<input type="radio" name="q11" value="5">5&nbsp
										<input type="radio" name="q11" value="6">6&nbsp
										<input type="radio" name="q11" value="7">7&nbsp
										<input type="radio" name="q11" value="8">8&nbsp
										<input type="radio" name="q11" value="9">9&nbsp
										<input type="radio" name="q11" value="10">10&nbsp
										&#8592;<i>Always had difficulty</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									12. How much of the time did your tinnitus keep you from <b>SLEEPING</b> as <b>DEEPLY</b> or as <b>PEACEFULLY</b> as you would have liked?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>None of the time</i>&#8594;
										<input type="radio" name="q12" value="0">0&nbsp
										<input type="radio" name="q12" value="1">1&nbsp
										<input type="radio" name="q12" value="2">2&nbsp
										<input type="radio" name="q12" value="3">3&nbsp
										<input type="radio" name="q12" value="4">4&nbsp
										<input type="radio" name="q12" value="5">5&nbsp
										<input type="radio" name="q12" value="6">6&nbsp
										<input type="radio" name="q12" value="7">7&nbsp
										<input type="radio" name="q12" value="8">8&nbsp
										<input type="radio" name="q12" value="9">9&nbsp
										<input type="radio" name="q12" value="10">10&nbsp
										&#8592;<i>All of the time</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>A. Over the PAST WEEK, how much of your tinnitus interfered with...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									13. Your ability to <b>HEAR CLEARLY</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q13" value="0">0&nbsp
										<input type="radio" name="q13" value="1">1&nbsp
										<input type="radio" name="q13" value="2">2&nbsp
										<input type="radio" name="q13" value="3">3&nbsp
										<input type="radio" name="q13" value="4">4&nbsp
										<input type="radio" name="q13" value="5">5&nbsp
										<input type="radio" name="q13" value="6">6&nbsp
										<input type="radio" name="q13" value="7">7&nbsp
										<input type="radio" name="q13" value="8">8&nbsp
										<input type="radio" name="q13" value="9">9&nbsp
										<input type="radio" name="q13" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									14. Your ability to <b>UNDERSTAND PEOPLE</b> who are talking to you?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q14" value="0">0&nbsp
										<input type="radio" name="q14" value="1">1&nbsp
										<input type="radio" name="q14" value="2">2&nbsp
										<input type="radio" name="q14" value="3">3&nbsp
										<input type="radio" name="q14" value="4">4&nbsp
										<input type="radio" name="q14" value="5">5&nbsp
										<input type="radio" name="q14" value="6">6&nbsp
										<input type="radio" name="q14" value="7">7&nbsp
										<input type="radio" name="q14" value="8">8&nbsp
										<input type="radio" name="q14" value="9">9&nbsp
										<input type="radio" name="q14" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									15. Your ability to <b>FOLLOW CONVERSATIONS</b> in a group or at meeting?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q15" value="0">0&nbsp
										<input type="radio" name="q15" value="1">1&nbsp
										<input type="radio" name="q15" value="2">2&nbsp
										<input type="radio" name="q15" value="3">3&nbsp
										<input type="radio" name="q15" value="4">4&nbsp
										<input type="radio" name="q15" value="5">5&nbsp
										<input type="radio" name="q15" value="6">6&nbsp
										<input type="radio" name="q15" value="7">7&nbsp
										<input type="radio" name="q15" value="8">8&nbsp
										<input type="radio" name="q15" value="9">9&nbsp
										<input type="radio" name="q15" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>R. Over the PAST WEEK, how much of your tinnitus interfered with...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									16. Your <b>QUIET RESTING ACTIVITIES</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q16" value="0">0&nbsp
										<input type="radio" name="q16" value="1">1&nbsp
										<input type="radio" name="q16" value="2">2&nbsp
										<input type="radio" name="q16" value="3">3&nbsp
										<input type="radio" name="q16" value="4">4&nbsp
										<input type="radio" name="q16" value="5">5&nbsp
										<input type="radio" name="q16" value="6">6&nbsp
										<input type="radio" name="q16" value="7">7&nbsp
										<input type="radio" name="q16" value="8">8&nbsp
										<input type="radio" name="q16" value="9">9&nbsp
										<input type="radio" name="q16" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									17. your ability to <b>RELAX</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q17" value="0">0&nbsp
										<input type="radio" name="q17" value="1">1&nbsp
										<input type="radio" name="q17" value="2">2&nbsp
										<input type="radio" name="q17" value="3">3&nbsp
										<input type="radio" name="q17" value="4">4&nbsp
										<input type="radio" name="q17" value="5">5&nbsp
										<input type="radio" name="q17" value="6">6&nbsp
										<input type="radio" name="q17" value="7">7&nbsp
										<input type="radio" name="q17" value="8">8&nbsp
										<input type="radio" name="q17" value="9">9&nbsp
										<input type="radio" name="q17" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									18. Your ability to enjoy <b>"PEACE AND QUIET"</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q18" value="0">0&nbsp
										<input type="radio" name="q18" value="1">1&nbsp
										<input type="radio" name="q18" value="2">2&nbsp
										<input type="radio" name="q18" value="3">3&nbsp
										<input type="radio" name="q18" value="4">4&nbsp
										<input type="radio" name="q18" value="5">5&nbsp
										<input type="radio" name="q18" value="6">6&nbsp
										<input type="radio" name="q18" value="7">7&nbsp
										<input type="radio" name="q18" value="8">8&nbsp
										<input type="radio" name="q18" value="9">9&nbsp
										<input type="radio" name="q18" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>Q. Over the PAST WEEK, how much of your tinnitus interfered with...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									19. Your enjoyment of <b>SOCIAL ACTIVITIES</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q19" value="0">0&nbsp
										<input type="radio" name="q19" value="1">1&nbsp
										<input type="radio" name="q19" value="2">2&nbsp
										<input type="radio" name="q19" value="3">3&nbsp
										<input type="radio" name="q19" value="4">4&nbsp
										<input type="radio" name="q19" value="5">5&nbsp
										<input type="radio" name="q19" value="6">6&nbsp
										<input type="radio" name="q19" value="7">7&nbsp
										<input type="radio" name="q19" value="8">8&nbsp
										<input type="radio" name="q19" value="9">9&nbsp
										<input type="radio" name="q19" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									20. Your <b>ENJOYMENT OF LIFE</b>?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q20" value="0">0&nbsp
										<input type="radio" name="q20" value="1">1&nbsp
										<input type="radio" name="q20" value="2">2&nbsp
										<input type="radio" name="q20" value="3">3&nbsp
										<input type="radio" name="q20" value="4">4&nbsp
										<input type="radio" name="q20" value="5">5&nbsp
										<input type="radio" name="q20" value="6">6&nbsp
										<input type="radio" name="q20" value="7">7&nbsp
										<input type="radio" name="q20" value="8">8&nbsp
										<input type="radio" name="q20" value="9">9&nbsp
										<input type="radio" name="q20" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									21. Your <b>RELATIONSHIPS</b> with family, friends, and other people?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Did not interfere</i>&#8594;
										<input type="radio" name="q21" value="0">0&nbsp
										<input type="radio" name="q21" value="1">1&nbsp
										<input type="radio" name="q21" value="2">2&nbsp
										<input type="radio" name="q21" value="3">3&nbsp
										<input type="radio" name="q21" value="4">4&nbsp
										<input type="radio" name="q21" value="5">5&nbsp
										<input type="radio" name="q21" value="6">6&nbsp
										<input type="radio" name="q21" value="7">7&nbsp
										<input type="radio" name="q21" value="8">8&nbsp
										<input type="radio" name="q21" value="9">9&nbsp
										<input type="radio" name="q21" value="10">10&nbsp
										&#8592;<i>Completely interfered</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									22. How often did your tinnitus cause you to have difficult performing your <b>WORK OR OTHER TASKS</b>, such as home maintenance, school work, or caring for children or others?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Never had difficulty</i>&#8594;
										<input type="radio" name="q22" value="0">0&nbsp
										<input type="radio" name="q22" value="1">1&nbsp
										<input type="radio" name="q22" value="2">2&nbsp
										<input type="radio" name="q22" value="3">3&nbsp
										<input type="radio" name="q22" value="4">4&nbsp
										<input type="radio" name="q22" value="5">5&nbsp
										<input type="radio" name="q22" value="6">6&nbsp
										<input type="radio" name="q22" value="7">7&nbsp
										<input type="radio" name="q22" value="8">8&nbsp
										<input type="radio" name="q22" value="9">9&nbsp
										<input type="radio" name="q22" value="10">10&nbsp
										&#8592;<i>Always had difficulty</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="gray">
						<b>E. Over the PAST WEEK...</b>
					</td>
				</tr>
				<tr class="border">
					<td class="border">
						<table class="full">
							<tr>
								<td>
									23. How <b>ANXIOUS</b> or <b>WORRIED</b> has your tinnitus made you feel?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Not at all anxious or worried</i>&#8594;
										<input type="radio" name="q23" value="0">0&nbsp
										<input type="radio" name="q23" value="1">1&nbsp
										<input type="radio" name="q23" value="2">2&nbsp
										<input type="radio" name="q23" value="3">3&nbsp
										<input type="radio" name="q23" value="4">4&nbsp
										<input type="radio" name="q23" value="5">5&nbsp
										<input type="radio" name="q23" value="6">6&nbsp
										<input type="radio" name="q23" value="7">7&nbsp
										<input type="radio" name="q23" value="8">8&nbsp
										<input type="radio" name="q23" value="9">9&nbsp
										<input type="radio" name="q23" value="10">10&nbsp
										&#8592;<i>Extremely anxious or worried</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									24. How <b>BOTHERED</b> or <b>UPSET</b> have you been because of your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Not at all bothered or upset</i>&#8594;
										<input type="radio" name="q24" value="0">0&nbsp
										<input type="radio" name="q24" value="1">1&nbsp
										<input type="radio" name="q24" value="2">2&nbsp
										<input type="radio" name="q24" value="3">3&nbsp
										<input type="radio" name="q24" value="4">4&nbsp
										<input type="radio" name="q24" value="5">5&nbsp
										<input type="radio" name="q24" value="6">6&nbsp
										<input type="radio" name="q24" value="7">7&nbsp
										<input type="radio" name="q24" value="8">8&nbsp
										<input type="radio" name="q24" value="9">9&nbsp
										<input type="radio" name="q24" value="10">10&nbsp
										&#8592;<i>Extremely bothered or upset</i>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									25. How <b>DEPRESSED</b> were you because of your tinnitus?
								</td>
							</tr>
							<tr>
								<td class="parent_center">
									<div class="fit spacing">
										<i>Not at all depressed</i>&#8594;
										<input type="radio" name="q25" value="0">0&nbsp
										<input type="radio" name="q25" value="1">1&nbsp
										<input type="radio" name="q25" value="2">2&nbsp
										<input type="radio" name="q25" value="3">3&nbsp
										<input type="radio" name="q25" value="4">4&nbsp
										<input type="radio" name="q25" value="5">5&nbsp
										<input type="radio" name="q25" value="6">6&nbsp
										<input type="radio" name="q25" value="7">7&nbsp
										<input type="radio" name="q25" value="8">8&nbsp
										<input type="radio" name="q25" value="9">9&nbsp
										<input type="radio" name="q25" value="10">10&nbsp
										&#8592;<i>Extremely depressed</i>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<div class="center">
				<button type="submit" style="margin:20px 10px;width:600px;font-size:20px;" name="tfi_form" value="Submit">Submit</button>
			</div>
		</div>
	</form>
	</body>
	</html>
_END;

