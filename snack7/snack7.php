<?php
require_once __DIR__ . '/array.php'
?>
 <?php foreach ($classe as $alunno) { ?>
   <?php echo $alunno['Nome']; echo $alunno['Cognome']; ?>
    <?php foreach ($alunno as $key => $value) {
        # code...
    }
<?php } ?>