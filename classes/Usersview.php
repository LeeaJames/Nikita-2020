<?php
class Usersview extends Users {

	public function showUser($name) {
		$results = $this->getUser($name);
		echo "Full name: " . $results[0]['first_name'] . " " . $results[0]['last_name'] . "<br>";
		echo "Email: " . $results[0]['email'];
	}

	public function showPendingQuotes() {
		$results = $this->getPendingQuotes();?>
		<div class="quoteWrapper">
			<table style="width:100%">
					  <tr>
					    <th>Name</th>
					    <th>Company</th>
					    <th>Price</th>
					    <th>Options</th>
					  </tr>
		<?php
		foreach ($results as $result) { ?>
				 
					  <tr>
					    <td><p class="name"><?php echo $result['name'] ?></p></td>
					    <td><p class="co_name"><?php echo $result['co_name'] ?></p</td>
					    <td><p class="price"><?php echo "£" . $result['price'] ?></p></td>
					    <td><a href="#">View</a> <a href="#">Edit</a></td>
					  </tr>
					
		<?php
		} ?>
			</table>
		</div>
	<?php }


	public function showActiveQuotes() {
		$results = $this->getActiveQuotes();?>
		<div class="quoteWrapper">
			<table style="width:100%">
					  <tr>
					    <th>Name</th>
					    <th>Company</th>
					    <th>Price</th>
					    <th>Options</th>
					  </tr>
		<?php
		foreach ($results as $result) { ?>
				 
					  <tr>
					    <td><p class="name"><?php echo $result['name'] ?></p></td>
					    <td><p class="co_name"><?php echo $result['co_name'] ?></p</td>
					    <td><p class="price"><?php echo "£" . $result['price'] ?></p></td>
					    <td><a href="#">View</a> <a href="#">Edit</a> <a href="#">Create Job</a></td>
					  </tr>
					
		<?php
		} ?>
			</table>
		</div>
	<?php }


	public function showAllJobs() {
		$results = $this->getAllJobs();?>
		<div class="jobsWrapper">
			<table style="width:100%">
					  <tr>
					    <th>Ref</th>
					    <th>Name</th>
					    <th>Assigned</th>
					  </tr>
		<?php
		foreach ($results as $result) { ?>
				 
					  <tr>
					    <td><p class="name"><?php echo $result['id'] ?></p></td>
					    <td><p class="co_name"><?php echo $result['name'] ?></p></td>
					    <td><p class="price"><?php echo $result['price'] ?></p></td>
					  </tr>
					
		<?php
		} ?>
			</table>
		</div>
	<?php }

	public function showDayToDay() {
		$results = $this->getDayToDay();?>
		<div class="jobsWrapper">
			<table style="width:100%">
					  <tr>
					    <th>id</th>
					    <th>Name</th>
					    <th>status</th>
					    <th>Change</th>
					  </tr>
		<?php
		foreach ($results as $result) { ?>
				 
					  <tr>
					    <td><p class="id"><?php echo $result['id'] ?></p></td>
					    <td><p class="employee"><?php echo $result['employee'] ?></p></td>
					    <td><p class="status"><?php echo $result['status'] ?></p></td>
					    <td><a href="#">Edit</a></td>
					  </tr>
					
		<?php
		} ?>
			</table>
		</div>
	<?php }


	public function showBookingView() {
		$results = $this->getBookingView();?>
		<div class="jobsWrapper">
			<table style="width:100%">
					  <tr>
					    <th>id</th>
					    <th>Asset</th>
					    <th>status</th>
					    <th>Change</th>
					  </tr>
		<?php
		foreach ($results as $result) { ?>
				 
					  <tr>
					    <td><p class="id"><?php echo $result['id'] ?></p></td>
					    <td><p class="employee"><?php echo $result['asset'] ?></p></td>
					    <td><p class="status"><?php echo $result['status'] ?></p></td>
					    <td><a href="#">Edit</a></td>
					  </tr>
					
		<?php
		} ?>
			</table>
		</div>
	<?php }

	public function showPendingChange() {
		$results = $this->getPendingChange();?>
		<div class="jobsWrapper">
			<table style="width:100%">
					  <tr>
					    <th>id</th>
					    <th>Asset</th>
					    <th>status</th>
					    <th>Change</th>
					  </tr>
		<?php
		foreach ($results as $result) { ?>
				 
					  <tr>
					    <td><p class="id"><?php echo $result['id'] ?></p></td>
					    <td><p class="employee"><?php echo $result['asset'] ?></p></td>
					    <td><p class="status"><?php echo $result['status'] ?></p></td>
					    <td><a href="#">Edit</a></td>
					  </tr>
					
		<?php
		} ?>
			</table>
		</div>
	<?php }

}