<?php require_once 'header.php'; ?>

<main>
    <h1>Webboss Websites</h1>
    <?php
    $object  = new Usersview();
    $object->showUser("lee");
    ?>
</main>

<?php require_once 'footer.php'; ?>