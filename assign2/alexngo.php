<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hi there, it's me Alex</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php
    	include("header.inc");
    ?>
	<section class = "aboutpage">
		<figure>
			<img src="./images/alexngo.jpg" alt="img"/>
		</figure>	
			<div class="personaldetail">
				<h1>Hi there, I'm Son!</h1>
				<h5>Majoring in <span class="name">AI</span></h5>
				<dl>
					<dt>Personal details</dt>
					<dd>Name(On passport): Ngo The Son</dd>
					<dd>Student ID:103487949</dd>
					<dd>Email :<a href = "mailto:103827804@student.swin.edu.au" target="_blank">103827804@student.swin.edu.au</a></dd>
					<dd>Hobbies: Basketball, watching EPL, video games, reading and coding</dd>
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
								<th id = "neededradius2">16:30</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>MON</th>
								<td class="cos10026">COS10026:Live Online</td>
								<td></td>
								<td></td>
								<th id="lunch" rowspan="6">L<br>U<br>N<br>C<br>H</th>					
								<td class="tne10006" colspan="2">TNE10006:Lecture</td>
								<td class="cos10004">COS10004:Live Online</td>
								<td></td>
								<td class="cos10026">COS10026:Seminar</td>
							</tr>
							<tr>
								<th>TUE</th>
								<td class="cos10009" colspan="2">COS10009:Live Online</td>
								<td></td>
								<td></td>
								<td></td>
								<td class="cos10026" colspan="2">COS10026:Workshop</td>
								<td></td>
							</tr>
							<tr>
								<th>WED</th>
								<td class="cos10009" colspan="2">COS10009:Lab</td>
								<td></td>
								<td class="cos10009" colspan="2">COS10009:Workshop</td>
								<td></td>
								<td class="cos10004" colspan="2">COS10004:Lab</td>
							</tr>
							<tr>
								<th>THU</th>
								<td class="tne10006" colspan="3">TNE10006:Lab</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<th>FRI</th>
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
								<th id = "neededradius3">SAT</th>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td id = "neededradius4"></td>
							</tr>	
						</tbody>
						
					</table>
				<a href="about.html" class="btn" id="ret">Return to the previous Page!</a>
			</div>
	</section>
	<?php
        include("footer.inc");
    ?>
</body>
</html>