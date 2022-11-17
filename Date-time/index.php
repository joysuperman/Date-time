
<h1><?php echo time(); ?></h1>
<h1><?php echo microtime(); ?></h1>
<h1><?php echo microtime(true); ?></h1>
<h1><?php echo microtime(false); ?></h1>

<!-- Microsecond in Float -->

<h1>
	<?php
	$mt = microtime(true);
	 printf('%10.18f', $mt);

	?>
</h1>

<!-- Microsecond in Float -->


<h1>
	<?php echo date('d/m/y'); ?>
	<br>
	<?php echo date('D/M/Y'); ?>
	<br>
	<?php echo date('d/F/Y'); ?>
</h1>

<!-- Unix Epoch -->
<!-- Unix TimeStamp -->


<!-- Function For code Exicution Time -->

<?php 

$starttime = microtime(true);
factorial(100);
sleep(2);
$endtime = microtime(true);
$extime = $starttime - $endtime;
?>
<h1><?php printf("%10.8f", $extime); ?></h1>

<?php
function factorial($n){
	$result = 1;
	for ($i=1; $i <= $n ; $i++) { 
		$result *= $i;
	}
	return $result;
}

?>


<h1>
	<!-- Time Zone -->
	<?php date_default_timezone_set("Asia/Dhaka"); ?>
	<?php echo date('dS M,Y h:i:s a');?>
	<br>
	<?php echo date('H:i:s A');?>
	<br>
	<?php echo date('z');?>
	<br>
	<?php echo date('t');?>

	<br>
	<?php echo date('h:i:s a',time()+12*60*60);?>
</h1>