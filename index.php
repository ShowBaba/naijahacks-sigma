<?php
	include "header.php";
?>

<div class="index-page">
	<div class="img-wrapper">
		<div class="slideshow-container" >
			<div class="mySlides fade">
				<img width="100%" height="300px" src="img/slide1.jpg">
			</div>

			<div class="mySlides fade">
			  <img width="100%" height="300px" src="img/slide3.jpg">
			</div>

			<div class="mySlides fade">
			  <img width="100%" height="300px" src="img/slide4.jpg">
			</div>
		</div>
	</div>

		<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				    var i;
				    var slides = document.getElementsByClassName("mySlides");
				    for (i = 0; i < slides.length; i++) {
				       slides[i].style.display = "none";  
				    }
				    slideIndex++;
				    if (slideIndex > slides.length) {
				    	slideIndex = 1
				    }  
				    slides[slideIndex-1].style.display = "block";
				    setTimeout(showSlides, 5000); // Change image every 2 seconds
				}
		</script>
	<div class="welcome">
		<h4>Get Started</h4>
		<p>
			Whith GetAJob, you can start earning money online. 
			Getting started is easy. All you need is a laptop/smartphone, 
			and access to the internet.
		</p>

		<h4>Learn A skill</h4>
		<p>
			You need to learn skills to earn money via our platform. These 
			skills are required by certain people who are willing to pay if 
			you successfully perform certain tasks for them. You'll be matched 
			based on the skills you have acquired.
		</p>

		<h4>Get a certified</h4>
		<p>
			Here at GetAJob, we value our clients and woun't allow inexperienced 
			people to work for them. It is required you mut get your own certificate 
			by taking short tests before you can start working with any skills on our platform.
		</p>
		<h4>Start working!</h4>
		<p>
			You can start earning money by working for certain clients that are matched to you 
			once you have your certificate.
		</p>
	</div>
</div>

<?php
	include "footer.php";
?>			