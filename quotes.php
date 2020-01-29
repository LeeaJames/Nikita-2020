<?php require_once 'header.php'; ?>

<main>
	<h1>Webboss Quotes</h1>

	<div class="quotesOutterWrapper">
		<div class="pendingQuotes">
			<h2>Pending Quotes</h2>
			<?php
			$object  = new Usersview();
			$object->showPendingQuotes();
			?>
		</div>

		<div class="activeQuotes">
			<h2>Accepted Quotes</h2>
			<?php $object->showActiveQuotes(); ?>
		</div>
	</div>

	<div class="AddQuote"><a href="#">Add Quote</a></div>
</main>

<?php require_once 'footer.php'; ?>