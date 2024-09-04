<?php
// Handle the request
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Route to the appropriate page content
switch ($page) {
    case "about":
        require __DIR__ . "/about.php";
        break;
    
    case "mission_vision":
        require __DIR__ . "/mission_vision.php";
        break;

    case "gallery":
        require __DIR__ . "/gallery.php";
        break;

    case "contact":
        require __DIR__ . "/contact.php";
        break;

    case "sec":
        require __DIR__ . "/sec.php";
        break;

    case "quality_policy":
        require __DIR__ . "/quality_policy.php";
        break;

    case "projects":
        require __DIR__ . "/projects.php";
        break;

default: ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "template-parts/head.php"; ?>
<body>

<section id="home-parallax" class="position-relative overflow-hidden">

<video id="parallax-video" class="position-absolute w-100 h-100" autoplay="" muted="" loop="" playsinline>
	<source src="img/video/intro.mp4" type="video/mp4">
</video>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					
					<div class="mt-lg-5 pt-lg-5">
						<h1 id="title-home" class="text-center text-warning text-uppercase fw-bolder pt-md-5 pt-3 mt-3 mt-md-5	pt-lg-5 mt-lg-5" data-aos="flip-left" data-aos-duration="2000" data-aos-easing="ease-in-out" data-aos-delay="50">Ammon Contracting L.L.C</h1>

						<div class="text-center mt-md-0 mt-lg-5 mb-5 text-uppercase">
							<h3 class="crafting typed-text-output text-light d-inline"></h3>
							<div class="typed-text d-none">Crafting trust, constructing dreams</div>
						</div>
					</div>
				
			</div>
		</div>
	</div>
</section>

<?php require_once "template-parts/navbar.php"; ?>

<section id="carousel-home" class="position-relative overflow-hidden">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-7 p-0">
				<?php require_once "template-parts/carousel.php"; ?>
			</div>

			<div class="col-md-5 p-lg-5 align-middle pt-3 pb-lg-4 text-center text-light">
			
			<div class="pt-lg-5 pt-md-2 mt-md-2 mb-lg-4 mt-lg-5">

			<div id="carouselMsg" class="carousel slide carousel-fade" data-bs-ride="carousel">

				<div class="carousel-inner">

					<div class="carousel-item active animate__animated animate__slideInUp animate__slow" data-bs-interval="3000">
						<h3>Always prioritize safety of all staff</h3>
					</div>

					<div class="carousel-item animate__animated animate__slideInUp animate__slow" data-bs-interval="3000">
						<h3>wants to be more than just your builder, we want to be building partner.</h3>
					</div>

					<div class="carousel-item animate__animated animate__slideInUp animate__slow" data-bs-interval="3000">
						<h3>make recommendations based on our experience and provide you with honest answer</h3>
					</div>

						<div class="carousel-item animate__animated animate__slideInUp animate__slow" data-bs-interval="3000">
						<h3>Highly qualified engineers.</h3>
					</div>

					<div class="carousel-item animate__animated animate__slideInUp animate__slow" data-bs-interval="3000">
						<h3>Friendly and helpful communications</h3>
					</div>

					<div class="carousel-item animate__animated animate__slideInUp animate__slow" data-bs-interval="3000">
						<h3>Value Engineering</h3>
					</div>

				</div>	
			</div>
		</div>

       </div>

		</div>
	</div>
</section>

<?php
	require_once "template-parts/scrollTop.php";
	require_once "template-parts/footer.php"; 
	require_once "template-parts/bottom.php"; 
?>
</body>
</html>


<?php
}
?>
