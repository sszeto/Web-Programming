<!DOCTYPE html>
<html>

<head>
<?php include 'php/head.php'; ?>
<title>About Us - Scrapbook My Event</title>
</head>

<body>

<div id="wrapper">
	<?php include 'php/nav_complete.php';  ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center text-info"><strong>What is <em>Scrapbook 
					My Event</em>?</strong></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p style="font-size: medium"><strong><em>Scrapbook My Event</em></strong> 
					is a small business that was started as a result of one scrapbooking 
					enthusiast’s passion to preserve memories. Mandy has been making 
					scrapbooks and gifts for her own friends and family for years 
					and would like to help you create keepsakes that are completely 
					personalized. You will have the opportunity to work one-on-one 
					with Mandy, who will plan, create, and package your project 
					from start to finish! </p>
				</div>
			</div>
			<hr /><br />
			<div class="row">
				<div class="col-md-4">
					<div class="text-center">
						<img alt="Mandy Szeto" class="img-responsive img-rounded center-block" height="450" src="img/about_me.jpg" width="300" />
					</div>
					<br />
					<!--Social Media Icons-->
					<div class="text-center">
						<button class="btn btn-default mediaIcons" onclick="location.href='http://www.memoriesaholic.blogspot.com'" type="button">
						<i class="fa fa-user"></i></button>
						<button class="btn btn-default mediaIcons" onclick="location.href='http://www.facebook.com'" type="button">
						<i class="fa fa-facebook"></i></button>
						<button class="btn btn-default mediaIcons" onclick="location.href='http://www.twitter.com'" type="button">
						<i class="fa fa-twitter"></i></button>
						<button class="btn btn-default mediaIcons" onclick="location.href='http://www.pinterest.com'" type="button">
						<i class="fa fa-pinterest"></i></button></div>
					<br />
					<br />
				</div>
				<div class="col-md-8">
					<p style="font-size: medium"><strong>Mandy</strong> first discovered 
					her love of keeping memories when she was in high school and 
					has never stopped. As she started to explore new products and 
					techniques, scrapbooking supplies started taking over her home! 
					She has created thousands of pages and dozens of albums in the 
					past decade, including personal pieces, gifts for family and 
					friends, and commissioned works.</p>
					<p style="font-size: medium">Experimentation with bright colors 
					and traditional patterns has helped Mandy to develop a unique 
					and timeless style. She uses beautiful paper in gorgeous colors 
					and new methods to keep her style fresh.</p>
					<p style="font-size: medium">When Mandy is not capturing memories 
					through her scrapbooks, she enjoys trying new restaurants, spending 
					time with friends, and having as many new experiences as possible. 
					You can always count on her to take pictures during her travels 
					and culinary adventures because she is always thinking about 
					her next scrapbook page designs!</p>
					<p style="font-size: medium">There is nothing more important 
					to Mandy than cherishing moments with family and loved ones. 
					She hopes that she will be able to share that experience with 
					you.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'php/footer.php';  ?>
<script type="text/javascript">

	//Handle toolbar effects
    $(function () {
		$("li > a").css("color","gray");
		$("#aboutNav").css("color","black");
		$("#aboutNav").css("font-weight","bolder");
    });


</script>

</body>

</html>
