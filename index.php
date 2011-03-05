<?php
include("top.php");
include("bottom.php");

top();
?>

<div id="home-container">
	<div id="left-home-column">
		<div class="columncontent">
			<div class = "top-pic">
			<img src="images/mewallride.jpg" alt="wall ride"/>
			</div>
			<div class="bottom-pic">
			<img src="images/tommyjump.jpg" alt="skiier jumping"/>
			</div>
		</div>
	</div>

	<div id="mid-home-column">
		<div id="frontfeed">
		<h1>What's Happening</h1>
			<div class = "feeditem">
				<p><a href="personprofile.php">Drazam</a> uploaded a photo to <a href="resortprofile.php">Mt. Baker </a></p>
			</div>
			<div class = "feeditem">
				<p><a href="personprofile.php">Knish</a> wrote a review of Crystal Mountain</p>
			</div>
		</div>
		<div id="map">
			<h1> Find a resort </h1>
			<img src="images/map.jpg" alt="map" />
		</div>
	</div>

	<div id="right-home-column">
		<div class="columncontent">
			<div class = "top-pic">
			<img src="images/meghanbox.jpg" alt="riding a box"/>
			</div>
			<div class="bottom-pic">
			<img src="images/erin.jpg" alt="skiier smiling"/>
			</div>
		</div>
	</div>
</div>

<?php
bottom();

?>