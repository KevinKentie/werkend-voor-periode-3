<?php 
	$userrole = array('root', 'coworker');
	include("security.php"); 
?>
<h3>Coworker homepage</h3>
Uw id is: <?php echo $_SESSION['id']; ?><br>
Uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>