<!DOCTYPE html>
<html>

<head>
<?php include 'php/head.php'; ?>
<title>Home - Scrapbook My Event</title>
</head>

<body>

<div id="wrapper">
	<?php include 'php/nav_complete.php';  ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="text-center navbar-collapse">
				<!--Carousel-->
				<div id="sme-carousel" class="carousel slide" data-ride="carousel" style="max-width:1200px">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#sme-carousel">
						</li>
						<li data-slide-to="1" data-target="#sme-carousel"></li>
						<li data-slide-to="2" data-target="#sme-carousel"></li>
						<li data-slide-to="3" data-target="#sme-carousel"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" style="max-height: 450px">
						<div class="item active">
							<img alt="Image1" class="img-responsive center-block" src="img/Carousel_1.jpg" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img alt="Image2" class="img-responsive center-block" src="img/Carousel_2.jpg" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img alt="Image3" class="img-responsive center-block" src="img/Carousel_3.jpg" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img alt="Image4" class="img-responsive center-block" src="img/Carousel_4.jpg" />
							<div class="carousel-caption">
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" data-slide="prev" href="#sme-carousel">
					<span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" data-slide="next" href="#sme-carousel">
					<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'php/footer.php';  ?>
<script type="text/javascript">
	
	$(function () {
		$("#sme-carousel").carousel({
			interval: 5000 //Set time between each picture
		});
	});


    $(function () {   //Handle toolbar effects
		$("li > a").css("color","gray");
		$("#homeNav").css("color","black");
		$("#homeNav").css("font-weight","bolder");
    });


</script>

</body>

</html>
