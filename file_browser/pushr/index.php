<?php
	require '../vendor/autoload.php';

	$options = array(
		'cluster' => 'us2',
		'encrypted' => true
	);
	$pusher = new Pusher\Pusher(
		'034357994f9b2671024a',
		'a9218309b1af9e0d6bdc',
		'449678',
		$options
	);
	$text = "no input";

	if (isset($_POST['message'])) {
		$text = $_POST['message'];
		$text = htmlspecialchars($_POST['message']);
		echo "post:" .$_POST['message'];
	}

	$data['message'] = $text;
	$pusher->trigger('my-channel', 'my-event', $data);
?>