<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hey, I'm Samer.</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php
    	include("header.inc");
    ?>
	<section class = "aboutpage">
		<figure>
			<img src="./images/Samer.jpg" alt="img">
		</figure>
			<div class="personaldetail">
				<h1>Hey, I'm Samer.</h1>
				<h5>Majoring in <span class="name">Data Science</span></h5>
				<dl>
					<dt>Personal details</dt>
					<dd>Name(On passport): Samer</dd>
					<dd>Student ID: 103793756</dd>
					<dd>Email :<a href = "mailto:103793756@student.swin.edu.au" target="_blank">103793756@student.swin.edu.au</a></dd>
					<dd>Hobbies: Computers, Science </dd>
				</dl>
				<a href="#swtb" class="btn">Look at my Swinburne timetable</a>
			</div>
		</section>


	<section class="ttble" id="table_1">
		<h1 id = "swtb" class ="swtb"><span id="ti">THIS IS</span> MY SWINBURNE TIMETABLE!</h1>
			<div class="time">
					<table class="center">
						<thead>
							<tr>
								<th id = "neededradius1" >DAY/HRS</th>
								<th>8:30</th>
								<th>9:30</th>
								<th>10:30</th>
								<th>11:30</th>
								<th>12:30</th>
								<th>13:30</th>
								<th>14:30</th>
								<th>15:30</th>
								<th>16:30</th>
								<th id = "neededradius2">17:30</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>MON</th>
								<td class="cos10026">COS10026:Live Online</td>
								<td></td>
								<td class="cos10026">COS10026:Seminar</td>
								<td class="cos20007">COS20007:Live Online</td>					
								<td class="cos20007" colspan="2">COS20007:Lab</td>
								<td class="cos10004">COS10004:Live Online</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<th>TUE</th>
								<td></td>
								<td></td>
								<td class="cos10026" colspan="2">COS10026: Workshop</td><td></td>
								<td></td>
								<td></td>
								<td></td>
								
								<td></td>
							<td class="cos10025">COS10025:Seminar</td></tr>
							<tr>
								<th>WED</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							<td></td><td></td><td></td></tr>
							<tr>
								<th>THU</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<th id="neededradius3">FRI</th>
								<td class="cos10004" colspan="2">COS10004:Lab</td>
								<td class="cos10025">COS10025:Workshop</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>	
								<td></td>	
								<td id="neededradius4"></td>	
							</tr>
						</tbody>
						
					</table>
					<a href="about.html" class="btn" id="ret">Return to the previous Page!</a>
			</div>
	</section>
	<?php
        include("footer.inc");
    ?>
</html>