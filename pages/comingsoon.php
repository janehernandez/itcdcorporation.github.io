<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Official Website of ITCD Corporation">
    <meta name="keywords" content="Website, Tracking, Fleet Management">
    <meta name="author" content="ITCD Dev Team">

    <title>ITCD Corporation</title>
    <link rel="shortcut icon" type="image/gif" sizes="32x32" href="../assets/img/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome-all.min.css?v=5.2.0" />

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css?v=4.0.0" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css?v=1.1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css?v=1.1.0" />
</head>

<body>
	
	<!-- INCLUDE BACKGROUND IMAGES -->
	<div class="slide">
		<div class="slide-item slide-1" style="background-image: url('../assets/img/bg/bg-trans.jpg');"></div>
		<div class="slide-item slide-1" style="background-image: url('../assets/img/bg/bg-security.png');"></div>
        <div class="slide-item slide-1" style="background-image: url('../assets/img/bg/bgcs3.jpg');"></div>
        <div class="slide-item slide-1" style="background-image: url('../assets/img/bg/bgcs4.jpg');"></div>
	</div>

	<div class="size overlay">
		<!--  -->
		<div class="size flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-25">
				Coming Soon
			</h3>

			<p class="m2-txt1 txt-center p-b-48 thin">
				This page is under development, follow us for update now!
			</p>

			<div class="flex-w flex-c-m cd100 p-b-33">
				<div class="flex-col-c-m size2 border m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 days">200</span>
					<span class="s2-txt1">Days</span>
				</div>

				<div class="flex-col-c-m size2 border m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 hours">20</span>
					<span class="s2-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 border m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 minutes">50</span>
					<span class="s2-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 border m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 seconds">39</span>
					<span class="s2-txt1">Seconds</span>
				</div>
			</div>

            <a href="../" class="flex-c-m size3 s2-txt3 btnGoback trans-04 btnMargin ">Go Back</a>

		</div>
	</div>


    <script src="../assets/js/jquery-3.3.1.min.js?v=3.3.1"></script>
    <script src="../assets/js/bootstrap.min.js?v=4.0.0"></script>

    <script src="../assets/js/countdowntime/moment.min.js"></script>
    <script src="../assets/js/countdowntime/moment-timezone.min.js"></script>
    <script src="../assets/js/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="../assets/js/countdowntime/countdowntime.js"></script>

	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 200,
			endtimeHours: 20,
			endtimeMinutes: 0,
			endtimeSeconds: 0
		});
    </script>
    
    <script src="../assets/js/cs-main.js?v=1.1.0"></script>
</body>
</html>