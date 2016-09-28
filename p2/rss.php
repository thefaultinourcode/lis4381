<!DOCTYPE HTML>
<html>
	<!-- minimal code provided: be sure to use Bootstrap to make it "mobile first" -->
<head>
  <meta charset="utf-8">
  <title>Using RSS Feeds</title>
<!-- Include FontAwesome CSS to use feedback icons provided by FontAwesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap for responsive, mobile-first design. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Note: following file is for form validation. -->
<link rel="stylesheet" href="css/formValidation.min.css"/>

<!-- Starter template for your own custom styling. -->
<link href="css/starter-template.css" rel="stylesheet">

</head>
<body>
<?php

//RSS code goes here...
$url= 'http://www.npr.org/rss/rss.php?id=10003';

$feed = simplexml_load_file($url, 'SimpleXMLIterator');

echo "<h2> NPR News Headlines </h2>";

echo "<h2>" . $feed->channel->description . "</h2>";

$filtered = new LimitIterator($feed->channel->item, 0, 10);
foreach ($filtered as $item){ ?>
	<h4><a href="<?= $item->link; ?>" target="_blank"><?=$item->title;?></a></h4>

	<?php

	date_default_timezone_set('America/New_York');

	$date = new DateTime($item->pubDate);
	$date->setTimezone(new DateTimeZone('America/New_York'));

	$offset = $date->getOffset();

	$timezone = ($offset == -14400) ? ' EDT' : ' EST';

	echo $date->format('M j, Y, g:ia') . $timezone;
?>

	<p> <?php echo $item->description; ?> </p>
<?php } ?>
</body>
</html>
