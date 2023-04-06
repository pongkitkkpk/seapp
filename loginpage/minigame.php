<?php
	// Create 10 random points
	for ($i = 0; $i < 10; $i++) {
		$x = rand(50, 950);
		$y = rand(50, 450);
		echo "<div class='point' style='left:{$x}px; top:{$y}px;'></div>";
	}
	?>