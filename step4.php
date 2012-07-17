<?php

// Include another file. Will not throw an error if the file does not exist
include 'html/header.php'; // Use include_once if you only want to include the file one time

?>

I can count to 10:
<ul>
    <!-- We're now using PHPs template friendly format for the for loop -->
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</ul>

I'm getting more and more drunk:
<ul>
    <?php for ($i = 99; $i >= 1; $i--): ?>
        <li><?php echo $i; ?> bottles of beer on the wall</li>
    <?php endfor; ?>
</ul>

<?php

// Require another file. Will throw an error if the file does not exist
require 'html/footer.php'; // Use require_once if you only want to require the file one time
