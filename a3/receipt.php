<?php
include_once('tools.php');
noSession();
topModule("Lunardo Cinema - Receipt");
?>
    <main><?php receiptAndTicketModule(); ?></main>
<?php endModule(); ?>