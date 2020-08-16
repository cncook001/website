<?php
	session_start();
	$title = 'Add Announcement';
	include('../includes/functions.inc');
	include('../includes/head.inc');
	include('../includes/nav.inc');
?>


<p>Hello Webmaster. Nice to meet you. My name was Kenny, but now my name is yours! I'm the BSA site.</p>
<p>Here's the stuff you can do through here:</p>
</ul>
	<li><a href="add.php">Add Announcements</a></li><br />
	<li><a href="eagleadd.php">Add Eagle Scouts</a></li>
</ul>
<p>If you are horribly lost and confused and need help, or broke something incidentally that you don't understand, contact me: knvjones@gmail.com</p>
<?php
	include('../includes/foot.inc');
?>