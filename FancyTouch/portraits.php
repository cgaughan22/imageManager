<html lang="en">
	<head>
		<title>Fancy Touch Photography</title>
		<?php include 'globalHead.php';?>
	</head>

	<body>
		<?php include 'nav-welcome.php';?>
		
		<div id="content">
			
			<div id="photo-column-2">
				<img id="myImg" onclick="showImgModal('myImg')" class="images" alt="Matthew James Gaughan, Bradenton, FL <br> December 2016" src="images/matty.jpg">
			</div>

			<div id="photo-column-2">
				<img id="myImg2" onclick="showImgModal('myImg2')" class="images" src="images/Amy.jpg">
			</div>

			<div id="photo-column-2">
				<img id="myImg3" onclick="showImgModal('myImg3')" class="images" src="images/Alyssa.jpg">
			</div>

			<div id="photo-column-2">
				<img id="myImg4" onclick="showImgModal('myImg4')" class="images" src="images/matty-plad.png">
			</div>
		</div>
			<!-- The Modal -->
		<?php include 'modal.php';?>
		<?php include 'footer.php';?>
	</body>
</html>