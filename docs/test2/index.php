<?php
	include('includes/functions.inc');
	include('includes/head.inc');
	include('includes/nav.inc');
?>

<div id="announce_tab">
	<div id="top_announce">
		<h2>Announcements</h2>
	</div>
	<div id="bot_announce">
		<?php
			$query= "SELECT * FROM bsa_announce WHERE appear<=NOW() AND end>NOW() ORDER BY id DESC";
			$result= mysql_query($query);
				if (mysql_num_rows($result) > '0') {
					while ($row = mysql_fetch_array($result)) {
						echo '<div class="announcement">';
						echo '<h3 class="announcement_title">';
						echo $row['title'];
						echo '</h3>';
						echo '<p class="announcement_content">';
						echo ' - '.$row['content'];
						echo '</p>';
						echo '</div>';
					};
				}
				else {
					echo "No announcements."; 
				};
		?>	
	<!--
		<h3 class="announcement_title">Test</h3>
		<p class="announcement_content">Testing</p>
	-->
	</div>
</div>
<div id="X_tab">
	<div id="top_announce">
		<h2>Welcome to Troop 214</h2>
	</div>
	<img src="images/mainpic.png" alt="Our Troop" style="width:526px; margin:6px;" />
	<div class="main_text_x">
		<p>
		Troop 214 is a proud part of the Boy Scouts of America's Occonneechee Council, Impeesa District, and the Kiowa chapter (Lodge 104) of the Order of the Arrow. Troop 214 is chartered by (and is grateful to) Benson Memorial United Methodist Church in Raleigh, NC.
		</p>
	</div>
	<div class="main_text_x">
		<h3>Scoutmaster Minute</h3>
		<!-- will be made with PHP -->
		<p>
		In the adventure known as life, there are those who live it vicariously and enjoy the ride from the safety of an armchair, and that's good enough for them.
There are those who have a few chances to realize incredible and life-changing experiences - and though they don't repeat them they carry with them a growth and personal philosophy for the rest of their lives.
		</p>
		<p>
		And then there are those for whom a taste is never enough - for whom the lust for adventure is nearly insatiable.
And if you add to that the overwhelming desire to; challenge one's self, to lead and help others, and to set the example for others to follow, then you get where we reside....where the end of one adventure only signifies the beginning of another. Then you are one of us, because that's how we roll.
		</p>
	</div>
</div>
<?php
	include('includes/foot.inc');
?>