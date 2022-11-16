<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hi there, it's me Nguyen!</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php
    	include("header.inc");
    ?>
		<section class = "aboutpage">
				<figure>
					<img src="./images/nguyenabout.png" alt="xyz">
				</figure>
				<div class="personaldetail">
					<h1>Hi there, I'm Nguyen!</h1>
					<h5>Majoring in <span class="name">Computer Science</span></h5>
						<dl>
							<dt>Personal details</dt>
							<dd>Name(On passport): Nguyen Khanh Nguyen</dd>
							<dd>Student ID:103800504</dd>
							<dd>Email : <a href="mailto:103800504@student.swin.edu.au" target="_blank">103800504@student.swin.edu.au</a></dd>
							<dd>Hobbies: writing and painting, fantasy and thriller, video games, reading and coding</dd>
						</dl>
					<a href="#swtb" class="btn">Look at my Swinburne timetable</a>
				</div>
		</section>


		<section class="ttble" id="table_1">
			<h1 class ="swtb"><span id="ti">THIS IS</span> MY SWINBURNE TIMETABLE!</h1>
				<div class="time">
						<table class="center">
							<tr>
								<th>DAY/HRS</th>
								<th>8:30 - 9:30</th>
								<th>9:30 - 10:30</th>
								<th>10:30 - 11:30</th>
								<th>11:30-12:30</th>
								<th>12:30 - 13:30</th>
								<th>13:30 - 14:30</th>
								<th>14:30 - 15:30</th>
								<th>15:30 - 16:30</th>
								<th>16:30 - 17:30</th>
								<th>17:30 - 18:30</th>
							</tr>
							<tr>
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
								<th>MON</th>
								<td class="cos10026">COS10026:Live Online</td>
								<td></td>
								<th class="lunch">LUNCH</th>	
								<td class="club" colspan="4">Club Activities</td>				
								<td class="cos10026">COS10026:Seminar</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<th>TUE</th>
								<td class="cos10009" colspan="2">COS10009:Live Online</td>
								<td class="cos10026" colspan="2">COS10026:Workshop</td>
								<th class="lunch">LUNCH</th>
								<td></td>
								<td></td>
								<td class="lit30002" >LIT30004:Tutorial</td>
								<td></td>
								<td class="cos10025">COS10025:Seminar</td>
							</tr>
							<tr>
								<th>WED</th>
								<td class="cos10009" colspan="2">COS10009:Lab</td>
								<td class="lunch" rowspan="4">L<br>U<br>N<br>C<br>H</td>
								<td></td>
								<td></td>
								<td></td>
								<td class="cos10025" colspan="2">COS10025:Workshop</td>
								<td></td>
								<td></td>
							</tr>
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
								<td></td>
							</tr>
							<tr>
								<th>SAT</th>
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
						</table>
						<a href="about.html" class="btn" id="ret">Return to the previous Page!</a>
				</div>
		</section>
		<?php
        include("footer.inc");
    ?>
	</body>
</html>