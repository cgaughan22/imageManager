
<html lang="en">

	<head>
		<title>Gallery: Fancy Touch Photography</title>
		<?php include 'globalHead.php';?>
	</head>

	<body>
		
		<?php include 'nav-welcome.php';?>
		
		<div id="content">

			<div id="photo-column-2">
				<img id="myImg" class="images" onclick="showImgModal('myImg')" alt=" Bradenton, FL <br> December 2016" src="images/boardwalk.jpg">
				<img id="myImg5" class="images" onclick="showImgModal('myImg5')" alt=" Denver, Colorado <br> February 2017" src="images/denver-red-moon.png">

				<img id="myImg3" class="images" onclick="showImgModal('myImg3')" alt=" Denver, Colorado <br> February 2017" src="images/denver-fir.png">

				<img id="myImg4" class="images" onclick="showImgModal('myImg4')" alt=" Denver, Colorado <br> February 2017" src="images/denver-bench.png">

				<img id="myImg2" class="images" onclick="showImgModal('myImg2')" alt=" Robinson Preserve - Bradenton, Florida <br> December 2016" src="images/robinsonPreserve.jpg">

				<img id="myImg6" class="images" onclick="showImgModal('myImg6')" alt=" Fort Rosecrans National Cemetary - San Diego, California <br> May 2017" src="images/diego-military-cemetery.png">
			</div>
		</div>
				<!-- The Modal -->
		<?php include 'modal.php';?>
		<?php include 'footer.php';?>
	</body>
</html>