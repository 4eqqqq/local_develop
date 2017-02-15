<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">
	<!-- Less styles -->
	<link rel="stylesheet/less" href="css/style.less">
	<!-- LessJS -->
	<script src="js/less.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
	</script>
	<script src="js/parallax/parallax.min.js"></script>
	<script src=js/main.js></script>


</head>
<body>

	<header>
		<div class="conatiner-fluid" >
			<div class="container">
				<div class="col-md-2">
					<h1>Blow Fish</h1>
				</div>
				
				<div class="col-md-8">
					<nav>
						<ul class="mmenu">
							<li><a href="#about_me">О себе</a></li>
							<li><a href="#skills">Навыки</a></li>	
							<li><a href="#portfolio">Портфолио</a></li>	
							<li><a href="#education">Образование</a></li>	
						</ul>
					</nav>
				</div>

				<div class="col-md-2">
					
				</div>

			</div>
		</div>
	</header>

	<main id="main" data-parallax="scroll" data-image-src="img/parallax4.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Привет, меня зовут Сергей и я</p>
					<h1>web разработчик</h1>
				</div>
			</div>
		</div>
		
		<section id="about_me">
			<h3>О себе</h3>
		</section>
		<section id="skills">
			<h3>Навыки</h3>
		</section>

		<section id="portfolio">
			<h3>Портфолио</h3>
		</section>

		<section id="education">
			<h3>Образование</h3>
		</section>

	</main>
	

	<footer>

	</footer>

<script type="text/javascript">
$(function() {
   $('a[href^="#"]').click(function () { 
     elementClick = $(this).attr("href");
     destination = $(elementClick).offset().top;
     $('html,body').stop().animate({ scrollTop: destination }, 1000);
     return false;
   });
 });
</script>
</body>
</html>