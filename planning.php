<!DOCTYPE html>
<html lang="uk">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>DarYoga</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<!--[if lte IE 8]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/bxslider.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/fullcalendar.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/fullcalendar.print.css" media='print' />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/selectric.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/adaptive.css" media="screen" />

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.selectric.min.js"></script>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev',
					center: 'title',
					right: 'next'
				},
				axisFormat: 'HH:mm',
				minTime: '08:00:00',
				maxTime: '20:00:00',
				defaultView: 'agendaWeek',
				defaultDate: '2017-05-20',
				firstDay: 1,
				slotDuration: '01:00:00',
				columnFormat: 'dddd',
				allDaySlot: false,
				editable: false, // Чи можна перетягувати
				eventLimit: true, // allow "more" link when too many events
				events: [
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-14T08:00:00',
						end: '2017-05-14T10:00:00',
						url: 'http://google.com/',
						className: 'fc-event-yoga'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-12T09:00:00',
						end: '2017-05-12T11:00:00',
						url: 'http://google.com/',
						className: 'fc-event-yoga'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-14T10:00:00',
						end: '2017-05-14T12:00:00',
						url: 'http://google.com/',
						className: 'fc-event-yoga'
					},
					{
						title: 'Yoga en plein air Tamara',
						start: '2017-05-13T08:00:00',
						end: '2017-05-13T09:00:00',
						url: 'http://google.com/',
						className: 'fc-event-cardio-fitness'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-11T14:00:00',
						end: '2017-05-11T15:00:00',
						url: 'http://google.com/',
						className: 'fc-event-cardio-fitness'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-14T15:00:00',
						end: '2017-05-14T16:00:00',
						url: 'http://google.com/',
						className: 'fc-event-cardio-fitness'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-10T16:00:00',
						end: '2017-05-10T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-13T12:00:00',
						end: '2017-05-13T14:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-11T10:00:00',
						end: '2017-05-11T12:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-13T18:00:00',
						end: '2017-05-13T20:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-15T13:00:00',
						end: '2017-05-15T15:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-09T13:00:00',
						end: '2017-05-09T14:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-12T17:00:00',
						end: '2017-05-12T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-15T09:00:00',
						end: '2017-05-15T10:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-16T13:00:00',
						end: '2017-05-16T14:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-18T17:00:00',
						end: '2017-05-18T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-19T09:00:00',
						end: '2017-05-19T10:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-17T10:00:00',
						end: '2017-05-17T12:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-21T11:00:00',
						end: '2017-05-21T13:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-22T16:00:00',
						end: '2017-05-22T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					},
					{
						title: 'Yoga avec Tamara',
						start: '2017-05-19T13:00:00',
						end: '2017-05-19T15:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					}
				]
			});

		});

	</script>

</head>
<body class="classes">
<?php  include('include/header.php');?>
<section class="container">
	<div class="pageHeader" style="background-image: url(images/content/bg-parallax3.jpg);">
		<h1>Planning des cours</h1>
	</div>
	<div class="contentWrap">
		<div class="pagePanel clear">
			<ul class="productFilter classesFilter clear">
				<li><a class="active" data-filter="all" href="#">Tous </a></li>
				<li><a data-filter="fc-event-yoga" href="#">Yoga</a></li>
				<li><a data-filter="fc-event-pilates" href="#">Session débutant</a></li>
				<li><a data-filter="fc-event-aerobics" href="#">Session intermidiaire </a></li>
				<li><a data-filter="fc-event-spinning" href="#">Atelier</a></li>
				<li><a data-filter="fc-event-cardio-fitness" href="#">Yoga sur le toil</a></li>
			</ul>
		</div>
		<div class="classesCallendar">
			<div id='calendar'></div>
		</div>
	</div>
</section>

<?php  include('include/footer.php');?>
<?php  include('include/mobileMenu.php');?>
</body>

</html>