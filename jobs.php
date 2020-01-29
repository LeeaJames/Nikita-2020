<?php require_once 'header.php'; ?>

<main>
    <h1>Webboss Jobs</h1>

    <?php
    $object  = new Usersview();
    $object->showAllJobs();

    ?>

    <div class="AddJobs"><a href="#">Add Quote</a></div>

</main>

<?php require_once 'footer.php'; ?>