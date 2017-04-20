<?php
    include "head.php";
?>

<header id="header-studio">

	<div class="header-overlay header-overlay-light">

	<div class="header-snipe">

		&equiv;MACH<br />
		INE&equiv;&equiv;<br />
		GUN&equiv;&equiv;<br />
		STU&equiv;&equiv;<br />
		&equiv;DIOS
	</div><!-- header snipe -->

	<section class="header-inner header-sun">

		<div class="header-inner-overlay"> 
		
			<div class="header-nav">	
				<?php include "nav.php"; ?>

			</div><!-- header nav -->

			<div class="landing-headline">

				<div class="column hide-on-small"></div><!-- twocolumn -->
				<div class="column"></div><!-- column -->

				<div class="left land-head-left" style="position: relative; padding-bottom: 0;">


					<h2>Welcome to the Studio.</h2><br />

					<p class="justify">
						Machine Gun is a unique open concept room with great sound and a warm atmosphere. Machine Gun’s space is large enough for a full band to record live off the floor, but with a coziness that’s perfect for smaller groups and more intimate projects.
					</p>

				</div><!-- left -->

			</div><!-- landing headline -->

		</div><!-- header inner overlay -->

	</section><!-- header inner section -->

	</div><!-- header overlay -->

</header><!-- header -->

<section>

<div class="content">
<div class="content-overlay">

	<section class="bars">

		<div class="widecenter">
			
			<div class="studio-photo-row">

				<div class="studio-photo studio-photo-1">
					<a href="images/studio-1.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>From Drum Area</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

				<div class="studio-photo studio-photo-3">
					<a href="images/studio-3.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>Ludwig Kit</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

				<div class="studio-photo studio-photo-long studio-photo-2">
					<a href="images/studio-2.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>Strings</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

			</div><!-- studio photo row -->

			<div class="studio-photo-row">

				<div class="studio-photo studio-photo-long studio-photo-4">
					<a href="images/studio-4.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>Central</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

				<div class="studio-photo studio-photo-long">
					<div class="studio-photo-inner-content">

					<span>Pictures can only say so much - the spirit and soul of Machine Gun Studios must be experienced live. <a href="contact.php">Contact me</a> to set up a time.</span>

					</div><!-- studio photo inner content -->
				</div><!-- studio photo -->

				<div class="studio-photo studio-photo-long studio-undermar studio-photo-5">
					<a href="images/studio-5.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>Lounge Act</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

			</div><!-- studio photo row -->

			<div class="studio-photo-row">

				<div class="studio-photo studio-photo-6">
					<a href="images/studio-6.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>Live Room</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
				</div><!-- studio photo -->

				<div class="studio-photo studio-photo-7">
					<a href="images/studio-7.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>Drum Area Right</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

				<div class="studio-photo studio-photo-long studio-photo-8">
					<a href="images/studio-8.jpg" class="noline">
					<div class="studio-photo-inner">
						<span>The Helm</span>
						<div class="studio-photo-snipe"><i class="fa fa-eye"></i></div><!-- studio photo snipe -->
					</div><!-- studio photo inner -->
					</a>
				</div><!-- studio photo -->

			</div><!-- studio photo row -->

		</div><!-- widecenter -->

	</section>


	<section class="bars">

		<div class="column hide-x-small"></div>
		<div class="column hide-on-small hide-x-small"></div>

		<div class="left grow-on-small small-top-pad">
			
			<span class="headline">About the Studio:</span><br />

			<p>
			<span class="studio-subheader">Location:</span><br />

			Machine Gun Studios is located in beautiful Jamaica Plain, a distinct neighborhood located within the City of Boston, Massachusetts.
			</p>

			<p>
			<span class="studio-subheader">Transportation:</span><br />

			By car, we're located within 15 minutes of a handful of Boston-area interstates. Guest parking spots are available on the street. When coming by rail and most bus lines, Forest Hills is a walkable nearby transportation hub. The studio is located ~5 miles from Downtown Boston.
			</p>

			<p>
			<span class="studio-subheader">Availability & Hours:</span><br />

			Your recording time will be split into multiple tracking sessions in most cases. To accomodate all of those who are contributing, we have flexible scheduling with slots available weekday mornings and afternoons. At this time there are no "drop-in" hours for mixing or any other services (sorry!) - all times are arranged and agreed upon 5+ days prior to a session.
			</p>

		</div><!-- left -->

		<div class="column"></div>

		<div id="map" class="right right-photo right-photo-landing-studio hide-on-small snarf">
		</div><!-- right -->

		<div class="twocolumn sideblueblock hide-until-maxwidth "></div>

	</section><!-- bars section -->


</div><!-- content overlay -->
</div><!-- content -->

</section><!-- section studio -->

 <script>
      function initMap() {
        var uluru = {lat: 42.309396, lng: -71.115771};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          mapTypeControl: false,
          zoomControl: false,
          scaleControl: true,
          streetViewControl: false,
          fullscreenControl: false,

          center: uluru,
					styles: [{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}]
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKNOrEi9N-L2RrZAgITHaKIyJlj5BjouU&callback=initMap">
    </script>

<?php 

    include "footer.php";

?>
