<!DOCTYPE html>
<html>

<head>
<?php include 'php/head.php'; ?>
<title>My Gallery - Scrapbook My Event</title>
<style type="text/css">
</style>
</head>

<body>

<div id="wrapper">
	<?php include 'php/nav_complete.php';  ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<h4 class="text-info">Hi, USER!</h4>
		</div>
		<div id="orderIdView" class="col-md-4 pull-right">
			<h4 class="text-info" style="display:inline">Order ID: </h4>
			<h4 class="text-success" style="display:inline"><strong>####-####-####</strong></h4>
		</div>
		
	</div>
	<hr />
	<div class="row">
		<div class="col-md-offset-1 col-md-10" style="border-left: solid 1px black solid; border-right: solid 1px black solid">
			<div class="row">
				<div class="col-md-12">
					<ul class="pager" style="padding: 0px">
						<li class="previous"><a href="#">Previous</a></li>
						<li class="next"><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="well">
						<img alt="img" class="img-responsive center-block" src="/img/custom_scrapbook_1.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="well">
						<img alt="img" class="img-responsive center-block" src="/img/custom_scrapbook_2.jpg">
					</div>
				</div>
				<div class="col-md-4">
					<div class="well">
						<img alt="img" class="img-responsive center-block" src="/img/custom_scrapbook_3.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'php/footer.php';  ?>
<script type="text/javascript">

    $(function () {
	
			$("#orderBoxNav").css("display", "none");
	});

</script>

</body>

</html>
