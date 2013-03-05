<!DOCTYPE html>

<html lang="en">
<head>
<title><?php echo $title; ?></title>

<!-- for stylesheets -->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/js/datetimepicker/css/bootstrap-datetimepicker.min.css" />

<!-- for js -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/bootstrap/js/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
	
	     $('#dtp1').datetimepicker({
	     	language: 'en',
	     	pick12HourFormat: true
	     });
	     
	     $('#dtp2').datetimepicker({
	     	language: 'en',
	     	pick12HourFormat: true
	     });
	});
</script>

</head>

<body>
	<?php echo $content; ?>
</body>

</html>