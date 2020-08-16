<?php
	include('includes/functions.inc');
	include('includes/head.inc');
	include('includes/nav.inc');
?>
<h2>Our proud Eagle scouts</h2>

<?php
	$query= "SELECT * FROM bsa_eagles ORDER BY year DESC";
	$result= mysql_query($query);
	if (mysql_num_rows($result) > '0') {
		while ($row = mysql_fetch_array($result)) {
			$scouts = explode("|", $row['scout']);
			echo '<div class="eagle_year">';
			echo '<h3 class="year">';
			echo $row['year'];
			echo '</h3>';
			foreach($scouts as $thisscout) {
				echo '<p class="scout">';
				echo $thisscout;
				echo '</p>';
			}
			echo '</div>';
		};
	}
	else {
		echo "No eagle scouts. How quaint and sad."; 
	};
?>	

<?php
	include('includes/foot.inc');
?>