<?php
	session_start();
	$title = 'Add Announcement';
	include('../includes/functions.inc');
	include('../includes/head.inc');
	include('../includes/nav.inc');
?>

<?php
if (isset($_POST['submit']) && $_POST['submit'] == "Add")
{
$title = mysql_real_escape_string($_POST['title']);
$content = mysql_real_escape_string($_POST['content']);
$appear = mysql_real_escape_string($_POST['appear']);
$end = mysql_real_escape_string($_POST['end']);

$result = mysql_query
(
"INSERT INTO bsa_announce SET
title='$title',
content='$content',
appear='$appear',
end='$end'"
);
if ($result) {
$message = '<p >Your announcement was successfully uploaded</p>';
} else {
$message = '<p >There was an error entering your announcement, please check over the form '.mysql_error().'</p>';
};
};
echo $message . '<br />';
?>
<?php
$today = date('Y-m-d');
?>
<form action="" method="post">
<a href="index.php" style="font-size:15pt;">Take me back to index, please, Mr. BSA Site.</a><br />

<h1>Announcement Creator</h1>
Announcement Title: <input type="text" name="title" /><br />
Announcement Content:<input type="text" name="content" /><br />
Appear Date (Year-Mo-Da)(Ex: 2012-10-20):<input type="text" name="appear" value="<?php echo $today; ?>" /><br />
Expire Date (Year-Mo-Da)(Ex: 2012-10-21):<input type="text" name="end" value="<?php echo $today; ?>" /><br />
<input type="submit" value="Add" name="submit" />
<br /><span style="font-size:10;">Hello future webmaster! Do you dislike how the date is done? Well, I challenge you to <a href="http://www.codecademy.com/">/learn php/</a> and fix it.</span>
</form>

<?php
	include('../includes/foot.inc');
?>