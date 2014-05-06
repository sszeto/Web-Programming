<!DOCTYPE html>
<html>

<head>
<?php include 'php/head.php'; ?>
<title>Services - Scrapbook My Event</title>
<style type="text/css">
h3 {
	 font-size:large;
	 text-transform:uppercase;
}
</style>
</head>

<body>

<?php include 'php/nav_complete.php';  ?><?php include 'php/service_nav.php';  ?>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h4><strong>Using inspiration from your life and memories, we 
					will create designs that match your style for every occasion.
					<br />
					Let us document your biggest milestones and celebrations! We 
					offer event scrapbooking, custom scrapbooks, and shadow boxes!
					</strong></h4>
				</div>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<div class="text-center">
							<h3 class="text-info">
							<a href="/services/event_scrapbooking.php">Let us celebrate 
							with you </a></h3>
							<br />
							<img alt="event" class="img-responsive img-rounded center-block" src="img/event_Scrapbook_cover.jpg" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center">
							<h3 class="text-info">
							<a href="/services/custom_scrapbooking.php">Let us create 
							with you</a></h3>
							<br />
							<img alt="event" class="img-responsive img-rounded center-block" src="img/custom_album_cover.jpg"/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center">
							<h3 class="text-info">
							<a href="/services/shadow_boxes.php">Let us decorate 
							with you</a></h3>
							<br />
							<img alt="event" class="img-responsive img-rounded center-block" src="img/shadow_box_cover.jpg" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'php/footer.php';  ?>
<script type="text/javascript">

    $(function () { //Handle toolbar effects
		$("li > a").css("color","gray");
		$("#serviceNav").css("color","black");
		$("#serviceNav").css("font-weight","bolder");
    });


</script>

</body>

</html>
