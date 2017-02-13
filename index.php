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


</head>
<body>

	<header>
		<div class="conatiner-fluid" >
			<div class="container">
				<div class="col-md-2">
					<h1>Blow Fish</h1>
				</div>
				
				<div class="col-md-8">
					
				</div>

				<div class="col-md-2">
					
				</div>

			</div>
		</div>
	</header>

	<div id="main" data-parallax="scroll" data-image-src="img/parallax4.jpg">
		<div class="container">
			<div class="row">
				<div class="section">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam consequuntur alias facilis, velit dolores repellat quod unde dicta porro ratione corporis quae libero mollitia sint vel hic quos, reiciendis illum!</p>
				</div>
			</div>
			<div class="row">
				<div >
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam eos, obcaecati ducimus ipsum sapiente aliquid amet nulla, libero harum ratione at distinctio rem veritatis possimus modi eligendi et quaerat praesentium.</span>
				</div>
			</div>
			<div class="row">
				<div >
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae repellat aperiam, blanditiis quod assumenda earum, fugit quam aut debitis reiciendis. Nulla earum ullam maxime atque, facilis aperiam. Quidem, velit.</div>
				</div>
				<div class="row">
				<div >
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae repellat aperiam, blanditiis quod assumenda earum, fugit quam aut debitis reiciendis. Nulla earum ullam maxime atque, faciliss aperiam. Quidem, velit.</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae repellat aperiam, blanditiis quod assumenda earum, fugit quam aut debitis reiciendis. Nulla earum ullam maxime atque, facilis aperiam. Quidem, velit.</div>
				</div>
			</div>
			<div class="row">
				<div class="section">
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae repellat aperiam, blanditiis quod assumenda earum, fugit quam aut debitis reiciendis. Nulla earum ullam maxime atque, facilis aperiam. Quidem, velit.</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea repudiandae repellat aperiam, blanditiis quod assumenda earum, fugit quam aut debitis reiciendis. Nulla earum ullam maxime atque, facilis aperiam. Quidem, velit.</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<footer>

	</footer>

<script>	
	$(function(){
    $('body[data-type="background"]').each(function(){
        var $bgobj = $(this); // создаем объект
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент 
            // Присваиваем значение background-position
            var coords = 'center '+ yPos + 'px';
            // Создаем эффект Parallax Scrolling
            $bgobj.css({ backgroundPosition: coords });
        });
    });
});
</script>

</body>
</html>