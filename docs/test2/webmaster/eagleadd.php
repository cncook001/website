<?php
	session_start();
	$title = 'Add Announcement';
	include('../includes/functions.inc');
	include('../includes/head.inc');
	include('../includes/nav.inc');
?>
<script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>

<?php
if (isset($_POST['submit']) && $_POST['submit'] == "Add This Year of Eagles")
{
$year = mysql_real_escape_string($_POST['year']);
$scout = array_map("mysql_real_escape_string", $_POST["scout"]);

$query = "INSERT INTO bsa_eagles SET
year='$year'";
if ($scout) {
	$scout_array = implode('|',$scout);
	$query.= ",scout='$scout_array'";
};

$result = mysql_query($query);

if ($result) {
$message = '<p >Your scouts were successfully added to the year.</p>';
} else {
$message = '<p >There was an error entering your year, please check over the form '.mysql_error().'</p>';
};
};
echo $message . '<br />';
?>

<?php
$thisyear = date('Y');
?>
<form action="" method="post">
<a href="index.php" style="font-size:15pt;">Take me back to index, please, Mr. BSA Site.</a><br />

<h1>Eagle Scout Adder</h1>
<p>The database keeps track of the eagles by their year, because honestly that makes the most sense. So, every year when there are new eagles - add more!</p>

Year: <input type="text" name="year" value="<?php echo $thisyear; ?>" /><br />
Eagle Scout Name:<input type="text" name="scout[]" /><br />
<div class="morescouts">

</div>
<div id="addscout" style="height:70px; width:150px; background-color:#5DC1E3; padding:5px;">Press /here/ to add another scout to this /year/!</div><br />
<script type="text/javascript">
$('#addscout').click(function() {
	$('.morescouts').append('Eagle Scout Name:<input type="text" name="scout[]" /><br />')
});
</script>

<input type="submit" value="Add This Year of Eagles" name="submit" />
</form>
<?php
	include('../includes/foot.inc');
?>