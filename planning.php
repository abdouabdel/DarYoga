<!DOCTYPE html>
<html lang="uk">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Asana - Classes</title>
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
				defaultDate: '2015-03-09',
				firstDay: 1,
				slotDuration: '01:00:00',
				columnFormat: 'dddd',
				allDaySlot: false,
				editable: false, // Чи можна перетягувати
				eventLimit: true, // allow "more" link when too many events
				events: [
					{
						title: 'Yoga with Ann Macsal',
						start: '2015-03-09T08:00:00',
						end: '2015-03-09T10:00:00',
						url: 'http://google.com/',
						className: 'fc-event-yoga'
					},
					{
						title: 'Yoga with Ann Macsal',
						start: '2015-03-12T09:00:00',
						end: '2015-03-12T11:00:00',
						url: 'http://google.com/',
						className: 'fc-event-yoga'
					},
					{
						title: 'Yoga with Ann Macsal',
						start: '2015-03-14T10:00:00',
						end: '2015-03-14T12:00:00',
						url: 'http://google.com/',
						className: 'fc-event-yoga'
					},
					{
						title: 'Cardio Fitness with Christina Fowler',
						start: '2015-03-13T08:00:00',
						end: '2015-03-13T09:00:00',
						url: 'http://google.com/',
						className: 'fc-event-cardio-fitness'
					},
					{
						title: 'Cardio Fitness with Christina Fowler',
						start: '2015-03-11T14:00:00',
						end: '2015-03-11T15:00:00',
						url: 'http://google.com/',
						className: 'fc-event-cardio-fitness'
					},
					{
						title: 'Cardio Fitness with Christina Fowler',
						start: '2015-03-14T15:00:00',
						end: '2015-03-14T16:00:00',
						url: 'http://google.com/',
						className: 'fc-event-cardio-fitness'
					},
					{
						title: 'Aerobics with Michelle Richards',
						start: '2015-03-10T16:00:00',
						end: '2015-03-10T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					},
					{
						title: 'Aerobics with Michelle Richards',
						start: '2015-03-13T12:00:00',
						end: '2015-03-13T14:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					},
					{
						title: 'Pilates with Danielle Hayes',
						start: '2015-03-11T10:00:00',
						end: '2015-03-11T12:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Pilates with Danielle Hayes',
						start: '2015-03-13T18:00:00',
						end: '2015-03-13T20:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Pilates with Danielle Hayes',
						start: '2015-03-15T13:00:00',
						end: '2015-03-15T15:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Spinning with Jeremy Clark',
						start: '2015-03-09T13:00:00',
						end: '2015-03-09T14:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Spinning with Jeremy Clark',
						start: '2015-03-12T17:00:00',
						end: '2015-03-12T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Spinning with Jeremy Clark',
						start: '2015-03-15T09:00:00',
						end: '2015-03-15T10:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Spinning with Jeremy Clark',
						start: '2015-03-16T13:00:00',
						end: '2015-03-16T14:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Spinning with Jeremy Clark',
						start: '2015-03-18T17:00:00',
						end: '2015-03-18T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Spinning with Jeremy Clark',
						start: '2015-03-19T09:00:00',
						end: '2015-03-19T10:00:00',
						url: 'http://google.com/',
						className: 'fc-event-spinning'
					},
					{
						title: 'Pilates with Danielle Hayes',
						start: '2015-03-17T10:00:00',
						end: '2015-03-17T12:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Pilates with Danielle Hayes',
						start: '2015-03-21T11:00:00',
						end: '2015-03-21T13:00:00',
						url: 'http://google.com/',
						className: 'fc-event-pilates'
					},
					{
						title: 'Aerobics with Michelle Richards',
						start: '2015-03-22T16:00:00',
						end: '2015-03-22T18:00:00',
						url: 'http://google.com/',
						className: 'fc-event-aerobics'
					},
					{
						title: 'Aerobics with Michelle Richards',
						start: '2015-03-19T13:00:00',
						end: '2015-03-19T15:00:00',
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
		<h1>choose your classes</h1>
	</div>
	<div class="contentWrap">
		<div class="pagePanel clear">
			<ul class="productFilter classesFilter clear">
				<li><a class="active" data-filter="all" href="#">All </a></li>
				<li><a data-filter="fc-event-yoga" href="#">Yoga</a></li>
				<li><a data-filter="fc-event-pilates" href="#">Pilates</a></li>
				<li><a data-filter="fc-event-aerobics" href="#">aerobics </a></li>
				<li><a data-filter="fc-event-spinning" href="#">spinning</a></li>
				<li><a data-filter="fc-event-cardio-fitness" href="#">cardio fitness</a></li>
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