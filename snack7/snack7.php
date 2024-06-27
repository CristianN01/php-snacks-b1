<?php
require_once __DIR__ . '/array.php'
?>
 <?php foreach ($classe as $alunno) { ?>
   <li>
        <?php echo $alunno['Nome'] . ' ' . $alunno['Cognome']; ?> - <?php echo count($alunno['Voti']) ?>
   </li>
<?php } ?>