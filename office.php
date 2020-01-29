<?php require_once 'header.php'; ?>

<?php $object  = new Usersview(); ?>
<?php $form = new Form();
	$form->addInput('text', 'name');
	$form->addInput('password', 'password');
	$form->addSubmit('submit');
	$form->endForm();
?>

<main>
	<h1>Office Managment</h1>
	<div class="notifications"></div>

	<div class="officeGroup">
		<div class="employeeDayToDay">
			<h2>Day To Day</h2>
			<?php echo $object->showDayToDay(); ?>
		</div>

		<div class="BookingItems">
			<h2>Booking</h2>
			<?php echo $object->showBookingView(); ?>
		</div>
		<div class="changeRequests">
			<h2>Change Requests</h2>
			<?php echo $object->showPendingChange(); ?>
		</div>
	</div>

</main>

<?php require_once 'footer.php'; ?>