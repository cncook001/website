<?php
	include('includes/functions.inc');
	include('includes/head.inc');
	include('includes/nav.inc');
?>
<div class="main_wrap">
	<h2>For Scouts, potential Scouts, and Parents/Guardians</h2>
	
	<p>
	We are <i>pleased</i> that you are interested in our Boy Scout Troop, and in Scouting in general.  Scouting is a tremendous youth development program that: teaches valuable skills, develops new and varied interests, builds leadership in individuals, and creates friendships and memories that will last a lifetime.  Scouts Honor! 
	</p>
	<p>
	Troop 214 was chartered in 1967, and is
	<b><?php
	// I don't want to have to change this. So I'm making it a function.
	$this_year = intval(date("Y"));
	$age = $this_year - 1967;
	echo $age;
	?> years old</b>. Our membership average over the past several years has been between <i>55-60 Scouts</i>.  We have a very active, year-round Boy Scout program.  We meet on Monday nights each week in our own "Scout Hut" at Benson Memorial United Methodist Church (BMUMC) in north Raleigh.  We'll take this opportunity to thank our chartering organization online, as they are a great partner and have provided great support to Troop 214 as one of their long-standing youth ministries.
	</p>
	
	<h2>Maps to Our Hut</h2>
	<p>
	BMUMC (Our Location): <a href="http://www.mapquest.com/maps/4706+Creedmoor+Road+Raleigh+NC+27612/">Click here for map.</a><br />
	Where we are in the BMUMC Campus: <a href="images/site-map.jpg">Click here for the map.</a><br />
	<b>Note:</b>The Scout Hut is at the top of that map. One must drive up a small hill in the BMUMC driveway, then drive around back to the Scout Hut. Also: If you are in the Order of the Arrow, our Kiowa chapter also meets at BMUMC in the Youth Center at the front of the campus (also on the map).
	</p>
	
	<h2>What We Do...</h2>
	<div id="wrap_images">
		<img src="images/about_camp.png" alt="We camp every month" /><br />
		<img src="images/about_summer.png" alt="and attend Boy Scout summer camp every summer." /><br />
		<img src="images/about_nature.png" alt="Our campouts teach outdoor skills and appreciation of natural areas, but also provide advancement opportunities and adventure." /><br />
		<img src="images/about_youth.png" alt="The Troop is youth-led, with adults acting in advisory, safety, and transportation roles." /><br />
		<img src="images/about_adults.png" alt="The adults also have as much fun as the youth. We encourage parents to consider a Troop role in which they can best use their talents and skills to help. It's rewarding." />
	<br />
	<span style="text-align:center; font-size:11pt;color:#707070;">All pictures are from our various campouts.</span>
	<p>
	We also provide community service throughout the year, have troop elections twice annually, Courts of Honor quarterly, and go on a variety of day-trips and patrol outings annually.  Over 134 Scouts have earned the coveted Eagle rank in Troop 214.  We don't judge the quality of our troop by that number, but we're proud of every one of those individuals.  We have earned Quality Unit status every year within memory, which is a "lot" of years. 
	</p>
	<p>
	<b>Curious about campouts?</b> We often go on campouts such as backpacking, caving, climbing/rappelling, whitewater rafting, canoeing, kayaking, sailing, scuba diving, and anything and everything else the Scouts decide to do in their annual planning meetings.<br />
	<a href="<?php echo full_link('photos.php'); ?>">See some pictures, here!</a>
	</p>
	</div>
	
	<h2>Want to join?</h2>
	<p>
	If you want to learn more, please contact the Scoutmaster or Senior Patrol Leader, or come visit any of our weekly meetings. The weekly Troop meetings start at 7:00pm and end at 8:30pm. We don't meet on a variety of national or school holidays, so you should check our online calendar to be sure. Also be sure to check out some of our online trip photos to see some of the campouts we go on.  And if you are brand new to Scouting you should check out <a href="http://www.thescoutzone.org/">The Scout Zone</a> for a good intro on what the Scouting program is all about. 
	</p>
</div>
<?php
	include('includes/foot.inc');
?>